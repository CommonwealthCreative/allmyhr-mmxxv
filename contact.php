<?php
/**
 * Template Name: Contact Page
 * Template Post Type: page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package allmyhr-mmxxv
 */

get_header();
?>
<style>
	.footer, .footer-section, .navbar.w-nav, .modal-exit {display: none!important;}
	.page-template .site-main {padding-top: 0px; }
	.w-nav-brand {display: flex; justify-content: center; float: none; margin: 0 auto; width: fit-content; padding-top: 20px;}
</style>

	<main id="primary" class="site-main">
		    <div class="lottie">
      <div class="lottie-hero" data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198" data-animation-type="lottie" data-src="/wp-content/themes/allmyhr-mmxxv/documents/64b6c16282020c34caa0f1e1_lottie-third.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="15.958333333333334" data-duration="0"></div>
      <div class="overlay-linear"></div>
      <div class="overlay-radial"></div>
    </div>
		<section class="content-section bg-dkblue">
			
			      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-info w-nav-brand"><img src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-logo.svg" loading="lazy" alt="" class="site-logo">
        <div class="site-title">AllMyHR</div>
      </a>
			    <div class="container h-content center" style="max-width: 850px;">
					<div class="hero-stars">
        <div class="stars">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <span>Trusted by 1,000+ small businesses</span>
      </div>
			    <h1><span class="highlight txt">Your Complete </span>HR Compliance & Support System</h1>
    <p class="crumb">Set up your account in minutes. You’re just a few clicks away.</p>
</div>
			<div class="container p-content start-form">
			          <?php echo do_shortcode('[gravityform id="7" title="false" description="false"]'); ?>
				</div>
</section>
		<section class="content-section bg-dkblue bg-gradientblack">
				  	<?php get_template_part('template-parts/content', 'trusted'); ?>
			</section>

	</main><!-- #main -->

<?php
get_footer();
