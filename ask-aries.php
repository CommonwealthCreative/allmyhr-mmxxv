<?php
/**
 * Template Name: Ask AllMyHR
 *
 * AI-powered HR Q&A chatbox page template.
 * Allows users to ask HR compliance questions and receive AI-generated responses.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package allmyhr-mmxxv
 */

get_header();
?>

<main id="primary" class="site-main">
<section class="header-section">
    <div class="lottie">
      <div class="lottie-hero" data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198" data-animation-type="lottie" data-src="/wp-content/themes/allmyhr-mmxxv/documents/64b6c16282020c34caa0f1e1_lottie-third.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="15.958333333333334" data-duration="0"></div>
      <div class="overlay-linear"></div>
      <div class="overlay-radial"></div>
    </div>
    <div class="container h-content">
      <h1 ><span class="highlight txt">Ask AllMyHR</span></h1>
      <h2>Immediate HR Answers Backed by Human Experts</h2>
      <p class="center hightlight txtblu txt">Your AI-powered assistant for federal or state-specific HR regulations, questions and more.</p>
      <?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'ask-aries' );

	endwhile;
	?>
    </div>
    <div class="container service">
</secction>

</main><!-- #main -->

<?php
get_footer();
