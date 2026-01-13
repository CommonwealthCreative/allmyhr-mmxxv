<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<section class="header-section">
    <div class="lottie">
      <div class="lottie-hero" data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198" data-animation-type="lottie" data-src="/wp-content/themes/allmyhr-mmxxv/documents/64b6c16282020c34caa0f1e1_lottie-third.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="15.958333333333334" data-duration="0"></div>
      <div class="overlay-linear"></div>
      <div class="overlay-radial"></div>
    </div>
    <div class="container h-content">
      <h1 data-w-id="5ff76c14-9535-a666-9770-4405304ca541" style="opacity:0"><span class="highlight txt">HR Made Simple</span><br>The Streamlined Plan for Every Stage of Your Business</h1>
      <div class="simple-nav">
        <a href="#" class="simple-nav-link active">Full Service</a>
        <a href="#ondemand" class="simple-nav-link inner">On-Demand</a>
        <a href="#faq" class="simple-nav-link inner">Features</a>
        <a href="#quote" class="simple-nav-link inner">Instant Quote</a>
      </div>
    </div>
    <div class="container service">


      <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="bg-glow highlight"></div>
      <div class="bg-highlight highlight"></div>
      <div data-current="Monthly" data-easing="ease" data-duration-in="300" data-duration-out="100" class="pricing-tabs w-tabs">
        <div class="slider-card plans w-tab-content">
          <div data-w-tab="Monthly" class="w-tab-pane w--tab-active">
          <div data-w-id="01359f47-5257-5e6d-ef23-984a4434e930" class="card lite w-inline-block"><div class="w-layout-hflex phrases hr"><a class="card-tab-title highlight txt" href="/services/allmyhr-monthly-subscription/"><img loading="lazy" src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-logo.svg" alt="" class="headlineicon"><h2>AllMyHR – Complete Subscription</h2></a><h3 class="fa move highlight txt" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 0;">➜</h3></div><div class="crumb"><p>AllMyHR provides businesses with a complete HR compliance and management solution, combining expert guidance, up-to-date labor law resources, and essential HR tools in one platform. It helps organizations streamline HR processes, reduce compliance risks, and stay informed with the latest regulatory updates.</p></div><div class="hr"><div class="w-layout-hflex bullet"><div class="crumb"><span class="fa highlight blu txt"></span></div><h4 class="crumb"><b>All-in-One HR Management Platform</b> – Streamline employee management, policies, and documentation with a centralized, user-friendly system.</h4></div><div class="w-layout-hflex bullet"><div class="crumb"><span class="fa highlight blu txt"></span></div><h4 class="crumb"><b>Comprehensive HR Compliance &amp; Support</b> – Access expert guidance, labor law updates, and compliance tools to mitigate risks and ensure regulatory adherence.</h4></div><div class="w-layout-hflex bullet"><div class="crumb"><span class="fa highlight blu txt"></span></div><h4 class="crumb"><b>Continuous Updates &amp; Expert Insights</b> – Stay ahead of HR regulations with real-time updates, training resources, and expert-backed insights.</h4></div></div></div>

          <div class="toggle-btn w-tab-menu">
          <a data-w-tab="Monthly" class="price-tab w-inline-block w-tab-link w--current">
            <div class="tab-text simple-nav-link">Monthly</div>
            <div class="toggle-contain w-clearfix">
              <div class="toggle-dot right"></div>
            </div>
            <div class="tab-text simple-nav-link active">Annually</div>
          </a>
          <a data-w-tab="Annually" class="price-tab w-inline-block w-tab-link">
            <div class="tab-text simple-nav-link active">Monthly</div>
            <div class="toggle-contain">
              <div class="toggle-dot"></div>
            </div>
            <div class="tab-text simple-nav-link">Annually</div>
          </a>
        </div>
        <div class="cardpricing">
        <div class="number-input-container center" style="display: flex;">
              <!--<label for="user_number" class="crumb">Instant Pricing:</label>-->
              <input type="number" id="user_number" name="user_number" placeholder="Enter # of Employees for Instant Pricing" min="1" max="500">
              </div>
              <div id="price-message"></div>
              <!-- pricing frequency toggle -->
        <div class="spaced">
      <a href="/services/allmyhr-monthly-subscription/" id="picker" class="btn w-button">Sign Up Now</a>
        <a href="https://calendly.com/sjacksonallmyhr/10-minute-walkthrough?month=2025-04" class="btn w-button">Schedule A Demo</a>
        <a href="https://calendly.com/sjacksonallmyhr/10-minute-walkthrough?month=2025-04" class="btn w-button">Schedule A Call</a>
      </div>
          </div>
        </div>
      </div>
    </div> <!-- container service -->
  </section>
  <section id="ondemand" class="content-section bg-dkblue bg-gradientblack">
    <div class="container features">
    <div class="container h-content">
    <h2 data-w-id="9d2d1334-04f7-1727-2bde-ab46a553ce11" style="opacity:0" class="center"><span class="highlight txt">On-Demand HR Services</span><br>Reduce Compliance Risks, Boost Efficiency, and Streamline Administration</h2>
        <a href="https://calendly.com/allmyhr10/allmyhr-product-demo" id="picker" class="btn wht w-button">Schedule A Demo</a>
        <a href="https://allmyhr.com/contact-allmyhr/" id="picker" class="btn clear w-button">Contact Us Today</a>
      </div>
      <div id="w-node-_728995ad-174f-d62c-3c5c-78d5b987a086-b987a086" class="w-layout-layout wf-layout-layout">
      <?php
