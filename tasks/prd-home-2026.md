# PRD: AllMyHR Homepage 2026 Template

## 1. Introduction/Overview

This document outlines the requirements for creating a new WordPress page template (`page-home-2026.php`) for the AllMyHR website. The template will serve as the primary homepage, showcasing AllMyHR's HR compliance and support services with emphasis on the new ARIES AI capabilities.

The template must exclusively use existing UI components, CSS classes, and patterns already present in `index.php` and the `template-parts/` directory. No new CSS or JavaScript should be created—all animations are controlled via existing `data-w-id` attributes that must be preserved.

## 2. Goals

- **Primary Goal:** Create a compelling, conversion-focused homepage that clearly communicates AllMyHR's value proposition and guides visitors toward engagement (email capture, quote requests).
- **Secondary Goals:**
  - Highlight the new ARIES AI / HR AI capabilities
  - Address 2026 regulatory compliance concerns
  - Provide clear pathways for different user needs (compliance, employee issues, handbooks, training, tools)
  - Maintain visual and functional consistency with the existing site

## 3. User Stories

1. **As a business owner**, I want to quickly understand what AllMyHR offers so I can determine if it meets my HR needs.
2. **As an HR manager**, I want to see specific features (handbook builder, training, compliance alerts) so I can evaluate the platform's capabilities.
3. **As a compliance-concerned visitor**, I want to learn about 2026 regulatory changes so I understand the urgency of getting HR support.
4. **As a price-sensitive prospect**, I want to see that pricing is simple and affordable before I invest time in a demo.
5. **As any visitor**, I want to watch a quick video to understand how the platform works without reading extensive content.
6. **As a ready-to-buy visitor**, I want easy access to quote forms and contact options throughout the page.

## 4. Functional Requirements

### 4.1 Template Setup
1. Create file at `/wp-content/themes/allmyhr-mmxxv/page-home-2026.php`
2. Include WordPress template header comment with `Template Name: Home 2026`
3. Call `get_header()` at the start
4. Call `get_footer()` at the end

### 4.2 Section 1: Hero Section
5. Use `section.hero-section` wrapper with lottie background pattern
6. Include the lottie background div structure with `data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198"`
7. Display H1: "Your Complete HR Compliance & Support System — Now Powered by ARIES AI" with key phrases wrapped in `span.highlight.txt`
8. Display supporting subheadline paragraph
9. Include two CTA buttons using Gravity Form ID 12 (email capture shortcode)
10. Include video thumbnail with lottie play button animation (reuse pattern from `index.php` lines 17-55)
11. Use `div.container.h-content` for hero content layout

### 4.3 Section 2: Intro Value Section
12. Use `section.content-section.bg-white` wrapper
13. Display H2: "HR Confidence Starts Here" with `span.highlight.blu.txt` on key words
14. Display supporting paragraph explaining the value proposition

### 4.4 Section 3: Guided Path Section
15. Use `section.content-section.bg-dkblue` wrapper
16. Display H2: "What Do You Need Help With Today?"
17. Create 5 clickable cards in a `w-layout-layout` grid:
    - Card 1: Compliance & Risk Management
    - Card 2: Employee Issues & Tough Situations
    - Card 3: Handbooks & Policies
    - Card 4: Training & Safety
    - Card 5: HR Tools, Templates & Resources
18. Each card must include: icon, H3 title, description using `crumb` class
19. Cards should use `div.card` styling and be clickable (link to relevant site pages or `#` placeholder)

### 4.5 Section 4: Features Section
20. Use `section.content-section.bg-dkblue.bg-gradientblack` wrapper
21. Create 6 feature cards in grid layout using icon + text pattern:
    - Unlimited HR Experts
    - ARIES AI / HR AI Compliance Intelligence
    - Handbook Builder
    - Training & LMS
    - Compliance Alerts
    - HR Templates & Toolkits
22. Each feature card uses `div.w-layout-hflex.phrases` with `img.headlineicon` and highlighted H3
23. Include `div.crumb` description text for each feature

### 4.6 Section 5: Social Proof Section
24. Include testimonials using `get_template_part('template-parts/content', 'testimonials')`
25. Include trusted logos carousel using `get_template_part('template-parts/content', 'trusted')`
26. Display industry tags: "Construction • Retail • Healthcare • Nonprofit • Professional Services"

### 4.7 Section 6: Why Now Section
27. Use `section.content-section.bg-white` wrapper
28. Display H2: "New 2026 Regulations Are Now in Effect"
29. Display bullet points about:
    - Minimum wage changes
    - Overtime rule updates
    - Training requirements
30. Use the bullet list pattern with `div.w-layout-hflex.bullet`
31. Include CTA button: "Stay Compliant Today" using `a.btn.w-button`

### 4.8 Section 7: Video Section
32. Reuse video modal pattern from `index.php`
33. Display H2: "See How AllMyHR + ARIES AI Works in 60 Seconds"
34. Include video thumbnail with play button
35. Preserve video modal functionality with existing `data-w-id` attributes

### 4.9 Section 8: Pricing Preview Section
36. Use `section.content-section.bg-dkblue` wrapper
37. Display H2: "Simple, Affordable Pricing"
38. Display tagline text about pricing approach
39. Include CTA button: "View Pricing" linking to pricing page

