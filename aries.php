<?php
/**
 * Template Name: Aries
 * Template Post Type: page
 *
 * AI-assisted HR question intake form with ChatGPT integration.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package allmyhr-mmxxv
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="hero-section">
		<div class="lottie">
      <div class="lottie-hero" data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198" data-animation-type="lottie" data-src="/wp-content/themes/allmyhr-mmxxv/documents/64b6c16282020c34caa0f1e1_lottie-third.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="15.958333333333334" data-duration="0"></div>
      <div class="overlay-linear"></div>
      <div class="overlay-radial"></div>
    </div>
			<div class="container h-content center">
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<div class="hero-content">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				
				<div class="card aries-form-card" id="aries-form-card">
					<!-- Header Row -->
					<div class="w-layout-hflex aries-header-row">
						<div class="w-layout-hflex aries-label">
							<span class="fa aries-user-icon">&#xf007;</span>
							<h3>Ask Your HR Question</h3>
						</div>
						<select id="aries-state" name="aries-state" class="aries-state-select" required>
							<option value="">Select your state...</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>

					<!-- Input Row -->
					<div class="w-layout-hflex aries-input-row">
						<input 
							type="text" 
							id="aries-question" 
							name="aries-question" 
							class="aries-question-input" 
							placeholder="Type your HR question here..." 
							maxlength="256" 
							required
						>
						<button type="button" id="aries-submit" class="btn aries-submit-btn">
							Submit Question
						</button>
					</div>

					<!-- Footer Row -->
					<div class="w-layout-hflex aries-footer-row">
						<span id="aries-char-counter" class="aries-char-counter crumb">0/256 characters</span>
						<p class="aries-hipaa-disclaimer crumb">
							This service is provided for informational purposes only and does not constitute legal, medical, or professional HR advice. Your inquiry is processed securely and is not stored or shared beyond what is necessary to provide this response. AllMyHR maintains administrative, technical, and physical safeguards consistent with HIPAA requirements for the protection of your information.
						</p>
					</div>

					<!-- AI Response Container (hidden initially) -->
					<div id="aries-response-container" class="aries-response-container" style="display: none;">
						<div class="aries-response-header">
							<span class="fa aries-ai-icon">&#xf544;</span>
							<h4>HR Advisor Response</h4>
						</div>
						<div id="aries-response-text" class="aries-response-text"></div>
						<div id="aries-error-message" class="aries-error-message" style="display: none;"></div>
					</div>

					<!-- Loading spinner -->
					<div id="aries-loading" class="aries-loading" style="display: none;">
						<span class="aries-spinner"></span>
						<span>Getting your personalized response...</span>
					</div>

					<!-- Gravity Form for Step 2 (hidden initially) -->
					<div id="aries-step2-form" class="aries-step2-form" style="display: none;">
						<h4>Complete your request</h4>
						<p class="crumb">Please provide your contact information to receive personalized follow-up from our HR team.</p>
						<?php 
						// Hidden fields will be populated via JavaScript
						// Form ID 12 should have: Name (visible), Email (visible), Question (hidden), State (hidden), AI Response (hidden)
						if ( function_exists( 'gravity_form' ) ) {
							gravity_form( 12, false, false, false, null, true, 0, true );
						}
						?>
					</div>
				</div>
			</div>
		</section>


	</main><!-- #main -->

<?php
get_footer();
