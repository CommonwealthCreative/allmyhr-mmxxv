<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package allmyhr-mmxxv
 */

?>
<section class="content-section bg-dkblue bg-gradientblack footer">
    <div class="container">
      <div id="w-node-a5ca248d-812d-b134-dbd9-8fc3b593d55e-b593d55c" class="w-layout-layout wf-layout-layout">
        <div class="w-layout-cell">
          <a href="/" class="site-info w-nav-brand"><img src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-logo.svg" loading="lazy" alt="" class="site-logo">
            <div class="site-title">AllMyHR</div>
          </a>
          <div class="card footer">
            <div class="w-layout-hflex bullet">
              <a href="https://www.facebook.com/SimplifyMyHR" target="_blank" class="crumb"><span class="fa brands highlight blu txt"></span></a>
              <a href="https://www.linkedin.com/company/allmyhr" target="_blank" class="crumb"><span class="fa brands highlight blu txt"></span></a>
              <a href="https://www.youtube.com/channel/UCEa4lTPHQdur-UTlggeGV4Q" target="_blank" class="crumb"><span class="fa brands highlight blu txt"></span></a>
            </div>
            <h4>Schedule A Demo</h4>
            <p class="crumb">The simplest, most cost-effective way to streamline HR, reduce compliance risks, and focus on growing your business.</p>
            <a href="/contact-allmyhr/" class="nav-link btn ftr w-button">Contact Us Today</a>
          </div>
        </div>
        <div class="w-layout-cell">
          <div id="w-node-a5ca248d-812d-b134-dbd9-8fc3b593d576-b593d55c" class="w-layout-layout footer-columns wf-layout-layout">
            <div class="w-layout-cell footer-col">
              <div class="footer-title hr">Contact</div>
              <div class="w-layout-hflex bullet">
                <div class="crumb"><span class="fa highlight txt"></span></div>
                <h4 class="crumb"><a href="https://www.google.com/maps/place/AllMyHR/@38.2966628,-77.4946264,17z/data=!3m1!4b1!4m6!3m5!1s0x89b6c1fc6bcc843d:0x372bfbd58d7abad6!8m2!3d38.2966628!4d-77.4946264!16s%2Fg%2F11fhrgy1bd?entry=ttu&g_ep=EgoyMDI1MDIxOS4xIKXMDSoASAFQAw%3D%3D" target="_blank">P.O. Box 1628 Stafford VA.22555-1628</a></h4>
              </div>
              <div class="w-layout-hflex bullet">
                <div class="crumb"><span class="fa highlight txt"></span></div>
                <h4 class="crumb"><a href="mailto:contact@allmyhr.com/">contact@allmyhr.com</a></h4>
              </div>
              <div class="w-layout-hflex bullet">
                <div class="crumb"><span class="fa highlight txt"></span></div>
                <h4 class="crumb"><a href="tel:+15403732121">540-373-2121 Ext.1</a></h4>
              </div>
            </div>
            <div class="w-layout-cell footer-col">
              <div class="footer-title hr">Company</div>
              <?php dynamic_sidebar( 'footer-widget-left' ); ?>
            </div>
            <div class="w-layout-cell footer-col">
              <div class="footer-title hr">Quick Links</div>
              <?php dynamic_sidebar( 'footer-widget-right' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="footer-section">
    <div class="container footer">
      <div class="w-layout-hflex"><img src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-users.svg" loading="lazy" width="Auto" height="25" alt="" class="footer-icons"><img src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-certification.svg" loading="lazy" alt="" height="25" class="footer-icons"><img src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-gdpr.svg" loading="lazy" alt="" height="25" class="footer-icons"><img src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-hippa.svg" loading="lazy" alt="" height="25" class="footer-icons"></div>
      <p class="footer-link">©2025 AllMyHr Company. <a href="https://allmyhr.com/terms-of-service/" target="_blank">All Rights Reserved. Terms &amp; Conditions.</a> <a target="_blank" href="https://thecommonwealthcreative.com">Website By Commonwealth Creative</a></p>
    </div>
  </section>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
	console.log("[CC Checkout Scroll] Patch active");

	const originalScrollTo = window.scrollTo;

	window.scrollTo = function () {
		// Call the original scrollTo
		originalScrollTo.apply(window, arguments);

		// Then offset by -200px after a short delay
		setTimeout(function () {
			window.scrollBy({
				top: -200,
				behavior: "smooth",
			});
			console.log("[CC Checkout Scroll] Applied -200px offset");
		}, 100);
	};
});
</script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
