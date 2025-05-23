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

	<main id="primary" class="site-main">
		<section class="content-section bg-dkblue">
			<div class="container p-content">
			<?php get_template_part('template-parts/content', 'quoteform'); ?>
				</div>
			</section>

	</main><!-- #main -->

<?php
get_footer();
