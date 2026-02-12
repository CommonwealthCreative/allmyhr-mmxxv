# Tasks: AllMyHR Homepage 2026 Template

## Relevant Files

- `page-home-2026.php` - NEW: Main template file to be created
- `index.php` - Reference for existing patterns and component structures
- `template-parts/content-testimonials.php` - Reuse for social proof section
- `template-parts/content-trusted.php` - Reuse for trusted logos carousel
- `template-parts/content-quoteform.php` - Reuse for bottom CTA section

### Notes

- No test files required — this is a WordPress template file
- No new CSS or JavaScript files — use existing styles and animations
- Preserve all `data-w-id` attributes exactly as they appear in reference files
- Reference PRD: `/tasks/prd-home-2026.md`

## Instructions for Completing Tasks

IMPORTANT: As you complete each task, you must check it off in this markdown file by changing `- [ ]` to `- [x]`.

## Tasks

- [x] 0.0 Create feature branch
  - [x] 0.1 Create and checkout new branch `feature/home-2026`

- [x] 1.0 Set up template file structure
  - [x] 1.1 Create `page-home-2026.php` with WordPress template header comment (`Template Name: Home 2026`)
  - [x] 1.2 Add `get_header()` call at the start
  - [x] 1.3 Add `get_footer()` call at the end
  - [ ] 1.4 Verify template appears in WordPress page editor template dropdown

- [x] 2.0 Build Hero Section with video modal
  - [x] 2.1 Add video modal markup with facade pattern (copy from `index.php` lines 17-55)
  - [x] 2.2 Add `section.hero-section` wrapper
  - [x] 2.3 Add lottie background div structure with `data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198"`
  - [x] 2.4 Add `div.container.h-content` with grid layout
  - [x] 2.5 Add H1 headline with `span.highlight.txt` for emphasis
  - [x] 2.6 Add supporting subheadline paragraph
  - [x] 2.7 Add Gravity Form ID 12 shortcode for email capture CTA
  - [x] 2.8 Add video thumbnail with lottie play button animation (preserve `data-w-id`)
  - [ ] 2.9 Verify lottie animations load and video modal opens on click

- [x] 3.0 Build middle page sections (Intro, Guided Path, Features, Social Proof, Why Now)
  - [x] 3.1 Build Section 2 - Intro Value Section (`section.content-section.bg-white`)
    - [x] 3.1.1 Add H2: "HR Confidence Starts Here" with `span.highlight.blu.txt`
    - [x] 3.1.2 Add supporting paragraph text
  - [x] 3.2 Build Section 3 - Guided Path Section (`section.content-section.bg-dkblue`)
    - [x] 3.2.1 Add H2: "What Do You Need Help With Today?"
    - [x] 3.2.2 Create `w-layout-layout` grid container
    - [x] 3.2.3 Add Card 1: Compliance & Risk Management (icon + H3 + crumb)
    - [x] 3.2.4 Add Card 2: Employee Issues & Tough Situations
    - [x] 3.2.5 Add Card 3: Handbooks & Policies
    - [x] 3.2.6 Add Card 4: Training & Safety
    - [x] 3.2.7 Add Card 5: HR Tools, Templates & Resources
    - [x] 3.2.8 Add placeholder `#` links to each card (to be updated with real URLs)
  - [x] 3.3 Build Section 4 - Features Section (`section.content-section.bg-dkblue.bg-gradientblack`)
    - [x] 3.3.1 Create grid layout container
    - [x] 3.3.2 Add Feature 1: Unlimited HR Experts (icon + H3 + crumb description)
    - [x] 3.3.3 Add Feature 2: ARIES AI / HR AI Compliance Intelligence
    - [x] 3.3.4 Add Feature 3: Handbook Builder
    - [x] 3.3.5 Add Feature 4: Training & LMS
    - [x] 3.3.6 Add Feature 5: Compliance Alerts
    - [x] 3.3.7 Add Feature 6: HR Templates & Toolkits
  - [x] 3.4 Build Section 5 - Social Proof Section
    - [x] 3.4.1 Add `get_template_part('template-parts/content', 'testimonials')`
    - [x] 3.4.2 Add `get_template_part('template-parts/content', 'trusted')`
    - [x] 3.4.3 Add industry tags text: "Construction • Retail • Healthcare • Nonprofit • Professional Services"
  - [x] 3.5 Build Section 6 - Why Now Section (`section.content-section.bg-white`)
    - [x] 3.5.1 Add H2: "New 2026 Regulations Are Now in Effect"
    - [x] 3.5.2 Add bullet point: Minimum wage changes (using `div.w-layout-hflex.bullet` pattern)
    - [x] 3.5.3 Add bullet point: Overtime rule updates
    - [x] 3.5.4 Add bullet point: Training requirements
    - [x] 3.5.5 Add CTA button: "Stay Compliant Today" (`a.btn.w-button`)

- [x] 4.0 Build bottom page sections (Video, Pricing, Bottom CTA)
  - [x] 4.1 Build Section 7 - Video Section
    - [x] 4.1.1 Add section wrapper with appropriate background class
    - [x] 4.1.2 Add H2: "See How AllMyHR + ARIES AI Works in 60 Seconds"
    - [x] 4.1.3 Add video thumbnail with play button (reuse lottie animation pattern)
    - [x] 4.1.4 Link thumbnail to trigger existing video modal
  - [x] 4.2 Build Section 8 - Pricing Preview Section (`section.content-section.bg-dkblue`)
    - [x] 4.2.1 Add H2: "Simple, Affordable Pricing"
    - [x] 4.2.2 Add tagline paragraph text
    - [x] 4.2.3 Add CTA button: "View Pricing" linking to pricing page
  - [x] 4.3 Build Section 9 - Bottom CTA Section
    - [x] 4.3.1 Add `get_template_part('template-parts/content', 'quoteform')` OR custom CTA
    - [x] 4.3.2 Ensure Gravity Form ID 1 is included for quote requests
    - [ ] 4.3.3 Verify form renders and submits correctly

- [ ] 5.0 Test and verify functionality, responsiveness, and accessibility
  - [ ] 5.1 Verify all 9 sections render with correct styling
  - [ ] 5.2 Test animations
    - [ ] 5.2.1 Verify lottie background animates on page load
    - [ ] 5.2.2 Verify video modal opens when thumbnail clicked
    - [ ] 5.2.3 Verify testimonials slider functions correctly
  - [ ] 5.3 Test Gravity Forms
    - [ ] 5.3.1 Verify Form ID 12 (email capture) renders and submits
    - [ ] 5.3.2 Verify Form ID 1 (quote form) renders and submits
  - [ ] 5.4 Test responsive breakpoints
    - [ ] 5.4.1 Desktop (1200px+) - verify layout and spacing
    - [ ] 5.4.2 Tablet (768px - 1199px) - verify grid collapses appropriately
    - [ ] 5.4.3 Mobile (320px - 767px) - verify single column layout
  - [ ] 5.5 Accessibility check
    - [ ] 5.5.1 Verify all images have alt text
    - [ ] 5.5.2 Verify heading hierarchy (H1 → H2 → H3)
    - [ ] 5.5.3 Verify links have descriptive text
    - [ ] 5.5.4 Test keyboard navigation on interactive elements
