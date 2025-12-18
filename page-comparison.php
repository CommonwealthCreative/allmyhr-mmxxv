<?php
/**
 * Template Name: Comparison Page
 *
 * @package allmyhr-mmxxv
 */

get_header();
?>

<main id="primary" class="site-main">
	<section style="display: grid; grid-template-columns: 1fr 1fr; min-height: 100vh;" class="comparison-section">
		<!-- LEFT COLUMN: Form Section (Featured Image Background) -->
		<div style="position: relative; padding: 60px 40px; display: flex; flex-direction: column; padding-top: 15vh;">
			<?php
			// Add featured image as background with low opacity
			if ( has_post_thumbnail() ) {
				$featured_image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
				?>
				<div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: url('<?php echo esc_url( $featured_image_url ); ?>'); background-size: cover; background-position: center; opacity: 0.2; z-index: 1;"></div>
			<?php } ?>
			
			<div class="container" style="max-width: 100%; padding: 0; position: relative; z-index: 2;">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: inline-block; margin-bottom: 30px;">
					<img src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-logo.svg" alt="AllMyHR" style="height: 50px;">
				</a>
				
				<h1 style="font-size: 42px; font-weight: 700; margin-bottom: 15px; line-height: 1.2;">
					<?php the_title(); ?>
				</h1>

				<!-- Benefit Statement -->
				<?php if ( has_excerpt() ) : ?>
					<p style="font-size: 18px; color: #252525; margin-bottom: 30px; line-height: 1.6; font-weight: 500;">
						<?php echo wp_kses_post( get_the_excerpt() ); ?>
					</p>
				<?php endif; ?>

				<!-- Page Content -->
				<?php if ( $post->post_content ) : ?>
					<div style="font-size: 16px; color: #252525; margin-bottom: 30px; line-height: 1.6;">
						<?php echo wp_kses_post( get_the_content() ); ?>
					</div>
				<?php endif; ?>

				<!-- Gravity Form -->
				<div style="margin-top: 30px; margin-bottom: 30px;">
					<?php echo do_shortcode( '[gravityform id="12" title="false" description="false"]' ); ?>
				</div>

				<!-- Product Tour Link -->
				<div style="text-align: left;">
					<a href="https://calendly.com/allmyhr10/allmyhr-product-demo" style="display: inline-flex; align-items: center; gap: 10px; color: #1d55a7; text-decoration: none; font-size: 16px; font-weight: 600;">
						<span style="font-size: 20px;">→</span>
						<span>Schedule a demo to learn more.</span>
					</a>
				</div>
			</div>
		</div>

		<!-- RIGHT COLUMN: Comparison Table (Dark Background) -->
		<div style="background: #f5f5f5; padding: 60px 40px; display: flex; flex-direction: column; justify-content: center; position: relative;">
			<!-- Banner Graphic -->
			<div style="position: absolute; top: 0; left: 0; width: 200px; height: 200px; overflow: hidden;">
				<div style="position: absolute; top: -50px; left: -50px; width: 300px; height: 300px; background: linear-gradient(135deg, #fbcf18 0%, #e24a41 100%); transform: rotate(45deg); display: flex; align-items: center; justify-content: center;">
					<span style="transform: rotate(-45deg); font-size: 24px; font-weight: 700; color: #000; text-align: center; width: 150px; line-height: 1.2;">See The Difference</span>
				</div>
			</div>

			<div class="container" style="max-width: 100%; padding: 0;">
			<!-- Company Headers -->
			<div style="display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 20px; margin-bottom: 40px; align-items: flex-start;">
				<div></div>
				<div style="text-align: center;">
					<h3 style="font-size: 18px; font-weight: 700; margin-bottom: 5px; color: #252525;">
						AllMyHR Professional
					</h3>
					<p style="color: #999; font-size: 13px; margin: 0; margin-bottom: 10px;">
						Membership
					</p>
					<div>
						<div style="font-weight: 700; font-size: 16px; color: #252525;">
							$270<span style="font-size: 13px; font-weight: 400;">/year</span>
						</div>
						<div style="font-size: 13px; color: #999;">
							or $24.90/month
						</div>
					</div>
				</div>
				<div style="text-align: center;">
					<h3 style="font-size: 18px; font-weight: 700; margin-bottom: 5px; color: #252525;">
						SHRM Professional
					</h3>
					<p style="color: #999; font-size: 13px; margin: 0; margin-bottom: 10px;">
						Membership
					</p>
					<div style="font-weight: 700; font-size: 16px; color: #252525;">
						$299<span style="font-size: 13px; font-weight: 400;">/year</span>
					</div>
				</div>
			</div>

				<!-- Comparison Table -->
				<table style="width: 100%; border-collapse: collapse; table-layout: fixed;">
					<colgroup>
						<col style="width: 60%;">
						<col style="width: 20%;">
						<col style="width: 20%;">
					</colgroup>
					<tbody>
						<?php
						// Define comparison items
						$comparison_items = array(
							array(
								'feature' => 'Always Available HR AI',
								'company1' => true,
								'company2' => false,
							),
							array(
								'feature' => 'Monthly Law Alerts (Federal & State)',
								'company1' => true,
								'company2' => false,
							),
							array(
								'feature' => 'HR Assessments',
								'company1' => true,
								'company2' => false,
							),
							array(
								'feature' => 'Compliance Calendar',
								'company1' => true,
								'company2' => false,
							),
							array(
								'feature' => 'Job Description Builders',
								'company1' => true,
								'company2' => false,
							),
							array(
								'feature' => 'Document Creators',
								'company1' => true,
								'company2' => false,
							),
							array(
								'feature' => 'HR Calculators',
								'company1' => true,
								'company2' => false,
							),
							array(
								'feature' => 'Minimum Wage Maps',
								'company1' => true,
								'company2' => false,
							),
							array(
								'feature' => 'Ask an Advisor / HR Hotline',
								'company1' => true,
								'company2' => true,
							),
							array(
								'feature' => 'Quarterly Magazine / Monthly Newsletter',
								'company1' => true,
								'company2' => true,
							),
							array(
								'feature' => 'Access to Templates & How-to Guides',
								'company1' => true,
								'company2' => true,
							),
							array(
								'feature' => 'Exclusive Member Discounts',
								'company1' => true,
								'company2' => true,
							),
						);

						foreach ( $comparison_items as $index => $item ) :
							$color1 = $item['company1'] ? '#4CAF50' : '#e74c3c';
							$color2 = $item['company2'] ? '#4CAF50' : '#e74c3c';
							$bg_color = ( $index % 2 === 0 ) ? '#fff' : '#f9f9f9';
							?>
							<tr style="background: <?php echo esc_attr( $bg_color ); ?>; border-bottom: 1px solid #e0e0e0;">
								<td style="padding: 16px; font-weight: 600; font-size: 14px; color: #252525; text-align: left; vertical-align: middle;">
									<?php echo esc_html( $item['feature'] ); ?>
								</td>
								<td style="padding: 16px; text-align: center; vertical-align: middle; display: table-cell;">
									<span style="font-size: 24px; color: <?php echo esc_attr( $color1 ); ?>; display: inline-block;">
										<?php echo $item['company1'] ? '✓' : '✕'; ?>
									</span>
								</td>
								<td style="padding: 16px; text-align: center; vertical-align: middle; display: table-cell;">
									<span style="font-size: 24px; color: <?php echo esc_attr( $color2 ); ?>; display: inline-block;">
										<?php echo $item['company2'] ? '✓' : '✕'; ?>
									</span>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