### 4.10 Section 9: Bottom CTA Section
40. Use `get_template_part('template-parts/content', 'quoteform')` OR create custom CTA card
41. Include Gravity Form ID 1 (quote form shortcode)
42. Display H2: "Need HR Help Right Now?"
43. Include prominent CTA: "Get Support"

### 4.11 Animation & Interaction Requirements
44. Preserve all `data-w-id` attributes on interactive elements
45. Ensure accordion/FAQ components (if any) function with existing JS
46. Ensure testimonials slider functions correctly
47. Ensure video modal opens/closes correctly
48. Ensure lottie animations play on load

## 5. Non-Goals (Out of Scope)

- **No new CSS:** All styling must use existing classes from `all-my-hr.webflow.css`, `webflow.css`, and `style.css`
- **No new JavaScript:** All interactions use existing Webflow JS and `data-w-id` bindings
- **No custom fields:** Content is hardcoded directly in the template
- **No new testimonials:** Use only existing testimonials from `content-testimonials.php`
- **No new template parts:** Reuse existing template parts; do not create new ones
- **No backend functionality:** This is a front-end template only

## 6. Design Considerations

### Visual Hierarchy
- Hero section should dominate above-the-fold with clear value prop and CTAs
- Use consistent spacing between sections (existing CSS handles this)
- Alternate background colors (dark/light) to create visual separation

### Color Usage
- Primary accent: Orange (`span.highlight.txt`)
- Secondary accent: Blue (`span.highlight.blu.txt`)
- Dark sections: `bg-dkblue`, `bg-gradientblack`
- Light sections: `bg-white`

### Icons
Use Font Awesome icons already available:
- `` - Checkmark (for bullets, features)
- `` - Quote (for testimonials)
- `` - Navigation arrows
- `` - Star/badge (for highlights)

## 7. Technical Considerations

### File Structure
```
/wp-content/themes/allmyhr-mmxxv/
├── page-home-2026.php          ← NEW FILE
├── index.php                    ← Reference for patterns
├── template-parts/
│   ├── content-testimonials.php ← Reuse
│   ├── content-trusted.php      ← Reuse
│   └── content-quoteform.php    ← Reuse
```

### Template Header Format
```php
<?php
/**
 * Template Name: Home 2026
 *
 * @package allmyhr-mmxxv
 */

get_header();
?>
```

### Gravity Form Shortcodes
- Email capture: `<?php echo do_shortcode('[gravityform id="12" title="false" description="false"]'); ?>`
- Quote form: `<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>`

### Lottie Background Pattern
```html
<div class="lottie">
  <div class="lottie-hero" 
       data-w-id="47cac669-4e2e-8e9f-d907-c742248ea198" 
       data-animation-type="lottie" 
       data-src="/wp-content/themes/allmyhr-mmxxv/documents/64b6c16282020c34caa0f1e1_lottie-third.lottie" 
       data-loop="1" 
       data-direction="1" 
       data-autoplay="1" 
       data-is-ix2-target="0" 
       data-renderer="svg" 
       data-default-duration="15.958333333333334" 
       data-duration="0">
  </div>
  <div class="overlay-linear"></div>
  <div class="overlay-radial"></div>
</div>
```

### Link Destinations (To Be Confirmed)
- Guided Path cards → relevant service/feature pages
- "Stay Compliant Today" → compliance page or quote form
- "View Pricing" → `/pricing/` or WooCommerce shop
- "Get Support" → contact page or triggers quote form

## 8. Success Metrics

The template is considered complete when:

1. **Rendering:** All 9 sections render correctly with proper styling
2. **Visual Consistency:** Page matches the visual style of existing site pages
3. **Animations Work:**
   - Lottie background animates on page load
   - Video modal opens when thumbnail is clicked
   - Testimonials slider functions (if applicable)
   - Any accordions expand/collapse correctly
4. **Forms Function:** Gravity Forms render and submit successfully
5. **Template Parts Load:** All `get_template_part()` calls render content
6. **Responsive:** Page displays correctly on:
   - Desktop (1200px+)
   - Tablet (768px - 1199px)
   - Mobile (320px - 767px)
7. **Accessibility:**
   - All images have alt text
   - Heading hierarchy is logical (H1 → H2 → H3)
   - Links have descriptive text
   - Color contrast meets WCAG AA standards (handled by existing CSS)
   - Interactive elements are keyboard accessible

## 9. Open Questions

1. **Link URLs:** What are the exact destination URLs for:
   - Each of the 5 Guided Path cards?
   - "Stay Compliant Today" button?
   - "View Pricing" button?

2. **Copy Finalization:** Is all the headline/body copy provided in the initial prompt final, or should placeholder text be used pending final copywriting?

3. **Video:** Confirm the video modal should use the same video source as `index.php`. If different, provide the new video embed URL.

4. **Industry Tags:** Should the industry list ("Construction • Retail • Healthcare...") link to industry-specific pages, or remain as plain text?

5. **Form Behavior:** After email capture (Gravity Form 12), should users see a confirmation message, redirect to a thank-you page, or something else?

---

*Document created: February 3, 2026*
*Template file: `page-home-2026.php`*
*Location: `/tasks/prd-home-2026.md`*
