<?php
/**
 * Template part for displaying ASK ARIES chat interface
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package allmyhr-mmxxv
 */

?>

<section class="content-section">
	<div class="container">
		<!-- Ask AllMyHR Chat Card -->
		<div class="card ask-aries-card">
			
			<!-- Input Area -->
			<div class="ask-aries-input-area">
				<!-- Row 1: Label and Jurisdiction Dropdown -->
				<div class="ask-aries-row ask-aries-header-row">
					<label for="ask-aries-jurisdiction" class="ask-aries-label">
						<span class="fa ask-aries-icon" aria-hidden="true">&#xf007;</span>
						To ask a question:
					</label>
					<select id="ask-aries-jurisdiction" name="jurisdiction" class="ask-aries-select" required>
						<option value="">Select a Federal or State Jurisdiction</option>
						<option value="Federal">Federal</option>
						<option value="Alabama">Alabama</option>
						<option value="Alaska">Alaska</option>
						<option value="Arizona">Arizona</option>
						<option value="Arkansas">Arkansas</option>
						<option value="California">California</option>
						<option value="Colorado">Colorado</option>
						<option value="Connecticut">Connecticut</option>
						<option value="Delaware">Delaware</option>
						<option value="Florida">Florida</option>
						<option value="Georgia">Georgia</option>
						<option value="Hawaii">Hawaii</option>
						<option value="Idaho">Idaho</option>
						<option value="Illinois">Illinois</option>
						<option value="Indiana">Indiana</option>
						<option value="Iowa">Iowa</option>
						<option value="Kansas">Kansas</option>
						<option value="Kentucky">Kentucky</option>
						<option value="Louisiana">Louisiana</option>
						<option value="Maine">Maine</option>
						<option value="Maryland">Maryland</option>
						<option value="Massachusetts">Massachusetts</option>
						<option value="Michigan">Michigan</option>
						<option value="Minnesota">Minnesota</option>
						<option value="Mississippi">Mississippi</option>
						<option value="Missouri">Missouri</option>
						<option value="Montana">Montana</option>
						<option value="Nebraska">Nebraska</option>
						<option value="Nevada">Nevada</option>
						<option value="New Hampshire">New Hampshire</option>
						<option value="New Jersey">New Jersey</option>
						<option value="New Mexico">New Mexico</option>
						<option value="New York">New York</option>
						<option value="North Carolina">North Carolina</option>
						<option value="North Dakota">North Dakota</option>
						<option value="Ohio">Ohio</option>
						<option value="Oklahoma">Oklahoma</option>
						<option value="Oregon">Oregon</option>
						<option value="Pennsylvania">Pennsylvania</option>
						<option value="Rhode Island">Rhode Island</option>
						<option value="South Carolina">South Carolina</option>
						<option value="South Dakota">South Dakota</option>
						<option value="Tennessee">Tennessee</option>
						<option value="Texas">Texas</option>
						<option value="Utah">Utah</option>
						<option value="Vermont">Vermont</option>
						<option value="Virginia">Virginia</option>
						<option value="Washington">Washington</option>
						<option value="West Virginia">West Virginia</option>
						<option value="Wisconsin">Wisconsin</option>
						<option value="Wyoming">Wyoming</option>
					</select>
				</div>

				<!-- Row 2: Question Input and Ask Button -->
				<div class="ask-aries-row ask-aries-input-row">
					<input 
						type="text" 
						id="ask-aries-question" 
						name="question" 
						class="ask-aries-input" 
						placeholder="Ask AllMyHR..." 
						maxlength="256" 
						required
						aria-label="Enter your HR question"
					>
					<button type="button" id="ask-aries-submit" class="nav-link btn ftr w-button">
						Submit Question
					</button>
				</div>

				<!-- Row 3: Character Counter and HIPAA Warning -->
				<div class="ask-aries-row ask-aries-footer-row">
					<span id="ask-aries-counter" class="ask-aries-counter">0/256</span>
					<span class="ask-aries-hipaa-warning">Please exclude personal and HIPAA data from your questions.</span>
				</div>
			</div>

			<!-- Loading Spinner (hidden by default) -->
			<div class="ask-aries-loading" style="display: none;">
				<div class="ask-aries-spinner"></div>
				<p>AllMyHR is thinking...</p>
			</div>

			<!-- Response Area (hidden until response received) -->
			<div class="ask-aries-response-area" style="display: none;">
				<!-- AI response and disclaimer will go here -->
			</div>

			<!-- Form Area (hidden until response received) -->
			<div class="ask-aries-form-area" style="display: none;">
				<div class="ask-aries-form-intro">
					<h3>To continue, please provide your information:</h3>
				</div>
				<?php echo do_shortcode('[gravityform id="12" title="false" description="false" ajax="true"]'); ?>
			</div>

		</div>
	</div>
</section>
