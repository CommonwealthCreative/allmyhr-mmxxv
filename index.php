<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package allmyhr-mmxxv
 */

get_header();
?> 
<!-- Video Modal with Facade Pattern (FR-6) - iframe injected on click -->
<div data-w-id="8a799611-cf86-bde8-7da8-eb88c679e185" style="display:none" class="videomodal">
  <div style="padding-top:56.27659574468085%" class="video w-video w-embed" id="video-container" data-video-id="MsLReBq4ziU">
    <!-- Iframe will be injected here when modal opens -->
  </div>
</div>
<script>
(function() {
  var videoContainer = document.getElementById('video-container');
  var videoModal = document.querySelector('.videomodal');
  var videoId = videoContainer ? videoContainer.getAttribute('data-video-id') : null;
  var iframeLoaded = false;
  
  // Observer to detect when modal becomes visible
  if (videoModal && videoId) {
    var observer = new MutationObserver(function(mutations) {
      mutations.forEach(function(mutation) {
        if (mutation.attributeName === 'style') {
          var isVisible = videoModal.style.display !== 'none';
          if (isVisible && !iframeLoaded) {
            var iframe = document.createElement('iframe');
            iframe.width = '560';
            iframe.height = '315';
            iframe.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&mute=1&rel=0';
            iframe.title = 'YouTube video player';
            iframe.frameBorder = '0';
            iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
            iframe.referrerPolicy = 'strict-origin-when-cross-origin';
            iframe.allowFullscreen = true;
            videoContainer.appendChild(iframe);
            iframeLoaded = true;
          }
        }
      });
    });
    observer.observe(videoModal, { attributes: true });
  }
})();
</script>
<section class="hero-section">
    <div class="lottie">
      <div class="lottie-hero" data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198" data-animation-type="lottie" data-src="/wp-content/themes/allmyhr-mmxxv/documents/64b6c16282020c34caa0f1e1_lottie-third.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="15.958333333333334" data-duration="0"></div>
      <div class="overlay-linear"></div>
      <div class="overlay-radial"></div>
    </div>
    <div class="container h-content">

      <div id="w-node-_550baef3-6bff-bff4-8e38-614c2cbe1a39-2cbe1a38" class="w-layout-layout wf-layout-layout">
        <div class="w-layout-cell hero-headline">
        <h1 data-w-id="5ff76c14-9535-a666-9770-4405304ca541" style="opacity:0"><span class="highlight txt">Streamline </span>Your Company’s HR</h1>
                        <p data-w-id="280c230b-7b91-4e93-726f-9132bd035b07" style="opacity:0; padding-top:30px;">The Most Cost-Effective HR Solutions for Small &amp; Mid-Sized Employers. </p>
                                 <div class="start">
          <?php echo do_shortcode('[gravityform id="12" title="false" description="false"]'); ?>
          </div>
        </div>
        <div class="w-layout-cell hero-video">
                  <a href="#" class="video-thumb w-inline-block">
          <div data-w-id="719366e5-82b9-18de-3851-f5d8d28718c2" class="lottie-animation" data-animation-type="lottie" data-src="/wp-content/themes/allmyhr-mmxxv/documents/Animation---1740613569953.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="2" data-duration="0"></div>
        </a>
        </div>
