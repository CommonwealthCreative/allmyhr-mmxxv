<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<section class="header-section">
    <div class="lottie">
      <div class="lottie-hero" data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198" data-animation-type="lottie" data-src="/wp-content/themes/allmyhr-mmxxv/documents/64b6c16282020c34caa0f1e1_lottie-third.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="15.958333333333334" data-duration="0"></div>
      <div class="overlay-linear"></div>
      <div class="overlay-radial"></div>
    </div>
    <div class="container h-content">
      <h1 data-w-id="5ff76c14-9535-a666-9770-4405304ca541" style="opacity:0"><span class="highlight txt">HR Made Simple</span><br>The Streamlined Plan for Every Stage of Your Business</h1>
      <div class="simple-nav">
        <a href="#" class="simple-nav-link active">Full Service</a>
        <a href="#ondemand" class="simple-nav-link inner">On-Demand</a>
        <a href="#faq" class="simple-nav-link inner">Features</a>
        <a href="#quote" class="simple-nav-link inner">Instant Quote</a>
      </div>
    </div>
    <div class="container service">
      <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="bg-glow highlight"></div>
      <div class="bg-highlight highlight"></div>
      <div data-current="Monthly" data-easing="ease" data-duration-in="300" data-duration-out="100" class="pricing-tabs w-tabs">
        <div class="toggle-btn w-tab-menu">
          <a data-w-tab="Monthly" class="price-tab w-inline-block w-tab-link w--current">
            <div class="tab-text simple-nav-link">Monthly</div>
            <div class="toggle-contain w-clearfix">
              <div class="toggle-dot right"></div>
            </div>
            <div class="tab-text simple-nav-link active">Annually</div>
          </a>
          <a data-w-tab="Annually" class="price-tab w-inline-block w-tab-link">
            <div class="tab-text simple-nav-link active">Monthly</div>
            <div class="toggle-contain">
              <div class="toggle-dot"></div>
            </div>
            <div class="tab-text simple-nav-link">Annually</div>
          </a>
        </div>
        <div class="slider-card plans w-tab-content">
          <div data-w-tab="Monthly" class="w-tab-pane w--tab-active">
          <?php do_action( 'mmxxv_product_tab_card_hook', 124 ); ?>
          </div>
          <div data-w-tab="Annually" class="w-tab-pane">
          <?php do_action( 'mmxxv_product_tab_card_hook', 113 ); ?>
          </div>
        </div>
      </div>
    </div>
    <a href="#quote" class="highlight txt">More Than 500 Employees? Ask Us For A Custom Quote.</a>
  </section>
  <section id="ondemand" class="content-section bg-dkblue bg-gradientblack">
    <div class="container features">
      <div data-w-id="9d2d1334-04f7-1727-2bde-ab46a553ce10" style="opacity:0" class="container h-content">
        <h2 class="center"><span class="highlight txt">On-Demand HR Services</span><br>We offer straightforward, flexible pricing tailored to your business's growing HR needs.</h2>
        <a href="#quote" class="btn wht w-button">Schedule A Demo</a>
        <a href="/contact-allmyhr/" class="btn clear w-button">Contact Us Today</a>
      </div>
      <div id="w-node-_728995ad-174f-d62c-3c5c-78d5b987a086-b987a086" class="w-layout-layout wf-layout-layout">
      <?php
/**
 * Custom Loop to Display All Products Using template-parts/content-cards.php
 * No pagination or default wrappers are included.
 */

get_header('shop'); // Optionally load your shop header

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1, // Retrieve all products
    'post_status'    => 'publish',
);

$all_products = new WP_Query( $args );

if ( $all_products->have_posts() ) :
    while ( $all_products->have_posts() ) : $all_products->the_post();
        // Load your custom product template part
        wc_get_template_part( 'woocommerce/product', 'cards' );
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>' . esc_html__( 'No products found.', 'your-text-domain' ) . '</p>';
endif;

?>


      
      </div>
      <div class="bg-jumbo highlight blu txt">
        <div><strong>On-Demand</strong></div>
      </div>
    </div>
    <?php get_template_part('template-parts/content', 'testimonials'); ?>
  </section>
  <section class="content-section bg-white">
  <?php get_template_part('template-parts/content', 'faqs'); ?>
	<?php get_template_part('template-parts/content', 'quoteform'); ?>
  </section>
<?php get_footer( 'shop' );
