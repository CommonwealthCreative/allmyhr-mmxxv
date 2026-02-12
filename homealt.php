<?php
/**
 * Template Name: Home Alt
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

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header();
?> 
<!-- Video Modal with Facade Pattern (FR-6) - iframe injected on click -->
<div data-w-id="8a799611-cf86-bde8-7da8-eb88c679e185" style="display:none" class="videomodal">
  <div style="padding-top:56.27659574468085%" class="video w-video w-embed" id="video-container" data-video-id="MsLReBq4ziU">
    <!-- Iframe will be injected here when modal opens -->
  </div>
</div>
<script>
(function() {
  var videoContainer = document.getElementById('video-container');
  var videoModal = document.querySelector('.videomodal');
  var videoId = videoContainer ? videoContainer.getAttribute('data-video-id') : null;
  var iframeLoaded = false;
  
  // Observer to detect when modal becomes visible
  if (videoModal && videoId) {
    var observer = new MutationObserver(function(mutations) {
      mutations.forEach(function(mutation) {
        if (mutation.attributeName === 'style') {
          var isVisible = videoModal.style.display !== 'none';
          if (isVisible && !iframeLoaded) {
            var iframe = document.createElement('iframe');
            iframe.width = '560';
            iframe.height = '315';
            iframe.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&mute=1&rel=0';
            iframe.title = 'YouTube video player';
            iframe.frameBorder = '0';
            iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
            iframe.referrerPolicy = 'strict-origin-when-cross-origin';
            iframe.allowFullscreen = true;
            videoContainer.appendChild(iframe);
            iframeLoaded = true;
          }
        }
      });
    });
    observer.observe(videoModal, { attributes: true });
  }
})();
</script>
<section class="hero-section " style="padding-top: 5vh">
    <div class="lottie">
      <div class="lottie-hero" data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198" data-animation-type="lottie" data-src="/wp-content/themes/allmyhr-mmxxv/documents/64b6c16282020c34caa0f1e1_lottie-third.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="15.958333333333334" data-duration="0"></div>
      <div class="overlay-linear"></div>
      <div class="overlay-radial"></div>
    </div>
    <div class="container h-content">
        <div class="hero-stars">
        <div class="stars">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFD700" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <span>Trusted by 1,000+ small businesses</span>
      </div>
    <h1 data-w-id="5ff76c14-9535-a666-9770-4405304ca541" style="opacity:0"><span class="highlight txt">Your Complete </span>HR Compliance & Support System</h1>
     <?php get_template_part( 'template-parts/content', 'ask-aries' ); ?>
    <h2>Powered by: <span class="highlight txt">ARIES™, AI DIGITAL ASSISTANT</span> </h2>
   
                            <p data-w-id="280c230b-7b91-4e93-726f-9132bd035b07" style="opacity:0; padding-top:30px;">Stay compliant, solve employee issues fast, and get unlimited HR expert support — backed by AI‑driven insights and real HR professionals.</p>
                                 <div class="start">
                                 <a href="/create-account/"class="btn w-button">Get Instant Access</a>
        <a href="https://calendly.com/sjacksonallmyhr/10-minute-walkthrough?month=2025-04" class="btn wht w-button">Schedule A Demo</a>

      <div id="w-node-_550baef3-6bff-bff4-8e38-614c2cbe1a39-2cbe1a38" class="w-layout-layout wf-layout-layout">
        <div class="w-layout-cell hero-headline">


          </div>
        </div>

</div>

    

      <a href="#home-value" class="learn-more">
        <span>Learn More</span>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>

    </div>

</section>
<section class="home-value" id="home-value">
      <div class="container h-content">
        <div class="value-icons">
          <div class="value-icon">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            <span>HR Experts</span>
          </div>
          <div class="value-icon">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
            <span>Compliance Tools</span>
          </div>
          <div class="value-icon">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a4 4 0 0 1 4 4v1a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V6a4 4 0 0 1 4-4z"/><path d="M9 8v1a3 3 0 0 0 6 0V8"/><rect x="3" y="13" width="18" height="8" rx="2"/><path d="M7 17h2"/><path d="M15 17h2"/><path d="M12 13v8"/></svg>
            <span>AI-Powered</span>
          </div>
        </div>
        <h2 data-w-id="5ff76c14-9535-a666-9770-4405304ca541" style="opacity:0">HR Confidence Starts Here</h2>
        <p data-w-id="5ff76c14-9535-a666-9770-4405304ca541" style="opacity:0">AllMyHR combines certified HR experts, smart compliance tools, and ARIES AI / HR AI to help small businesses stay compliant, reduce risk, and handle HR challenges with clarity and confidence.</p>
        <a href="/join-now/" class="btn wht w-button">Join AllMyHR Today</a>
            </div>
</section>


<section class="bg-dkblue" style="margin-top: -60px; padding: 5vh 0;">
  <div class="container features">
    <div data-w-id="c0ffce76-e5dd-c509-ab7e-9285bfa38631" class="container h-content">
    <h2 data-w-id="9d2d1334-04f7-1727-2bde-ab46a553ce11" class="center"><span class="highlight txt">What Do You Need Help With Today?</span><br>Choose your biggest HR challenge:</h2>
      </div>
      <div id="w-node-_728995ad-174f-d62c-3c5c-78d5b987a086-b987a086" class="w-layout-layout wf-layout-layout">
      
<div class="w-layout-cell">
  <a data-w-id="728995ad-174f-d62c-3c5c-78d5b987a088" href="/create-account/?help=compliance" class="card products w-inline-block">
    <div class="w-layout-hflex phrases">
      <img loading="lazy" src="https://allmyhr.com/wp-content/uploads/2024/07/online-book-22-150x150.jpg" alt="AllMyHR's LMS" class="headlineicon">
      <h3>Compliance & Risk Management</h3>
    </div>
    <div class="crumb">Stay ahead of every federal, state, and local change with ARIES AI / HR AI monitoring.</div>
  </a>
</div>

<div class="w-layout-cell">
  <a data-w-id="728995ad-174f-d62c-3c5c-78d5b987a088" href="/create-account/?help=employee-issues" class="card products w-inline-block">
    <div class="w-layout-hflex phrases">
      <img loading="lazy" src="https://allmyhr.com/wp-content/uploads/2023/05/allmyhr-AI-HR-Employee-Harassment-Training-150x150.jpg" alt="Employee Handbook Builder" class="headlineicon">
      <h3>Employee Issues & Tough Situations</h3>
    </div>
    <div class="crumb">Get step‑by‑step guidance from HR experts and AI‑powered recommendations.</div>
  </a>
</div>

<div class="w-layout-cell">
  <a data-w-id="728995ad-174f-d62c-3c5c-78d5b987a088" href="/create-account/?help=handbooks" class="card products w-inline-block">
    <div class="w-layout-hflex phrases">
      <img loading="lazy" src="https://allmyhr.com/wp-content/uploads/2019/03/allmyhr-living-handbook-product-image-150x150.jpg" alt="Employee Handbook" class="headlineicon">
      <h3>Handbooks & Policies</h3>
    </div>
    <div class="crumb">Build compliant, state‑specific handbooks in minutes..</div>
  </a>
</div>

<div class="w-layout-cell">
  <a data-w-id="728995ad-174f-d62c-3c5c-78d5b987a088" href="/create-account/?help=training" class="card products w-inline-block">
    <div class="w-layout-hflex phrases">
      <img loading="lazy" src="https://allmyhr.com/wp-content/uploads/2019/02/HR-Hotline-on-Call-2-150x150.jpg" alt="Purchase Wrap Document" class="headlineicon">
      <h3>Training & Safety</h3>
    </div>
    <div class="crumb">Train your team with 300+ ready‑to‑use courses.</div>
  </a>
</div>

<div class="w-layout-cell">
  <a data-w-id="728995ad-174f-d62c-3c5c-78d5b987a088" href="/create-account/?help=hr-tools" class="card products w-inline-block">
    <div class="w-layout-hflex phrases">
      <img loading="lazy" src="https://allmyhr.com/wp-content/uploads/2019/02/hr-forms-150x150.jpg" alt="Purchase POP Plan Documents" class="headlineicon">
      <h3>HR Tools, Templates & Resourcess</h3>
    </div>
    <div class="crumb">Access every form, checklist, and toolkit you need.</div>
  </a>
</div>

<div class="w-layout-cell">
  <a data-w-id="728995ad-174f-d62c-3c5c-78d5b987a088" href="/create-account/?help=memberships" class="card products w-inline-block">
    <div class="w-layout-hflex phrases">
      <img loading="lazy" src="https://allmyhr.com/wp-content/uploads/2025/12/allmyhr-professional-membership-featured--150x150.png" alt="Purchase Wrap Document" class="headlineicon">
      <h3>Professional Memberships</h3>
    </div>
    <div class="crumb">Your most in-depth, cost-effective support network.</div>
  </a>
</div>

      
      </div>
      <div class="bg-jumbo highlight blu txt">
        <div><strong>Start Here</strong></div>
      </div>
    </div>
        
            </section>     
            <section class="content-section bg-dkblue" id="benefits">
<div id="faq" class="container">
  <div data-w-id="c0ffce76-e5dd-c509-ab7e-9285bfa38631" class="w-layout-hflex"><img src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-certification.svg" loading="lazy" alt="" height="55" class="footer-icons"><img src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-gdpr.svg" loading="lazy" alt="" height="55" class="footer-icons"><img src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-hippa.svg" loading="lazy" alt="" height="55" class="footer-icons"></div>
      <div data-w-id="c0ffce76-e5dd-c509-ab7e-9285bfa38631" class="container h-content center">
        <h2 class="center">Comprehensive HR Solutions From <span class="highlight txt">Your Dedicated Team.</span></h2>
        <p>Get expert HR guidance from a dedicated team that understands your business, ensures compliance, and helps you manage your workforce with confidence.</p>
        <div class="w-layout-hflex landing-flex-hero">
              <div class="w-layout-hflex phrases">
              <div class="fa _20-10-margin"></div>
              <h4><strong>30 Day Money Back Guarantee</strong></h4>
              </div>
              <div class="w-layout-hflex phrases">
              <div class="fa _20-10-margin"></div>
              <h4><strong>No Long Term Contracts </strong></h4>
              </div>
            </div>
</div>

 <div data-w-id="550baef3-6bff-bff4-8e38-614c2cbe1a38" class="container">
      <div id="w-node-_550baef3-6bff-bff4-8e38-614c2cbe1a39-2cbe1a38" class="w-layout-layout wf-layout-layout">
        <div class="w-layout-cell">
          <div class="screens"><img src="/wp-content/themes/allmyhr-mmxxv/images/all-my-hr-portal-screen-5.svg" loading="lazy" alt="" class="screen _1"><img src="/wp-content/themes/allmyhr-mmxxv/images/all-my-hr-portal-screen-7.svg" loading="lazy" alt="" class="screen _4"><img src="/wp-content/themes/allmyhr-mmxxv/images/all-my-hr-portal-screen-6.svg" loading="lazy" alt="" class="screen _2"><img src="/wp-content/themes/allmyhr-mmxxv/images/all-my-hr-portal-screen-8.svg" loading="lazy" alt="" class="screen _3"></div>
        </div>
        <div class="w-layout-cell">
         <div class="checklist-col">
          <div class="checklist-item">
            <div>
              <strong>Unlimited HR Experts</strong>
              <p>Real answers from certified HR professionals — whenever you need them.</p>
            </div>
            <span class="check-icon">✓</span>
          </div>
          <div class="checklist-item">
            <div>
              <strong>ARIES AI / HR AI Compliance Intelligence</strong>
              <p>AI‑powered insights that scan laws, regulations, and HR best practices to keep you ahead of risk.</p>
            </div>
            <span class="check-icon">✓</span>
          </div>
          <div class="checklist-item">
            <div>
              <strong>Handbook Builder</strong>
              <p>Create a compliant, state‑specific handbook in minutes — automatically updated.</p>
            </div>
            <span class="check-icon">✓</span>
          </div>
          <div class="checklist-item">
            <div>
              <strong>Training &amp; LMS</strong>
              <p>300+ courses covering compliance, safety, leadership, and more.</p>
            </div>
            <span class="check-icon">✓</span>
          </div>
          <div class="checklist-item">
            <div>
              <strong>Compliance Alerts</strong>
              <p>Instant updates on new laws, deadlines, and regulatory changes.</p>
            </div>
            <span class="check-icon">✓</span>
          </div>
          <div class="checklist-item">
            <div>
              <strong>HR Templates &amp; Toolkits</strong>
              <p>Every document you need, ready to use.</p>
            </div>
            <span class="check-icon">✓</span>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</section>
<section class="content-section bg-dkblue bg-gradientblack">
    <?php get_template_part('template-parts/content', 'testimonials'); ?>
  	<?php get_template_part('template-parts/content', 'trusted'); ?>
            </section>  
              <section class="content-section bg-white">
                      	<?php get_template_part('template-parts/content', 'whynow'); ?>
</section>
<section class="" id="home-video">
      <div class="container h-content center">
                      <h2>See How AllMyHR + ARIES AI / HR AI Works in 60 Seconds</h2>
          <div id="w-node-_550baef3-6bff-bff4-8e38-614c2cbe1a39-2cbe1a38" class="w-layout-layout wf-layout-layout">
            <div class="w-layout-cell hero-video">
                  <a href="#" class="video-thumb w-inline-block">
          <div data-w-id="719366e5-82b9-18de-3851-f5d8d28718c2" class="lottie-animation" data-animation-type="lottie" data-src="/wp-content/themes/allmyhr-mmxxv/documents/Animation---1740613569953.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="2" data-duration="0"></div>
        </a>
        </div>
            <div class="w-layout-cell hero-headline">
                        <p data-w-id="280c230b-7b91-4e93-726f-9132bd035b07" style="opacity:0; padding-top:30px;">A quick walkthrough of how small businesses stay compliant and confident. ARIES uses conversational dialogue to deliver reliable answers and resources to your HR and compliance inquiries by tapping into our vast database of federal and state laws, Q&As, and compliance resources created by HR experts.</p>
            </div>
            
</div>
  </section>
  <section class="content-section bg-dkblue">
<div class="container h-content center">
    <h2>Simple, Affordable Pricing</h2>
    <p>Everything you need to stay compliant — for less than the cost of one HR mistake.</p>
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
      </div>
          </div>
        </div>
      </div>
    </div> <!-- container service -->
</section>
<section class="content-section bg-dkblue">
    <div class="container h-content center">
    <h2>Need HR Help Right Now?</h2>
    <p>Talk to an HR expert and get answers fast.</p>
            <a href="https://calendly.com/sjacksonallmyhr/10-minute-walkthrough?month=2025-04" class="btn w-button">Get Support</a>
    </div>
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
<?php
get_footer();