</div>


      <div>
 
          <hr>
        <h2>Complete HR Confidence With One Simple Plan</h2>
        <h3>All Included In Your AllMyHR Membership</h3>
      <p class="crumbs highlight blu txt" style="margin-bottom:0px;">No Long Term Contracts / 30 Day Money Back Guarantee</p>
      <div id="w-node-_78bab3d5-6256-b993-9747-3ffbacfcaf8e-fbd4393f" class="w-layout-layout toggles wf-layout-layout">
        <div class="w-layout-cell">
          <div data-w-id="78bab3d5-6256-b993-9747-3ffbacfcaf91" class="faq-card">
            <div class="faq-question">
              <div class="w-layout-hflex phrases">
                <div class="fa highlight blu txt"></div>
                <h4>Save Time and Stay Fully Compliant</h4>
              </div>
              <span class="faq-arrow-css fa highlight blu txt"></span>
            </div>
            <div style="height:0PX" class="faq-answer">
              <p class="faq-paragraph">Your Living Handbook can be created in less than an hour and kept compliant with a click of your mouse. <a href="/contact-allmyhr/" target="_blank" class="highlight blu txt">Learn More.</a>
              </p>
            </div>
          </div>
          <div data-w-id="d9c079cd-7fab-52f2-34d3-752a612cbb7a" class="faq-card">
            <div class="faq-question">
              <div class="w-layout-hflex phrases">
                <div class="fa highlight blu txt"></div>
                <h4>Develop Talent Internally</h4>
              </div>
              <span class="faq-arrow-css fa highlight blu txt"></span>
            </div>
            <div style="height:0PX" class="faq-answer">
              <p class="faq-paragraph">LMS designed for efficiency, >350 courses, certificates and easy tracking. <a href="/contact-allmyhr/" target="_blank" class="highlight blu txt">Learn More.</a>
              </p>
            </div>
          </div>
          <div data-w-id="c6f4563f-5f0d-1b6f-a210-276101866095" class="faq-card">
            <div class="faq-question">
              <div class="w-layout-hflex phrases">
                <div class="fa highlight blu txt"></div>
                <h4>Accurate Answers At Your Fingertips</h4>
              </div>
              <span class="faq-arrow-css fa highlight blu txt"></span>
            </div>
            <div style="height:0PX" class="faq-answer">
              <p class="faq-paragraph">Your Private Compliance Portal is your new trusted source.  <a href="/contact-allmyhr/" target="_blank" class="highlight blu txt">Learn More.</a>
              </p>
            </div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div data-w-id="09d921a1-d2f5-0ad4-f301-97c581119e18" class="faq-card">
            <div class="faq-question">
              <div class="w-layout-hflex phrases">
                <div class="fa highlight blu txt"></div>
                <h4>No More HR Guesswork</h4>
              </div>
              <span class="faq-arrow-css fa highlight blu txt"></span>
            </div>
            <div style="height:0PX" class="faq-answer">
              <p class="faq-paragraph">Unlimited Phone, email or chat with your team of Accredited HR Advisors. <a href="/contact-allmyhr/" target="_blank" class="highlight blu txt">Learn More.</a>
              </p>
            </div>
          </div>
          <div data-w-id="0e24b523-12e8-000b-2a3c-2a5f80b36703" class="faq-card">
            <div class="faq-question">
              <div class="w-layout-hflex phrases">
                <div class="fa highlight blu txt"></div>
                <h4>Access Critical HR Info Instantly</h4>
              </div>
              <span class="faq-arrow-css fa highlight blu txt"></span>
            </div>
            <div style="height:0PX" class="faq-answer">
              <p class="faq-paragraph">Find policies, forms, templates, best-practice advice in seconds. <a href="/contact-allmyhr/" target="_blank" class="highlight blu txt">Learn More.</a>
              </p>
            </div>
          </div>
          <div data-w-id="d8bb6ffe-a56b-1c2f-1376-3e3772258146" class="faq-card">
            <div class="faq-question">
              <div class="w-layout-hflex phrases">
                <div class="fa highlight blu txt"></div>
                <h4>Maximize Your Time</h4>
              </div>
              <span class="faq-arrow-css fa highlight blu txt"></span>
            </div>
            <div style="height:0PX" class="faq-answer">
              <p class="faq-paragraph">Instantly find all your favorite services on your personalized Dashboard. No More searching. <a href="/contact-allmyhr/" target="_blank" class="highlight blu txt">Learn More.</a>
              </p>
            </div>
          </div>
        </div>
      </div>


    </div>
    </div>
	<?php get_template_part('template-parts/content', 'trusted'); ?>
  </section>
  <section id="ondemand" class="content-section bg-dkblue bg-gradientblack">
  <?php get_template_part('template-parts/content', 'testimonials'); ?>
    <div class="container features">
    <div class="container h-content">
    <h2 data-w-id="9d2d1334-04f7-1727-2bde-ab46a553ce11" class="center"><span class="highlight txt">On-Demand HR Services</span><br>Reduce Compliance Risks, Boost Efficiency, and Streamline Administration</h2>
        <a href="https://calendly.com/allmyhr10/allmyhr-product-demo" id="picker" class="btn wht w-button">Schedule A Demo</a>
        <a href="https://allmyhr.com/contact-allmyhr/" id="picker" class="btn clear w-button">Contact Us Today</a>
      </div>
      <div id="w-node-_728995ad-174f-d62c-3c5c-78d5b987a086-b987a086" class="w-layout-layout wf-layout-layout">
      <?php
/**
 * Custom Loop to Display All Products Using template-parts/content-cards.php
 * Excludes products in the "Uncategorized" category.
 * Uses transient caching for improved performance (FR-8)
 */

// Try to get cached product IDs
$product_ids = get_transient( 'allmyhr_homepage_products' );

if ( false === $product_ids ) {
    // Cache miss - run query and cache the result
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'fields'         => 'ids', // Only get IDs for initial query
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => array( 'uncategorized' ),
                'operator' => 'NOT IN',
            ),
        ),
    );
    
    $product_query = new WP_Query( $args );
    $product_ids = $product_query->posts;
    
    // Cache for 1 hour (cleared on product save via functions.php)
    set_transient( 'allmyhr_homepage_products', $product_ids, HOUR_IN_SECONDS );
}

if ( ! empty( $product_ids ) ) :
    foreach ( $product_ids as $product_id ) :
        $GLOBALS['post'] = get_post( $product_id );
        setup_postdata( $GLOBALS['post'] );
        wc_get_template_part( 'woocommerce/product', 'cards' );
    endforeach;
    wp_reset_postdata();
else :
    echo '<p>' . esc_html__( 'No products found.', 'allmyhr-mmxxv' ) . '</p>';
endif;
?>



      
      </div>
      <div class="bg-jumbo highlight blu txt">
        <div><strong>Buy Now</strong></div>
      </div>
    </div>

  </section>
    <section class="content-section bg-white">
      	<?php get_template_part('template-parts/content', 'faqs'); ?>
</section>
  	<section class="content-section bg-dkblue">
    <?php get_template_part('template-parts/content', 'benefits-jumbo'); ?>
  </section>
  <section class="content-section bg-dkblue bg-gradientblack">
  <?php get_template_part('template-parts/content', 'benefits-icons'); ?>
    <?php get_template_part('template-parts/content', 'benefits-dashboard'); ?>
  </section>
  <section class="content-section bg-white">

	<?php get_template_part('template-parts/content', 'quoteform'); ?>
  </section>
  



<?php
/*get_sidebar();*/
get_footer();
