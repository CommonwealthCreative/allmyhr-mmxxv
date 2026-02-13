<?php
/**
 * Template Name: Pricing
 *
 * Pricing page template for AllMyHR featuring tiered pricing cards
 * with monthly/annual toggle, feature checklist, value justification,
 * FAQ accordion, and CTAs.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package allmyhr-mmxxv
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<!-- Section 1: Hero Header + Pricing Cards -->
<section class="hero-section">
    <div class="lottie">
      <div class="lottie-hero" data-w-id="pricing-lottie-hero" data-animation-type="lottie" data-src="/wp-content/themes/allmyhr-mmxxv/documents/64b6c16282020c34caa0f1e1_lottie-third.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="15.958333333333334" data-duration="0"></div>
      <div class="overlay-linear"></div>
      <div class="overlay-radial"></div>
    </div>
    <div class="container h-content center">
      <div class="hero-stars">
        <div class="stars">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
        </div>
        <span>Trusted by 1,000+ small businesses</span>
      </div>
      <h1>AllMyHR <span class="highlight txt">Complete</span></h1>
      <p>Your complete HR compliance and support system — now powered by <span class="highlight txt">ARIES AI / HR AI</span>.</p>
      <div class="spaced">
        <a href="/create-account" class="btn w-button">Get Started</a>
        <a href="https://calendly.com/sjacksonallmyhr/10-minute-walkthrough?month=2025-04" class="btn wht w-button" target="_blank">Talk to an HR Expert</a>
      </div>

      <h2 class="center">Simple, Transparent <span class="highlight txt">Pricing</span></h2>
      <p>Your full HR department — without the payroll cost.</p>

      <!-- Monthly / Annual Toggle -->
      <div class="toggle-btn w-tab-menu" id="pricing-toggle">
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
    </div>

    <!-- Pricing Tier Cards - Horizontal Slider -->
    <div class="pricing-slider-wrapper">
      <div class="slider-arrow-left w-slider-arrow-left pricing-slider-prev" role="button" tabindex="0" aria-label="previous slide">
        <div class="fa highlight blu txt">&#xf053;</div>
      </div>
      <div class="pricing-slider-track" id="pricing-slider-track">
        <div class="card lite pricing-tier-card">
          <h4>1–25 Employees</h4>
          <div class="pricing-monthly">
            <div class="pricing-price">$99</div>
            <div class="pricing-period">/ month</div>
            <div class="pricing-setup">+ $250 setup fee</div>
          </div>
          <div class="pricing-annual">
            <div class="pricing-price">$1,069</div>
            <div class="pricing-period">/ year</div>
            <div class="pricing-setup">+ $250 setup fee</div>
            <div class="pricing-save">Save $119</div>
          </div>
          <a href="?add-to-cart=29623&variation_id=29629&attribute_employees=1-25" class="btn w-button pricing-monthly">Buy Now</a>
          <a href="?add-to-cart=29622&variation_id=29626&attribute_employees=1-25" class="btn w-button pricing-annual">Buy Now</a>
        </div>
        <div class="card lite pricing-tier-card">
          <h4>26–50 Employees</h4>
          <div class="pricing-monthly">
            <div class="pricing-price">$149</div>
            <div class="pricing-period">/ month</div>
            <div class="pricing-setup">+ $250 setup fee</div>
          </div>
          <div class="pricing-annual">
            <div class="pricing-price">$1,609</div>
            <div class="pricing-period">/ year</div>
            <div class="pricing-setup">+ $250 setup fee</div>
            <div class="pricing-save">Save $179</div>
          </div>
          <a href="?add-to-cart=29623&variation_id=29630&attribute_employees=26-50" class="btn w-button pricing-monthly">Buy Now</a>
          <a href="?add-to-cart=29622&variation_id=29627&attribute_employees=26-50" class="btn w-button pricing-annual">Buy Now</a>
        </div>
        <div class="card lite pricing-tier-card">
          <h4>51–100 Employees</h4>
          <div class="pricing-monthly">
            <div class="pricing-price">$199</div>
            <div class="pricing-period">/ month</div>
            <div class="pricing-setup">+ $250 setup fee</div>
          </div>
          <div class="pricing-annual">
            <div class="pricing-price">$2,149</div>
            <div class="pricing-period">/ year</div>
            <div class="pricing-setup">+ $250 setup fee</div>
            <div class="pricing-save">Save $239</div>
          </div>
          <a href="?add-to-cart=29623&variation_id=29631&attribute_employees=51-100" class="btn w-button pricing-monthly">Buy Now</a>
          <a href="?add-to-cart=29622&variation_id=29624&attribute_employees=51-100" class="btn w-button pricing-annual">Buy Now</a>
        </div>
        <div class="card lite pricing-tier-card">
          <h4>101–250 Employees</h4>
          <div class="pricing-monthly">
            <div class="pricing-price">$249</div>
            <div class="pricing-period">/ month</div>
            <div class="pricing-setup">+ $500 setup fee</div>
          </div>
          <div class="pricing-annual">
            <div class="pricing-price">$2,689</div>
            <div class="pricing-period">/ year</div>
            <div class="pricing-setup">+ $500 setup fee</div>
            <div class="pricing-save">Save $299</div>
          </div>
          <a href="?add-to-cart=29623&variation_id=29632&attribute_employees=101-250" class="btn w-button pricing-monthly">Buy Now</a>
          <a href="?add-to-cart=29622&variation_id=29625&attribute_employees=101-250" class="btn w-button pricing-annual">Buy Now</a>
        </div>
        <div class="card lite pricing-tier-card">
          <h4>251–500 Employees</h4>
          <div class="pricing-monthly">
            <div class="pricing-price">$299</div>
            <div class="pricing-period">/ month</div>
            <div class="pricing-setup">+ $500 setup fee</div>
          </div>
          <div class="pricing-annual">
            <div class="pricing-price">$3,229</div>
            <div class="pricing-period">/ year</div>
            <div class="pricing-setup">+ $500 setup fee</div>
            <div class="pricing-save">Save $359</div>
          </div>
          <a href="?add-to-cart=29623&variation_id=29633&attribute_employees=251-500" class="btn w-button pricing-monthly">Buy Now</a>
          <a href="?add-to-cart=29622&variation_id=29628&attribute_employees=251-500" class="btn w-button pricing-annual">Buy Now</a>
        </div>
      </div>
      <div class="slider-arrow-right w-slider-arrow-right pricing-slider-next" role="button" tabindex="0" aria-label="next slide">
        <div class="fa highlight blu txt">&#xf054;</div>
      </div>
    </div>
    <?php get_template_part( 'template-parts/content', 'trusted' ); ?>
</section>

<!-- Section 2: What's Included -->
<section class="content-section bg-white">
  <div class="w-layout-blockcontainer container w-container">
    <h3 class="center big">What's Included:</h3>
    <div class="pricing-checklist-grid">
      <div class="checklist-item">
        <div><strong>Unlimited HR expert support</strong></div>
        <span class="check-icon">✓</span>
      </div>
      <div class="checklist-item">
        <div><strong>ARIES AI / HR AI compliance intelligence</strong></div>
        <span class="check-icon">✓</span>
      </div>
      <div class="checklist-item">
        <div><strong>State-specific handbook builder</strong></div>
        <span class="check-icon">✓</span>
      </div>
      <div class="checklist-item">
        <div><strong>300+ LMS training courses</strong></div>
        <span class="check-icon">✓</span>
      </div>
      <div class="checklist-item">
        <div><strong>Compliance alerts</strong></div>
        <span class="check-icon">✓</span>
      </div>
      <div class="checklist-item">
        <div><strong>HR templates &amp; toolkits</strong></div>
        <span class="check-icon">✓</span>
      </div>
      <div class="checklist-item">
        <div><strong>Employee issue guidance</strong></div>
        <span class="check-icon">✓</span>
      </div>
      <div class="checklist-item">
        <div><strong>HR calculators &amp; minimum wage map</strong></div>
        <span class="check-icon">✓</span>
      </div>
      <div class="checklist-item">
        <div><strong>Monthly HR newsletter</strong></div>
        <span class="check-icon">✓</span>
      </div>
      <div class="checklist-item">
        <div><strong>Safety &amp; OSHA resources</strong></div>
        <span class="check-icon">✓</span>
      </div>
      <div class="checklist-item">
        <div><strong>New laws &amp; deadlines dashboard</strong></div>
        <span class="check-icon">✓</span>
      </div>
    </div>

    <div class="center" style="margin-top:40px;">
      <a href="/create-account/" class="btn w-button">Get Instant Access</a>
    </div>
  </div>
</section>

<!-- Section 3: Value Justification -->
<section class="content-section bg-dkblue">
  <div class="w-layout-blockcontainer container w-container">
    <h2 class="center">Why AllMyHR <span class="highlight txt">Pays for Itself</span></h2>
    <div class="pricing-stats-row">
      <div class="pricing-stat-card">
        <div class="w-layout-hflex phrases">
          <div class="fa highlight txt" style="font-size:2rem;">&#xf071;</div>
          <h3 class="highlight txt">$10,000–$50,000</h3>
        </div>
        <div class="crumb">HR compliance fine</div>
      </div>
      <div class="pricing-stat-card">
        <div class="w-layout-hflex phrases">
          <div class="fa highlight txt" style="font-size:2rem;">&#xf0e3;</div>
          <h3 class="highlight txt">$125,000+</h3>
        </div>
        <div class="crumb">Wrongful termination lawsuit</div>
      </div>
      <div class="pricing-stat-card">
        <div class="w-layout-hflex phrases">
          <div class="fa highlight txt" style="font-size:2rem;">&#xf017;</div>
          <h3 class="highlight txt">$1,100</h3>
        </div>
        <div class="crumb">Wage &amp; hour violations per employee</div>
      </div>
    </div>
    <div class="pricing-value-closing center">
      <h3>AllMyHR + <span class="highlight txt">ARIES AI / HR AI</span> costs a fraction of one mistake.</h3>
    </div>
  </div>
</section>

<!-- Section 4: FAQ -->
<section class="content-section bg-white">
  <div class="w-layout-blockcontainer container w-container">
    <h2 class="center">Frequently Asked <span class="highlight txt">Questions</span></h2>
    <div class="pricing-faq" style="max-width:800px;margin:30px auto 0;">
      <div class="faq-card">
        <div class="faq-question">
          <div class="w-layout-hflex phrases">
            <div class="fa highlight blu txt"></div>
            <h4>Is ARIES AI / HR AI included?</h4>
          </div>
          <span class="faq-arrow-css fa highlight blu txt"></span>
        </div>
        <div style="height:0px" class="faq-answer">
          <p class="faq-paragraph">Yes — fully integrated.</p>
        </div>
      </div>
      <div class="faq-card">
        <div class="faq-question">
          <div class="w-layout-hflex phrases">
            <div class="fa highlight blu txt"></div>
            <h4>Is there a contract?</h4>
          </div>
          <span class="faq-arrow-css fa highlight blu txt"></span>
        </div>
        <div style="height:0px" class="faq-answer">
          <p class="faq-paragraph">No. Cancel anytime.</p>
        </div>
      </div>
      <div class="faq-card">
        <div class="faq-question">
          <div class="w-layout-hflex phrases">
            <div class="fa highlight blu txt"></div>
            <h4>Do I really get unlimited HR support?</h4>
          </div>
          <span class="faq-arrow-css fa highlight blu txt"></span>
        </div>
        <div style="height:0px" class="faq-answer">
          <p class="faq-paragraph">Yes — ask as many questions as you need.</p>
        </div>
      </div>
      <div class="faq-card">
        <div class="faq-question">
          <div class="w-layout-hflex phrases">
            <div class="fa highlight blu txt"></div>
            <h4>Is the handbook builder compliant with my state?</h4>
          </div>
          <span class="faq-arrow-css fa highlight blu txt"></span>
        </div>
        <div style="height:0px" class="faq-answer">
          <p class="faq-paragraph">Absolutely.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 5: Final CTA -->
<section class="content-section orange pricing-final-cta">
  <div class="w-layout-blockcontainer container w-container">
    <h2 class="center"><span>Ready to Protect Your Business and Simplify HR?</span></h2>
    <p class="center">Join thousands of small businesses that trust AllMyHR.</p>
    <div class="center">
      <div class="spaced">
        <a href="/create-account/" class="btn w-button">Get Started Now</a>
      </div>
      <div class="w-layout-hflex landing-flex-hero">
        <div class="w-layout-hflex phrases">
          <div class="fa _20-10-margin">&#xf058;</div>
          <h4><strong>30 Day Money Back Guarantee</strong></h4>
        </div>
        <div class="w-layout-hflex phrases">
          <div class="fa _20-10-margin">&#xf058;</div>
          <h4><strong>No Long Term Contracts</strong></h4>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
// Pricing Toggle: Monthly / Annual
(function() {
  var toggleContainer = document.getElementById('pricing-toggle');
  if (!toggleContainer) return;

  var tabs = toggleContainer.querySelectorAll('.price-tab');
  var monthlyEls = document.querySelectorAll('.pricing-monthly');
  var annualEls = document.querySelectorAll('.pricing-annual');

  tabs.forEach(function(tab) {
    tab.addEventListener('click', function(e) {
      e.preventDefault();
      var freq = this.getAttribute('data-w-tab');

      // Toggle active tab
      tabs.forEach(function(t) { t.classList.remove('w--current'); });
      this.classList.add('w--current');

      if (freq === 'Annually') {
        monthlyEls.forEach(function(el) { el.style.display = 'none'; });
        annualEls.forEach(function(el) { el.style.display = 'block'; });
      } else {
        monthlyEls.forEach(function(el) { el.style.display = 'block'; });
        annualEls.forEach(function(el) { el.style.display = 'none'; });
      }
    });
  });
})();

// Pricing Slider Arrows
(function() {
  var track = document.getElementById('pricing-slider-track');
  var prevBtn = document.querySelector('.pricing-slider-prev');
  var nextBtn = document.querySelector('.pricing-slider-next');
  if (!track || !prevBtn || !nextBtn) return;

  function getScrollAmount() {
    var card = track.querySelector('.pricing-tier-card');
    if (!card) return 300;
    return card.offsetWidth + 20; // card width + gap
  }

  function updateArrows() {
    prevBtn.style.opacity = track.scrollLeft <= 0 ? '0.3' : '1';
    nextBtn.style.opacity = track.scrollLeft >= track.scrollWidth - track.clientWidth - 1 ? '0.3' : '1';
  }

  prevBtn.addEventListener('click', function() {
    track.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
  });

  nextBtn.addEventListener('click', function() {
    track.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
  });

  track.addEventListener('scroll', updateArrows);
  updateArrows();
})();

// FAQ Accordion
(function() {
  var faqCards = document.querySelectorAll('.pricing-faq .faq-card');
  faqCards.forEach(function(card) {
    var question = card.querySelector('.faq-question');
    var answer = card.querySelector('.faq-answer');
    if (!question || !answer) return;

    question.addEventListener('click', function() {
      var isOpen = card.classList.contains('open');
      if (isOpen) {
        answer.style.height = '0px';
        card.classList.remove('open');
      } else {
        answer.style.height = answer.scrollHeight + 'px';
        card.classList.add('open');
      }
    });
  });
})();
</script>

<?php
get_footer();
