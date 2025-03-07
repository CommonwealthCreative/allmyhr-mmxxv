<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package allmyhr-mmxxv
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="content-section">
		<div class="container p-content">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'allmyhr-mmxxv' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'allmyhr-mmxxv' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<img src="images/hrcertified.png" loading="lazy" style="opacity:0" data-w-id="a0234e13-ae73-f5e2-dabd-2961d7fd0666" alt="">
		</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
