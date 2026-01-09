<?php
/**
 * Aries REST API Endpoint
 *
 * Handles ChatGPT integration for the Aries template.
 *
 * @package allmyhr-mmxxv
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register REST API routes for Aries
 */
function aries_register_rest_routes() {
    register_rest_route( 'allmyhr/v1', '/aries-chat', array(
        'methods'             => 'POST',
        'callback'            => 'aries_chat_callback',
        'permission_callback' => 'aries_chat_permission_check',
        'args'                => array(
            'question' => array(
                'required'          => true,
                'type'              => 'string',
                'sanitize_callback' => 'sanitize_text_field',
            ),
            'state' => array(
                'required'          => true,
                'type'              => 'string',
                'sanitize_callback' => 'sanitize_text_field',
            ),
        ),
    ) );
}
add_action( 'rest_api_init', 'aries_register_rest_routes' );

/**
 * Permission callback for the aries-chat endpoint
 *
 * @param WP_REST_Request $request The request object.
 * @return bool|WP_Error True if permission granted, WP_Error otherwise.
 */
function aries_chat_permission_check( $request ) {
    // Verify the nonce from the X-WP-Nonce header
    $nonce = $request->get_header( 'X-WP-Nonce' );
    
    if ( ! $nonce || ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        return new WP_Error(
            'rest_forbidden',
            __( 'Invalid or missing security token.', 'allmyhr-mmxxv' ),
            array( 'status' => 403 )
        );
    }
    
    return true;
}

/**
 * Check rate limiting for the current IP
 *
 * @return bool|WP_Error True if within limits, WP_Error if exceeded.
 */
function aries_check_rate_limit() {
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $transient_key = 'aries_rate_' . md5( $ip );
    $limit = 5; // 5 requests per hour
    
    $current_count = get_transient( $transient_key );
    
    if ( false === $current_count ) {
        // First request from this IP in the time window
        set_transient( $transient_key, 1, HOUR_IN_SECONDS );
        return true;
    }
    
    if ( $current_count >= $limit ) {
        return new WP_Error(
            'rate_limit_exceeded',
            __( "You've reached the maximum number of requests. Please try again later.", 'allmyhr-mmxxv' ),
            array( 'status' => 429 )
        );
    }
    
    // Increment the count
    set_transient( $transient_key, $current_count + 1, HOUR_IN_SECONDS );
    return true;
}

/**
 * Main callback for the aries-chat endpoint
 *
 * @param WP_REST_Request $request The request object.
 * @return WP_REST_Response|WP_Error Response object or error.
 */
function aries_chat_callback( $request ) {
    // Check rate limiting
    $rate_check = aries_check_rate_limit();
    if ( is_wp_error( $rate_check ) ) {
        return $rate_check;
    }
    
    // Get request parameters
    $question = $request->get_param( 'question' );
    $state = $request->get_param( 'state' );
    
    // Validate inputs
    if ( empty( $question ) || empty( $state ) ) {
        return new WP_REST_Response( array(
            'success' => false,
            'message' => 'Question and state are required.',
        ), 400 );
    }
    
    // Get API key from environment variable
    $api_key = getenv( 'OPENAI_API_KEY' );
    
    if ( empty( $api_key ) ) {
        // Log error for admin but return generic message to user
        error_log( 'Aries: OpenAI API key not configured.' );
        return new WP_REST_Response( array(
            'success' => false,
            'message' => 'Service temporarily unavailable. Please try again later.',
        ), 503 );
    }
    
    // Get prompt context from options
    $context = get_option( 'aries_chatgpt_context', aries_get_default_context() );
    
    // Replace [STATE] placeholder with actual state
    $context = str_replace( '[STATE]', $state, $context );
    
    // Get model from options
    $model = get_option( 'aries_openai_model', 'gpt-3.5-turbo' );
    
    // Build the messages array for ChatGPT
    $messages = array(
        array(
            'role'    => 'system',
            'content' => $context,
        ),
        array(
            'role'    => 'user',
            'content' => $question,
        ),
    );
    
    // Make request to OpenAI API
    $response = wp_remote_post( 'https://api.openai.com/v1/chat/completions', array(
        'timeout' => 30,
        'headers' => array(
            'Authorization' => 'Bearer ' . $api_key,
            'Content-Type'  => 'application/json',
        ),
        'body' => wp_json_encode( array(
            'model'      => $model,
            'messages'   => $messages,
            'max_tokens' => 500,
        ) ),
    ) );
    
    // Handle errors
    if ( is_wp_error( $response ) ) {
        error_log( 'Aries OpenAI Error: ' . $response->get_error_message() );
        return new WP_REST_Response( array(
            'success' => false,
            'message' => 'Unable to process your request. Please try again later.',
        ), 500 );
    }
    
    $response_code = wp_remote_retrieve_response_code( $response );
    $response_body = wp_remote_retrieve_body( $response );
    $data = json_decode( $response_body, true );
    
    // Check for API errors
    if ( $response_code !== 200 ) {
        $error_message = $data['error']['message'] ?? 'Unknown error';
        error_log( 'Aries OpenAI API Error (' . $response_code . '): ' . $error_message );
        return new WP_REST_Response( array(
            'success' => false,
            'message' => 'Unable to process your request. Please try again later.',
        ), 500 );
    }
    
    // Extract the AI response
    $ai_response = $data['choices'][0]['message']['content'] ?? '';
    
    if ( empty( $ai_response ) ) {
        return new WP_REST_Response( array(
            'success' => false,
            'message' => 'No response received. Please try again.',
        ), 500 );
    }
    
    // Return successful response
    return new WP_REST_Response( array(
        'success'  => true,
        'response' => $ai_response,
    ), 200 );
}

/**
 * Get the default ChatGPT context/prompt
 *
 * @return string Default context.
 */
function aries_get_default_context() {
    return "You are an experienced HR professional helping small business owners and HR managers understand employment law and workplace compliance. The user is located in [STATE]. Provide helpful, practical guidance based on their question. Keep responses concise (2-3 paragraphs). Always recommend consulting with a certified HR professional or attorney for specific legal matters. End your response by encouraging them to provide their name and email to receive personalized follow-up from the AllMyHR team.";
}
