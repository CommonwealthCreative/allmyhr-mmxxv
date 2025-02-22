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
  <section class="hero-section">
    <div class="lottie">
      <div class="lottie-hero" data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198" data-animation-type="lottie" data-src="wp-content/themes/allmyhr-mmxxv/documents/64b6c16282020c34caa0f1e1_lottie-third.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="15.958333333333334" data-duration="0"></div>
      <div class="overlay-linear"></div>
      <div class="overlay-radial"></div>
    </div>
    <div class="container h-content">
      <h1 data-w-id="5ff76c14-9535-a666-9770-4405304ca541" style="opacity:0"><span class="highlight txt">Streamline </span>Your Company’s <br>HR Process</h1>
      <p data-w-id="280c230b-7b91-4e93-726f-9132bd035b07" style="opacity:0">Providing the most cost-effective HR Solutions and best practices for recruiting, training, motivation &amp; retention for small &amp; mid-sized employers. <a href="#"><span class="highlight txt">Starting at $99 Per Month.</span></a>
      </p>
      <a href="#" class="btn w-button">Sign Up Now</a>
      <a href="#" class="btn clear w-button">Get My Demo</a>
    </div>
	<?php get_template_part('template-parts/content', 'trusted'); ?>
  </section>
  	<section class="content-section bg-dkblue">
  <?php get_template_part('template-parts/content', 'benefits-icons'); ?>
  </section>
  <section class="content-section bg-dkblue bg-gradientblack">
  	<div class="container features">
		<?php get_template_part('template-parts/content', 'benefits-jumbo'); ?>
		<?php get_template_part('template-parts/content', 'benefits-dashboard'); ?>
		<?php get_template_part('template-parts/content', 'testimonials'); ?>
	</div>
  </section>
  <section class="content-section bg-white">
	<?php get_template_part('template-parts/content', 'faqs'); ?>
	<?php get_template_part('template-parts/content', 'quoteform'); ?>
  </section>
  

<?php
/*get_sidebar();*/
get_footer();