/**
 * Custom Loop to Display All Products Using template-parts/content-cards.php
 * Excludes products in the "Uncategorized" category.
 */

get_header('shop');

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => array( 'uncategorized' ),
            'operator' => 'NOT IN',
        ),
    ),
);

$all_products = new WP_Query( $args );

if ( $all_products->have_posts() ) :
    while ( $all_products->have_posts() ) : $all_products->the_post();
        wc_get_template_part( 'woocommerce/product', 'cards' );
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>' . esc_html__( 'No products found.', 'your-text-domain' ) . '</p>';
endif;
?>



      
      </div>
      <div class="bg-jumbo highlight blu txt">
        <div><strong>On-Demand</strong></div>
      </div>
    </div>
    <?php get_template_part('template-parts/content', 'testimonials'); ?>
  </section>
  <section class="content-section bg-white">
  <?php get_template_part('template-parts/content', 'faqs'); ?>
	<?php get_template_part('template-parts/content', 'quoteform'); ?>
  </section>
  <script>
// Pricing toggle and dynamic link script with annual savings

document.addEventListener('DOMContentLoaded', function() {
  let freq = 'Monthly';
  const monthlyBase = '/services/allmyhr-monthly-subscription/';
  const annualBase  = '/services/allmyhr-annual-subscription/';
  const contactURL  = '/contact-allmyhr/';
  const monthlyID   = 29623;
  const annualID    = 29622;  // updated

  const monthlyRanges = [
    { min: 1,   max: 24,  slug: '1-25',  variation_id: 29629, price: '99.00',  signup: '250.00' },
    { min: 25,  max: 50,  slug: '26-50', variation_id: 29630, price: '149.00', signup: '250.00' },
    { min: 51,  max: 100, slug: '51-100',variation_id: 29631, price: '199.00', signup: '250.00' },
    { min: 101, max: 250, slug: '101-250',variation_id: 29632, price: '249.00', signup: '500.00' },
    { min: 251, max: 500, slug: '251-500',variation_id: 29633, price: '299.00', signup: '500.00' }
  ];

  const annualRanges = [
    { min: 1,   max: 24,  slug: '1-25',  variation_id: 29626, price: '1069.00', signup: '250.00', save: '119' },
    { min: 25,  max: 50,  slug: '26-50',variation_id: 29627, price: '1609.00', signup: '250.00', save: '179' },
    { min: 51,  max: 100,slug: '51-100',variation_id: 29624, price: '2149.00', signup: '250.00', save: '239' },
    { min: 101, max: 250,slug: '101-250',variation_id: 29625, price: '2689.00', signup: '500.00', save: '299' },
    { min: 251, max: 500,slug: '251-500',variation_id: 29628, price: '3229.00', signup: '500.00', save: '359' }
  ];

  const userNumberInput = document.getElementById('user_number');
  const pickerLink      = document.getElementById('picker');
  const priceMessage    = document.getElementById('price-message');

  function updateMonthly(price, fee) {
    priceMessage.innerHTML =
      `<h3 class="price">` +
      `  <span class="woocommerce-Price-amount amount">` +
      `    <bdi><span class="woocommerce-Price-currencySymbol">$</span>${price}</bdi>` +
      `  </span> ` +
      `  <span class="subscription-details">/ month + $${fee} setup fee</span>` +
      `</h3>`;
  }

  // Toggle between Monthly and Annual
  document.querySelectorAll('.price-tab').forEach(tab => {
    tab.addEventListener('click', function(e) {
      e.preventDefault();
      freq = this.dataset.wTab;
      document.querySelectorAll('.price-tab').forEach(t => t.classList.remove('w--current'));
      this.classList.add('w--current');
      userNumberInput.dispatchEvent(new Event('input'));
    });
  });

  // Update pricing on employee number input
  userNumberInput.addEventListener('input', function() {
    const val = this.value.trim();
    if (!val) {
      // No input: show starting price
      pickerLink.href = freq === 'Monthly' ? monthlyBase : annualBase;
      pickerLink.textContent = 'Buy Now';
      pickerLink.style.opacity = '0.5';
      if (freq === 'Monthly') {
        priceMessage.innerHTML =
          `<p class="price highlight txt"><span class="from">Starting at: </span>` +
          `<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>99</bdi></span>` +
          `<span class="subscription-details">/ month</span></p>`;
      } else {
        priceMessage.innerHTML =
          `<p class="price highlight txt"><span class="from">Starting at: </span>` +
          `<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>1069</bdi></span>` +
          `<span class="subscription-details">/ year</span></p>`;
      }
      return;
    }

    const n = parseInt(val, 10);
    if (n > 500) {
      // Custom quote for >500
      pickerLink.href = contactURL;
      pickerLink.textContent = 'Get A Quote';
      pickerLink.style.opacity = '1';
      priceMessage.innerHTML =
        `<p class="price highlight txt"><span class="from">` +
        `<a href="${contactURL}" class="highlight txt">Please contact us for a custom quote</a>` +
        `</span></p>`;
      return;
    }

    // Determine correct range set and update
    const setBase    = freq === 'Monthly' ? monthlyRanges : annualRanges;
    const baseURL    = freq === 'Monthly' ? monthlyBase    : annualBase;
    const productID  = freq === 'Monthly' ? monthlyID      : annualID;
    const matchRange = setBase.find(r => n >= r.min && n <= r.max);

    if (matchRange) {
      pickerLink.href =
        `${baseURL}?add-to-cart=${productID}` +
        `&variation_id=${matchRange.variation_id}` +
        `&attribute_employees=${matchRange.slug}`;
      pickerLink.textContent = 'Buy Now';
      pickerLink.style.opacity = '1';

      if (freq === 'Monthly') {
        updateMonthly(matchRange.price, matchRange.signup);
      } else {
        priceMessage.innerHTML =
          `<h3 class="price"><span class="woocommerce-Price-amount amount">` +
          `<bdi><span class="woocommerce-Price-currencySymbol">$</span>${matchRange.price}</bdi>` +
          `</span> <span class="subscription-details">/ year + $${matchRange.signup} set up fee</span></h3>` +
          `<p class="savings highlight txt" style="margin:0">Save $${matchRange.save} when you purchase an annual plan!</p>`;
      }
    }
  });

  // Prevent link click if no number entered
  pickerLink.addEventListener('click', function(e) {
    if (!userNumberInput.value.trim()) {
      e.preventDefault();
      alert("Please enter the number of employees your company has...");
    }
  });

  // Initialize starting price on load
  userNumberInput.dispatchEvent(new Event('input'));
});
</script>

<?php get_footer( 'shop' );
