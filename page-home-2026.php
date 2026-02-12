<?php
/**
 * Template Name: Home 2026
 *
 * Homepage template for AllMyHR 2026 featuring ARIES AI capabilities.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package allmyhr-mmxxv
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

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
    <h1 data-w-id="5ff76c14-9535-a666-9770-4405304ca541" style="opacity:0">Your Complete <span class="highlight txt">HR Compliance</span> &amp; Support System</h1>
    <h2>Now Powered by <span class="highlight txt">ARIES AI</span></h2>
      <div id="w-node-_550baef3-6bff-bff4-8e38-614c2cbe1a39-2cbe1a38" class="w-layout-layout wf-layout-layout">
        <div class="w-layout-cell hero-headline">
          <p data-w-id="280c230b-7b91-4e93-726f-9132bd035b07" style="opacity:0; padding-top:30px;">Everything you need to manage employees, stay compliant with changing regulations, and handle tough HR situations — backed by expert advisors and AI-powered intelligence.</p>
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
    </div>
	<?php get_template_part('template-parts/content', 'trusted'); ?>
</section>

<?php
get_footer();