// Add responsive CSS for mobile and hide navbar
?>
<style>
	/* Hide navbar for comparison page */
	.page-template-page-comparison #masthead,
	.page-template-page-comparison .site-header {
		display: none !important;
	}

	/* Remove top padding on site-main for comparison page */
	.page-template-page-comparison.site-main {
		padding-top: 0 !important;
	}

	/* Set opacity to 0 for "Smarter HR starts here" label on comparison page */
	.page-template-page-comparison label[for="input_12_1"] {
		opacity: 0 !important;
	}

	@media (max-width: 991px) {
		.comparison-section {
			grid-template-columns: 1fr !important;
			min-height: auto !important;
		}

		.comparison-section > div {
			min-height: auto !important;
			padding: 40px 20px !important;
		}

		.comparison-section > div:first-child {
			padding-top: 60px !important;
			padding-bottom: 60px !important;
		}

		.comparison-section > div:last-child {
			padding-top: 60px !important;
			padding-bottom: 60px !important;
		}

		table {
			font-size: 13px !important;
			width: 100% !important;
		}

		table tbody tr {
			display: table-row !important;
			border-bottom: 1px solid #e0e0e0 !important;
		}

		table td {
			padding: 16px 12px !important;
			text-align: center !important;
			display: table-cell !important;
		}

		table td:first-child {
			text-align: left !important;
		}

		table td span {
			font-size: 18px !important;
		}
	}

	@media (max-width: 768px) {
		.comparison-section > div {
			padding: 30px 20px !important;
		}

		.comparison-section > div:first-child .container,
		.comparison-section > div:last-child .container {
			max-width: 100% !important;
			padding: 0 !important;
		}

		h1 {
			font-size: 32px !important;
		}

		p {
			font-size: 16px !important;
		}

		table {
			width: 100% !important;
			font-size: 12px !important;
		}

		table td {
			padding: 12px 8px !important;
		}

		table td span {
			font-size: 16px !important;
		}
	}
</style>
<?php

