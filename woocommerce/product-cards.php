<?php
/**
 * Template Part for displaying a product in card layout item.
 *
 * Usage: This template part should be included in a WordPress loop.
 * Updated: FR-9 - "Buy Now" only on homepage, "Learn More" elsewhere
 */

// Get the post's featured image.
$featured_image_url = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );

// Get the excerpt (trimmed to 25 words).
$excerpt = wp_trim_words( get_the_content(), 25, '...' );

// Get the post title.
$post_title = get_the_title();

// Get the post permalink.
$post_permalink = get_permalink();

// Get the WooCommerce product object.
$product = wc_get_product( get_the_ID() );
$price_html = $product ? $product->get_price_html() : '';
$product_id = get_the_ID();

// Check if we're on the homepage - show "Buy Now" only there
$is_homepage = is_front_page() || is_home();

if ( $is_homepage ) {
    // Build the add-to-cart URL for homepage
    $add_to_cart_id = $product_id;

    if ( $product && $product->is_type( 'variable' ) ) {
        // Try to get the default variation first
        $default_attributes = $product->get_default_attributes();
        
        if ( ! empty( $default_attributes ) ) {
            $data_store = WC_Data_Store::load( 'product' );
            $variation_id = $data_store->find_matching_product_variation( $product, $default_attributes );
            if ( $variation_id ) {
                $add_to_cart_id = $variation_id;
            }
        }
        
        // If no default, get the first available variation
        if ( $add_to_cart_id === $product_id ) {
            $available_variations = $product->get_available_variations();
            if ( ! empty( $available_variations ) && isset( $available_variations[0]['variation_id'] ) ) {
                $add_to_cart_id = $available_variations[0]['variation_id'];
            }
        }
    }

    $card_url = esc_url( add_query_arg( 'add-to-cart', $add_to_cart_id, wc_get_checkout_url() ) );
    $cta_text = 'Buy Now';
} else {
    // On archive/shop pages, link to product page
    $card_url = esc_url( $post_permalink );
    $cta_text = 'Learn More';
}
?>

<div class="w-layout-cell">
  <a data-w-id="728995ad-174f-d62c-3c5c-78d5b987a088" post-<?php echo esc_attr( get_the_ID() ); ?> href="<?php echo $card_url; ?>" class="card products w-inline-block">
    <div class="w-layout-hflex phrases">
      <img loading="lazy" src="<?php echo esc_url( $featured_image_url ); ?>" alt="<?php echo esc_attr( $post_title ); ?>" class="headlineicon">
      <h3><?php echo esc_html( $post_title ); ?></h3>
    </div>
    <div class="crumb"><?php echo esc_html( $excerpt ); ?></div>
    <div class="text-arrow">
      <h4 class="price"><?php echo $price_html; ?></h4>
      <h4 class="highlight blu txt"><?php echo esc_html( $cta_text ); ?></h4>
      <h4 class="fa move" style="transform: translate3d(0, 0, 0); opacity: 0;"></h4>
    </div>
  </a>
</div>
