<?php
/**
 * Template Name: Nora's Homepage
 */
get_header('landing'); ?>

<style>
  #nora-hero-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #nora-benefits-grid {
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
  }
  #nora-how-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
  }
  #nora-stats-grid {
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
  }
  #nora-aries-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #nora-cta {
    grid-template-columns: 1.2fr 0.8fr !important;
  }
  /* Tighten section spacing */
  main#primary .content-section { padding-top: 40px !important; padding-bottom: 40px !important; }
  main#primary .hero-section { padding-bottom: 20px !important; }
  main#primary .content-section .container { padding-top: 0 !important; padding-bottom: 0 !important; }
  /* Testimonial grid */
  #nora-testimonial-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
    gap: 16px !important;
  }
  /* FAQ static grid */
  #nora-faq-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 16px !important;
  }
  @media (max-width: 991px) {
    #nora-hero-grid,
    #nora-aries-grid {
      grid-template-columns: 1fr !important;
    }
    #nora-benefits-grid,
    #nora-how-grid,
    #nora-stats-grid {
      grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    }
    #nora-faq-grid { grid-template-columns: 1fr !important; }
    #nora-testimonial-grid { grid-template-columns: 1fr !important; }
  }
  @media (max-width: 767px) {
    #nora-benefits-grid,
    #nora-how-grid,
    #nora-stats-grid {
      grid-template-columns: 1fr !important;
    }
  }
</style>

