<?php
/**
 * Aries Settings Page
 *
 * Admin settings for configuring the Aries ChatGPT integration.
 *
 * @package allmyhr-mmxxv
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register the settings page under Settings menu
 */
function aries_add_settings_page() {
    add_options_page(
        __( 'Aries Settings', 'allmyhr-mmxxv' ),
        __( 'Aries Settings', 'allmyhr-mmxxv' ),
        'manage_options',
        'aries-settings',
        'aries_render_settings_page'
    );
}
add_action( 'admin_menu', 'aries_add_settings_page' );

/**
 * Register settings
 */
function aries_register_settings() {
    // Register settings
    register_setting( 'aries_settings_group', 'aries_chatgpt_context', array(
        'type'              => 'string',
        'sanitize_callback' => 'sanitize_textarea_field',
        'default'           => aries_get_default_context(),
    ) );

    register_setting( 'aries_settings_group', 'aries_openai_model', array(
        'type'              => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'gpt-3.5-turbo',
    ) );

    // Add settings section
    add_settings_section(
        'aries_main_section',
        __( 'ChatGPT Configuration', 'allmyhr-mmxxv' ),
        'aries_section_callback',
        'aries-settings'
    );

    // Add settings fields
    add_settings_field(
        'aries_chatgpt_context',
        __( 'AI Prompt Context', 'allmyhr-mmxxv' ),
        'aries_context_field_callback',
        'aries-settings',
        'aries_main_section'
    );

    add_settings_field(
        'aries_openai_model',
        __( 'OpenAI Model', 'allmyhr-mmxxv' ),
        'aries_model_field_callback',
        'aries-settings',
        'aries_main_section'
    );
}
add_action( 'admin_init', 'aries_register_settings' );

/**
 * Section description callback
 */
function aries_section_callback() {
    echo '<p>' . esc_html__( 'Configure the ChatGPT integration for the Aries template. Use [STATE] placeholder to include the user\'s selected state in the prompt.', 'allmyhr-mmxxv' ) . '</p>';
}

/**
 * Context textarea field callback
 */
function aries_context_field_callback() {
    $value = get_option( 'aries_chatgpt_context', aries_get_default_context() );
    ?>
    <textarea 
        name="aries_chatgpt_context" 
        id="aries_chatgpt_context" 
        rows="8" 
        cols="80" 
        class="large-text"
    ><?php echo esc_textarea( $value ); ?></textarea>
    <p class="description">
        <?php esc_html_e( 'The system prompt sent to ChatGPT. Use [STATE] to insert the user\'s selected state.', 'allmyhr-mmxxv' ); ?>
    </p>
    <p class="description">
        <button type="button" class="button button-secondary" onclick="document.getElementById('aries_chatgpt_context').value = '<?php echo esc_js( aries_get_default_context() ); ?>';">
            <?php esc_html_e( 'Reset to Default', 'allmyhr-mmxxv' ); ?>
        </button>
    </p>
    <?php
}

/**
 * Model dropdown field callback
 */
function aries_model_field_callback() {
    $value = get_option( 'aries_openai_model', 'gpt-3.5-turbo' );
    $models = array(
        'gpt-3.5-turbo' => 'GPT-3.5 Turbo (Faster, Lower Cost)',
        'gpt-4'         => 'GPT-4 (More Capable, Higher Cost)',
        'gpt-4-turbo'   => 'GPT-4 Turbo (Latest, Balanced)',
    );
    ?>
    <select name="aries_openai_model" id="aries_openai_model">
        <?php foreach ( $models as $model_id => $model_name ) : ?>
            <option value="<?php echo esc_attr( $model_id ); ?>" <?php selected( $value, $model_id ); ?>>
                <?php echo esc_html( $model_name ); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <p class="description">
        <?php esc_html_e( 'Select the OpenAI model to use for generating responses.', 'allmyhr-mmxxv' ); ?>
    </p>
    <?php
}

/**
 * Render the settings page
 */
function aries_render_settings_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    // Check if settings were saved
    if ( isset( $_GET['settings-updated'] ) ) {
        add_settings_error(
            'aries_messages',
            'aries_message',
            __( 'Settings Saved', 'allmyhr-mmxxv' ),
            'updated'
        );
    }

    // Check if API key is configured
    $api_key = getenv( 'OPENAI_API_KEY' );
    if ( empty( $api_key ) ) {
        add_settings_error(
            'aries_messages',
            'aries_api_warning',
            __( 'Warning: OPENAI_API_KEY environment variable is not set. The Aries chat feature will not work until configured.', 'allmyhr-mmxxv' ),
            'error'
        );
    }

    settings_errors( 'aries_messages' );
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        
        <form action="options.php" method="post">
            <?php
            settings_fields( 'aries_settings_group' );
            do_settings_sections( 'aries-settings' );
            submit_button( __( 'Save Settings', 'allmyhr-mmxxv' ) );
            ?>
        </form>

        <hr>

        <h2><?php esc_html_e( 'Environment Status', 'allmyhr-mmxxv' ); ?></h2>
        <table class="widefat" style="max-width: 600px;">
            <tr>
                <th><?php esc_html_e( 'OPENAI_API_KEY', 'allmyhr-mmxxv' ); ?></th>
                <td>
                    <?php if ( ! empty( $api_key ) ) : ?>
                        <span style="color: green;">✓ <?php esc_html_e( 'Configured', 'allmyhr-mmxxv' ); ?></span>
                        <code><?php echo esc_html( substr( $api_key, 0, 7 ) . '...' . substr( $api_key, -4 ) ); ?></code>
                    <?php else : ?>
                        <span style="color: red;">✗ <?php esc_html_e( 'Not Configured', 'allmyhr-mmxxv' ); ?></span>
                        <p class="description">
                            <?php esc_html_e( 'Add OPENAI_API_KEY to your Docker environment variables or .env file.', 'allmyhr-mmxxv' ); ?>
                        </p>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </div>
    <?php
}

/**
 * Get the default ChatGPT context/prompt
 * This function is also used by aries-rest-api.php
 *
 * @return string Default context.
 */
if ( ! function_exists( 'aries_get_default_context' ) ) {
    function aries_get_default_context() {
        return "You are an experienced HR professional helping small business owners and HR managers understand employment law and workplace compliance. The user is located in [STATE]. Provide helpful, practical guidance based on their question. Keep responses concise (2-3 paragraphs). Always recommend consulting with a certified HR professional or attorney for specific legal matters. End your response by encouraging them to provide their name and email to receive personalized follow-up from the AllMyHR team.";
    }
}
