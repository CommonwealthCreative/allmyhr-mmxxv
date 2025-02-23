<?php
/**
 * Template Part for displaying a posts  in card layout item. (The Cards for Woo Commerce are in /woo... /product-cards!)
 *
 * Usage: This template part should be included in a WordPress loop.
 */

// Get the post's featured image.
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');

// Get the first 140 characters of the post content.
$excerpt = wp_trim_words(get_the_content(), 10, '...');

// Get the post title.
$post_title = get_the_title();

// Get the post permalink.
$post_permalink = get_permalink();
?>

<div class="w-layout-cell">
<a data-w-id="728995ad-174f-d62c-3c5c-78d5b987a088"  post-<?php echo esc_attr(get_the_ID()); ?> href="<?php echo esc_url($post_permalink); ?>" class="card products w-inline-block">
            <div class="w-layout-hflex phrases"> <img loading="lazy" src="<?php echo esc_url($featured_image_url); ?>" alt="<?php echo esc_attr($post_title); ?>" class="headlineicon">
              <h3><?php echo esc_html($post_title); ?></h3>
            </div>
            <div class="crumb"><?php echo esc_html($excerpt); ?></div>
            <div class="text-arrow">
              <h4 class="price">$9.99</h4>
              <h4 class="highlight blu txt">Learn More</h4>
              <h4 class="fa move" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 0;"></h4>
            </div>
          </a>
</div>