<main id="primary" class="site-main">
  <section class="hero-section orange">
    <div id="nora-hero-grid" class="w-layout-layout landing-hero wf-layout-layout">
      <div class="w-layout-cell center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/allmyhr-advisor-support-team.webp" loading="lazy" alt="AllMyHR advisors">
      </div>
      <div class="w-layout-cell center landing">
        <h1 class="match1"><span>You started a business to build something — not to become an HR department.</span></h1>
        <h2>AllMyHR gives growing companies an entire HR system — AI-powered tools + certified human advisors — for a fraction of a full-time hire.</h2>
        <p>Compliance deadlines. Employee questions. Handbook updates. Policy changes. You're juggling it all while your actual business waits. With AllMyHR, you get the HR infrastructure that normally takes a full department — powered by Aries AI and backed by certified advisors who know the law.</p>
        <div class="spaced">
          <a href="#quote" class="btn w-button">Get Started Free →</a>
          <a href="#how-it-works" class="btn clear w-button">See How It Works</a>
        </div>
        <div class="w-layout-hflex landing-flex-hero">
          <div class="w-layout-hflex phrases">
            <div class="fa _20-10-margin"></div>
            <h4><strong>30 Day Money Back Guarantee</strong></h4>
          </div>
          <div class="w-layout-hflex phrases">
            <div class="fa _20-10-margin"></div>
            <h4><strong>No Long Term Contracts</strong></h4>
          </div>
        </div>
      </div>
    </div>
    <div class="crumb"><span class="fa"></span> Trusted by growing companies across 45+ industries.</div>
  </section>

  <section class="content-section bg-white">
    <div class="trusted-container">
      <div class="w-layout-hflex carousel-container">
        <div class="companies-container">
          <a href="/services" class="company-icon w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/allmyhr-customer-testimonial-1.png" alt="Client logo" class="companies-logo"></a>
          <a href="/services" class="company-icon w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/allmyhr-customer-testimonial-2.png" alt="Client logo" class="companies-logo"></a>
          <a href="/services" class="company-icon w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/allmyhr-customer-testimonial-3.png" alt="Client logo" class="companies-logo"></a>
          <a href="/services" class="company-icon w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/allmyhr-customer-testimonial-4.png" alt="Client logo" class="companies-logo"></a>
          <a href="/services" class="company-icon w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/allmyhr-customer-testimonial-10.webp" alt="Client logo" class="companies-logo"></a>
          <a href="/services" class="company-icon w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/allmyhr-customer-testimonial-6.png" alt="Client logo" class="companies-logo"></a>
        </div>
        <div class="companies-container">
          <a href="/services" class="company-icon w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/allmyhr-customer-testimonial-9.png" alt="Client logo" class="companies-logo"></a>
          <a href="/services" class="company-icon w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/allmyhr-customer-testimonial-5.png" alt="Client logo" class="companies-logo"></a>
          <a href="/services" class="company-icon w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/logoipsum-352.svg" alt="Client logo" class="companies-logo"></a>
          <a href="/services" class="company-icon w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/logoipsum-335.svg" alt="Client logo" class="companies-logo"></a>
          <a href="/services" class="company-icon w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/logoipsum-343.svg" alt="Client logo" class="companies-logo"></a>
          <a href="/services" class="company-icon w-inline-block"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/logoipsum-347.svg" alt="Client logo" class="companies-logo"></a>
        </div>
      </div>
      <div class="center">
        <div class="crumb highlight blu txt"><span class="fa"></span> Customer-loved support + 24/7 HR coverage.</div>
      </div>
    </div>
  </section>

  <section class="content-section bg-white" id="problem">
    <div class="container _900-width">
      <h2 class="match1 center">The HR Problem Growing Companies Actually Face</h2>
      <h3 class="center">It's not about hiring one more person. It's about the systems they'd need to build.</h3>
      <p>You need someone to handle compliance — federal labor laws change constantly, and one mistake costs you thousands. You need someone for employee questions, onboarding, training, benefits, payroll coordination, and keeping your handbook current. In other words, you need an HR department — but you don't have $100K+ for a full-time hire.</p>
      <p>AllMyHR delivers the expertise, the systems, and the technology so you stop playing HR and start scaling your business.</p>
      <div class="center">
        <a href="#solution" class="btn w-button">See How AllMyHR Changes That →</a>
      </div>
    </div>
  </section>

  <section class="content-section bg-dkblue" id="solution">
    <div class="container h-content">
      <h2 class="match1">Your Complete HR System. No Hiring Required.</h2>
      <h3>AI that handles the routine. Certified advisors who handle the rest.</h3>
      <p>Aries AI answers everyday questions instantly — policy lookups, onboarding guidance, handbook references. When judgement is needed, a certified advisor steps in. The result: no handoff delays, no "we'll get back to you," just real help in real time.</p>
      <div class="w-layout-hflex phrases">
        <div class="fa highlight blu txt"></div>
        <h4>Compliance alerts across states and industries.</h4>
      </div>
      <div class="w-layout-hflex phrases">
        <div class="fa highlight blu txt"></div>
        <h4>Living handbook + benefits administration that stay current.</h4>
      </div>
      <div class="w-layout-hflex phrases">
        <div class="fa highlight blu txt"></div>
        <h4>350+ training courses with assignments, tracking, and certificates.</h4>
      </div>
      <div class="spaced">
        <a href="#quote" class="btn w-button">Explore AllMyHR →</a>
        <a href="#testimonials" class="btn clear w-button">Hear From Customers</a>
      </div>
    </div>
  </section>

  <section class="content-section bg-white" id="benefits">
    <div class="container">
      <h2 class="center match1">Four Reasons Operators Choose AllMyHR</h2>
      <div id="nora-benefits-grid" class="w-layout-layout wf-layout-layout">
        <div class="w-layout-cell">
          <div class="card"><img src="<?php echo get_template_directory_uri(); ?>/images/hrcertified.png" loading="lazy" width="65" alt="HR Hotline icon">
            <h3 class="highlight blu txt">HR Hotline — Real Advisors. Real Answers.</h3>
            <div class="crumb">Call, email, or chat. A certified HR advisor picks up and solves questions about pay, time off, conversations, or policy interpretation — instantly.</div>
            <div class="crumb"><a href="#quote" class="highlight blu txt">Learn More</a></div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card"><img src="<?php echo get_template_directory_uri(); ?>/images/onboarding.webp" loading="lazy" width="90" alt="Aries AI icon">
            <h3 class="highlight blu txt">Aries AI — Always-On HR Assistant</h3>
            <div class="crumb">Answers most routine employee questions on the spot, knows your handbook, and flags sensitive issues for a human advisor.</div>
            <div class="crumb"><a href="#aries" class="highlight blu txt">See Aries in Action</a></div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card"><img src="<?php echo get_template_directory_uri(); ?>/images/smart-living.webp" loading="lazy" width="80" alt="Compliance portal icon">
            <h3 class="highlight blu txt">Compliance Portal — Sleep at Night</h3>
            <div class="crumb">Automated alerts for federal and state changes keep you ahead of deadlines. Your handbook updates with a click.</div>
            <div class="crumb"><a href="#roi" class="highlight blu txt">See the ROI</a></div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card"><img src="<?php echo get_template_directory_uri(); ?>/images/lms.webp" loading="lazy" width="85" alt="LMS icon">
            <h3 class="highlight blu txt">Learning & Development — 350+ Courses</h3>
            <div class="crumb">Assign training, track completion, and build a culture that sticks without hiring an internal L&D team.</div>
            <div class="crumb"><a href="#quote" class="highlight blu txt">Deliver Training</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content-section bg-white" id="how-it-works">
    <div class="container">
      <h2 class="center match1">Up and Running in Days, Not Months</h2>
      <h3 class="center">Three steps between here and HR that actually works.</h3>
      <div id="nora-how-grid" class="w-layout-layout wf-layout-layout">
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="crumb highlight blu txt">Step 1</div>
            <h3>Sign Up & Tell Us About Your Company</h3>
            <p>You describe your business — size, industry, locations, current pain points. We configure Aries AI and compliance rules in minutes.</p>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="crumb highlight blu txt">Step 2</div>
            <h3>Get Matched with Your Advisor Team</h3>
            <p>Certified HR advisors review your policies, answer setup questions, and make sure everything is tuned to your exact needs.</p>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="crumb highlight blu txt">Step 3</div>
            <h3>Run HR Like a Pro</h3>
            <p>Your team uses Aries for daily questions. Advisors jump in for complex issues. Compliance stays current. You focus on growth.</p>
          </div>
        </div>
      </div>
      <div class="center">
        <a href="#quote" class="btn w-button">Start Your Free Trial →</a>
      </div>
    </div>
  </section>

  <section class="content-section bg-gradientblack" id="aries">
    <div class="container h-content">
      <div id="nora-aries-grid" class="w-layout-layout wf-layout-layout">
        <div class="w-layout-cell">
          <h2 class="match1">Meet Aries AI — The HR Assistant You've Always Needed</h2>
          <h3 class="highlight txt">AI-powered. Human-verified. Always on your side.</h3>
          <p>Employees ask questions, Aries answers instantly. It learns your handbook, benefits, and culture, and flags anything sensitive for a certified advisor.</p>
          <h4 class="highlight blu txt">What Aries Does</h4>
          <div class="w-layout-hflex bullet">
            <div class="crumb"><span class="fa highlight blu txt"></span></div>
            <h4 class="crumb">Answers policy & benefits questions in seconds.</h4>
          </div>
          <div class="w-layout-hflex bullet">
            <div class="crumb"><span class="fa highlight blu txt"></span></div>
            <h4 class="crumb">Onboards new hires with instant resource access.</h4>
          </div>
          <div class="w-layout-hflex bullet">
            <div class="crumb"><span class="fa highlight blu txt"></span></div>
            <h4 class="crumb">Flags complex issues for real advisors.</h4>
          </div>
          <h4 class="highlight blu txt">Why This Matters</h4>
          <p>Without Aries, every employee question becomes a bottleneck. With Aries, answers are instant, accurate, and consistent — so you stop being the middle person.</p>
          <a href="#quote" class="btn w-button">See Aries AI in Action →</a>
        </div>
        <div class="w-layout-cell center">
          <img src="<?php echo get_template_directory_uri(); ?>/images/all-my-hr-portal-screen-4.svg" loading="lazy" alt="Aries AI screenshot">
        </div>
      </div>
    </div>
  </section>

  <section class="content-section bg-white" id="testimonials">
    <div class="container">
      <h2 class="center match1">Don't Take Our Word For It</h2>
      <div class="crumb center highlight blu txt"><span class="fa"></span> 5 Star Reviews</div>
      <div id="nora-testimonial-grid" class="w-layout-layout wf-layout-layout">
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="fa highlight blu jumbo txt"></div>
            <p>Before AllMyHR, I spent 3-4 hours a week tracking compliance updates across our 8 states. Now the portal alerts me instantly &mdash; I've cut that to 30 minutes a week.</p>
            <h4 class="highlight txt">Margaret M.</h4>
            <div class="crumb">HR Manager</div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="fa highlight blu jumbo txt"></div>
            <p>AllMyHR is an amazing program. We updated company policies with the Living Handbook &mdash; what would've taken a week only took 2 days. It's made a tedious part of my job enjoyable.</p>
            <h4 class="highlight txt">Shamika P.</h4>
            <div class="crumb">General Manager</div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="fa highlight blu jumbo txt"></div>
            <p>We have found the AllMyHR platform to be extremely easy to use. I can pick up the phone or send an email and get a quick, reliable response. I highly recommend AllMyHR.</p>
            <h4 class="highlight txt">Barbara W.</h4>
            <div class="crumb">Content Creator</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content-section bg-white" id="roi">
    <div class="container">
      <h2 class="center match1">The Math Is Simple</h2>
      <h3 class="center">What growing companies actually save with AllMyHR.</h3>
      <div id="nora-stats-grid" class="w-layout-layout wf-layout-layout">
        <div class="w-layout-cell">
          <div class="card lite">
            <h3 class="highlight txt">Hours Back Every Week</h3>
            <div class="crumb">Companies using AllMyHR spend less time on HR administration — and more time running their business.</div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <h3 class="highlight txt">$40K–$120K/year</h3>
            <div class="crumb">What companies avoid in salary + overhead compared to hiring in-house HR roles.</div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <h3 class="highlight txt">Stay Ahead of Compliance</h3>
            <div class="crumb">Automated alerts keep you ahead of federal and state changes so nothing slips.</div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <h3 class="highlight txt">24-Hour HR Support</h3>
            <div class="crumb">Aries AI + advisors = instant answers for employees, any time.</div>
          </div>
        </div>
      </div>
      <div class="center">
        <a href="#quote" class="btn w-button">Calculate Your Savings →</a>
      </div>
    </div>
  </section>

  <section class="content-section bg-white" id="faq">
    <div class="container">
      <h2 class="center match1">FAQs About AllMyHR</h2>
      <div id="nora-faq-grid" class="w-layout-layout wf-layout-layout">
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="w-layout-hflex phrases"><img src="<?php echo get_template_directory_uri(); ?>/images/tools.webp" loading="lazy" alt="FAQ icon" class="headlineicon">
              <h3>How is AllMyHR different from hiring HR in-house?</h3>
            </div>
            <div class="crumb hr">AllMyHR costs a fraction of a full-time salary, is available immediately, and combines AI efficiency with certified advisors who know employment law. No onboarding, no turnover, no gaps.</div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="w-layout-hflex phrases"><img src="<?php echo get_template_directory_uri(); ?>/images/real-answer.webp" loading="lazy" alt="FAQ icon" class="headlineicon">
              <h3>What if Aries AI can't answer a question?</h3>
            </div>
            <div class="crumb hr">It flags the question to your advisor immediately. A certified expert follows up with the employee so every answer is accurate and consistent.</div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="w-layout-hflex phrases"><img src="<?php echo get_template_directory_uri(); ?>/images/stay-curve.webp" loading="lazy" alt="FAQ icon" class="headlineicon">
              <h3>Will the compliance portal keep us compliant?</h3>
            </div>
            <div class="crumb hr">Proactive alerts for federal and state changes plus guidance on what to update. While only a lawyer can guarantee compliance, AllMyHR keeps you ahead of every deadline.</div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="w-layout-hflex phrases"><img src="<?php echo get_template_directory_uri(); ?>/images/smart-living.webp" loading="lazy" alt="FAQ icon" class="headlineicon">
              <h3>Is the handbook really &ldquo;living&rdquo;?</h3>
            </div>
            <div class="crumb hr">Yes. Update policies anytime, publish instantly, and Aries AI immediately references the new version so employees always hear the current answer.</div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="w-layout-hflex phrases"><img src="<?php echo get_template_directory_uri(); ?>/images/lms.webp" loading="lazy" alt="FAQ icon" class="headlineicon">
              <h3>What about benefits and payroll?</h3>
            </div>
            <div class="crumb hr">AllMyHR integrates with major payroll and benefits providers. We manage coordination, enrollment, and updates so you aren't juggling multiple systems.</div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="card lite">
            <div class="w-layout-hflex phrases"><img src="<?php echo get_template_directory_uri(); ?>/images/onboarding.webp" loading="lazy" alt="FAQ icon" class="headlineicon">
              <h3>How long does setup take?</h3>
            </div>
            <div class="crumb hr">Most teams are live in under a week. Configure Aries, match with advisors, and your employees can start asking questions immediately.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content-section orange" id="quote">
    <div class="container">
      <div class="container h-content center">
        <h2 class="center">Stop Playing HR. Start Scaling Your Business.</h2>
        <p>AllMyHR gives you the HR infrastructure you need — without the HR department price tag. Get a custom quote or launch a free trial in minutes.</p>
      </div>
      <div class="container card bg-dkblue">
        <div id="nora-cta" class="w-layout-layout cta wf-layout-layout">
          <div class="w-layout-cell">
            <h3 class="hr"><span class="highlight blu txt">HR headaches end here.</span> See how AI + real advisors give your team instant answers, up-to-date policies, and proactive compliance.</h3>
            <div class="w-layout-hflex phrases">
              <div class="fa highlight blu txt"></div>
              <h4>AI assistant + certified advisor hotline.</h4>
            </div>
            <div class="w-layout-hflex phrases">
              <div class="fa highlight blu txt"></div>
              <h4>Living handbook, compliance alerts, LMS access.</h4>
            </div>
            <div class="w-layout-hflex phrases">
              <div class="fa highlight blu txt"></div>
              <h4>24/7 support for employees — without hiring.</h4>
            </div>
          </div>
          <div class="w-layout-cell form-container">
            <?php echo do_shortcode('[gravityform id="8" title="false" description="false" ajax="true"]'); ?>
          </div>
        </div>
        <div class="w-layout-hflex badges">
          <div class="w-layout-hflex phrases badge"><img src="<?php echo get_template_directory_uri(); ?>/images/668ff895aff046da20d194a5_trust.svg" loading="lazy" alt="Certification badge" class="headlineicon">
            <h4 class="highlight blu txt">Certified HR Advisors</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer('landing'); ?>
