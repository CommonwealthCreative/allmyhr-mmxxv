<?php
/**
 * Template Part for displaying a product in card layout item.
 *
 * Usage: This template part should be included in a WordPress loop.
 */

// Get the post's featured image.
$featured_image_url = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );

// Get the excerpt (trimmed to 10 words).
$excerpt = wp_trim_words( get_the_content(), 25, '...' );

// Get the post title.
$post_title = get_the_title();

// Get the post permalink.
$post_permalink = get_permalink();

// Get the WooCommerce product object.
$product = wc_get_product( get_the_ID() );
$price_html = $product ? $product->get_price_html() : '';
?>

<div class="w-layout-cell">
  <a data-w-id="728995ad-174f-d62c-3c5c-78d5b987a088" post-<?php echo esc_attr( get_the_ID() ); ?> href="<?php echo esc_url( $post_permalink ); ?>" class="card products w-inline-block">
    <div class="w-layout-hflex phrases">
      <img loading="lazy" src="<?php echo esc_url( $featured_image_url ); ?>" alt="<?php echo esc_attr( $post_title ); ?>" class="headlineicon">
      <h3><?php echo esc_html( $post_title ); ?></h3>
    </div>
    <div class="crumb"><?php echo esc_html( $excerpt ); ?></div>
    <div class="text-arrow">
      <h4 class="price"><?php echo $price_html; ?></h4>
      <h4 class="highlight blu txt">Learn More</h4>
      <h4 class="fa move" style="transform: translate3d(0, 0, 0); opacity: 0;"></h4>
    </div>
  </a>
</div>
