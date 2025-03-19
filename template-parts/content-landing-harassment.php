<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package allmyhr-mmxxv
 */

?>
 <section class="hero-section">
 <div class="lottie">
      <div class="lottie-hero" data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198" data-animation-type="lottie" data-src="/wp-content/themes/allmyhr-mmxxv/documents/64b6c16282020c34caa0f1e1_lottie-third.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="15.958333333333334" data-duration="0"></div>
      <div class="overlay-linear"></div>
      <div class="overlay-radial"></div>
    </div>
	<div class="container h-content">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
					<?php allmyhr_mmxxv_post_thumbnail(); ?>
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
     <div>
              <div class="number-input-container center" style="display: flex;">
              <label for="user_number" class="crumb">Instant Pricing:</label>
              <input type="number" id="user_number" name="user_number" placeholder="Enter # of Employees" min="1" max="500" style="min-width:200px; margin-left: 20px;">
              </div>
              <div id="price-message"></div>  
        </div>
		<div class="spaced">
      <a href="/services/allmyhr-monthly-subscription/" id="picker" class="btn w-button">Sign Up Now</a>
        <a href="#" class="btn clear w-button">Get My Demo</a>
        <a href="#" class="btn wht w-button">Schedule A Call</a>
      </div>


					<div class="entry-content">
						<?php
						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'allmyhr-mmxxv' ),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->

					<?php if ( get_edit_post_link() ) : ?>
						<footer class="entry-footer">
							<?php
							edit_post_link(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Edit <span class="screen-reader-text">%s</span>', 'allmyhr-mmxxv' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post( get_the_title() )
								),
								'<span class="edit-link">',
								'</span>'
							);
							?>
						</footer><!-- .entry-footer -->
					<?php endif; ?>
				</article><!-- #post-<?php the_ID(); ?> -->
						</div>
						
		</section>
		<script>
document.addEventListener('DOMContentLoaded', function() {
  const userNumberInput = document.getElementById('user_number');
  const pickerLink = document.getElementById('picker');
  const priceMessage = document.getElementById('price-message');

  // Default messaging for 1-30 employees.
  const defaultPricingMsg = "$6 Annually per Employee (Minimum of $180 Annually up to 30 employees)";
  const defaultBuyLink = "https://allmyhr.com/?add-to-cart=28034";

  // Set initial state.
  priceMessage.innerHTML = `<p class="price highlight txt">${defaultPricingMsg}</p>`;
  pickerLink.textContent = "Buy Now";
  pickerLink.style.opacity = '0.5';
  pickerLink.href = defaultBuyLink;

  // Update display based on the number entered.
  userNumberInput.addEventListener('input', function() {
    const inputVal = userNumberInput.value.trim();
    if (inputVal === '') {
      priceMessage.innerHTML = `<p class="price highlight txt">${defaultPricingMsg}</p>`;
      pickerLink.href = defaultBuyLink;
      pickerLink.style.opacity = '0.5';
      return;
    }
    let numberValue = parseInt(inputVal, 10);
    if (numberValue >= 1 && numberValue <= 30) {
      // For 1–30 employees, fixed pricing.
      priceMessage.innerHTML = `<p class="price highlight txt">$180 Total cost of Harassment Training</p>`;
      pickerLink.href = defaultBuyLink;
      pickerLink.style.opacity = '1';
    } else if (numberValue >= 31 && numberValue <= 300) {
      // For 31–300 employees.
      const additionalEmployees = numberValue - 30;
      const totalCost = 180 + 6 * additionalEmployees;
      priceMessage.innerHTML = `<p class="price highlight txt">$${totalCost} Total cost of Harassment Training</p>`;
      // We'll handle add-to-cart via JavaScript.
      pickerLink.href = "#";
      pickerLink.style.opacity = '1';
      // Save the additional quantity for later.
      pickerLink.dataset.additional = additionalEmployees;
    } else if (numberValue >= 301) {
      // For 301 or more employees, use a custom quote.
      priceMessage.innerHTML = `<p><a href="/contact-allmyhr/" class="highlight txt">Please contact us for a custom quote</a></p>`;
      pickerLink.href = "/contact-allmyhr/";
      pickerLink.textContent = "Get A Quote";
      pickerLink.style.opacity = '1';
    } else {
      priceMessage.innerHTML = `<p class="price highlight txt">${defaultPricingMsg}</p>`;
      pickerLink.href = defaultBuyLink;
      pickerLink.style.opacity = '0.5';
    }
  });

  // Function to add a product to the cart via WooCommerce AJAX.
  function addProductToCart(productId, quantity) {
    const formData = new FormData();
    formData.append('product_id', productId);
    formData.append('quantity', quantity);
    return fetch('/?wc-ajax=add_to_cart', {
      method: 'POST',
      credentials: 'same-origin',
      body: formData
    }).then(response => response.json());
  }

  // When the button is clicked, if the employee count is between 31 and 300,
  // add both products via AJAX.
  pickerLink.addEventListener('click', function(e) {
    const inputVal = userNumberInput.value.trim();
    if (!inputVal) {
      e.preventDefault();
      alert("Please enter the number of employees your company has...");
      return;
    }
    let numberValue = parseInt(inputVal, 10);
    if (numberValue >= 31 && numberValue <= 300) {
      e.preventDefault();
      const additionalEmployees = parseInt(pickerLink.dataset.additional, 10);
      // First add the 1-30 Employees product (ID 28034) with quantity 1.
      addProductToCart(28034, 1)
        .then(response1 => {
          console.log("Added product 28034:", response1);
          // Then add the Per Employee product (ID 24798) with quantity equal to additionalEmployees.
          return addProductToCart(24798, additionalEmployees);
        })
        .then(response2 => {
          console.log("Added product 24798:", response2);
          // Redirect to the cart after both products have been added.
          window.location.href = "/cart/";
        })
        .catch(error => {
          console.error("Error adding products:", error);
          alert("There was an error adding products to your cart. Please try again.");
        });
    }
    // For numbers outside 31–300, the default link behavior occurs.
  });
});
</script>








