# PRD: Homepage Performance Optimization & Bug Fixes

## 1. Introduction/Overview

The homepage (`index.php`) has several critical bugs and performance issues affecting page load speed and user experience. This PRD covers bug fixes, performance optimizations, and a UX improvement to the product loop's call-to-action.

## 2. Goals

- Fix duplicate code causing unnecessary server load and potential rendering issues
- Reduce initial page load time by optimizing render-blocking resources
- Improve conversion flow by replacing "Learn More" links with direct "Buy Now" checkout actions
- Implement caching for the WooCommerce product query
- Replace heavy Lottie animations with lightweight CSS alternatives

## 3. User Stories

- **As a visitor**, I want the homepage to load quickly so I can browse without waiting.
- **As a potential customer**, I want to click "Buy Now" and go directly to checkout so I can purchase faster.
- **As a site owner**, I want optimized code that doesn't duplicate content or make unnecessary server requests.

## 4. Functional Requirements

### Phase 1: Critical Bug Fixes (Deploy First)

**FR-1: Remove Duplicate Header Call**
- Location: `index.php`, line 154
- Action: Delete the line `get_header('shop');`
- Reason: Header is already loaded at line 15; this causes duplicate processing

**FR-2: Remove Duplicate Testimonials Section**
- Location: `index.php`, line 201
- Action: Delete `<?php get_template_part('template-parts/content', 'testimonials'); ?>`
- Keep: Line 190 instance (inside the On-Demand section)

### Phase 2: Performance Optimizations

**FR-3: Optimize Google Fonts Loading**
- Location: `header.php`, lines 32-33
- Action: Replace JavaScript WebFont loader with CSS preload/preconnect approach
- Implementation:
  ```html
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;900&family=Nunito:wght@400;700;900&display=swap">
  ```
- Remove: The `webfont.js` script and `WebFont.load()` call

**FR-4: Defer Analytics Scripts**
- Location: `header.php`, lines 37-75 (FullStory, GTM, gtag)
- Action: Move all analytics/tracking scripts to `wp_footer` with priority 100
- Create new function in `functions.php` to output these scripts
- Conditionally exclude from admin pages

**FR-5: Add Resource Hints**
- Location: `header.php`, inside `<head>`
- Action: Add preconnect/dns-prefetch for third-party domains:
  ```html
  <link rel="preconnect" href="https://ajax.googleapis.com">
  <link rel="preconnect" href="https://www.googletagmanager.com">
  <link rel="dns-prefetch" href="//cdn.embedly.com">
  <link rel="dns-prefetch" href="//fullstory.com">
  ```

**FR-6: Implement YouTube Facade Pattern**
- Location: `index.php`, lines 17-19
- Action: Replace iframe with placeholder; load iframe only when modal opens
- Store video ID in data attribute: `data-video-id="MsLReBq4ziU"`
- Inject iframe via JavaScript when user triggers video modal

**FR-7: Replace Lottie FAQ Arrows with CSS Animation**
- Location: `index.php`, lines 58, 71, 84, 99, 112, 125
- Action: Remove all 6 Lottie arrow elements
- Replace with CSS-only chevron that rotates on FAQ expand
- CSS implementation: Transform rotate from 0deg to 180deg on `.faq-card.open` state

**FR-8: Add Transient Caching for Product Query**
- Location: `index.php`, lines 156-180
- Action: Wrap WP_Query in transient cache
- Cache key: `allmyhr_homepage_products`
- Expiration: 1 hour (3600 seconds)
- Invalidation: Clear cache on product save/update via `save_post_product` hook

### Phase 3: UX Enhancement

**FR-9: Replace "Learn More" with "Buy Now" in Product Cards**
- Location: `woocommerce/product-cards.php` (or wherever product loop template is)
- Action: Change link text from "Learn More" to "Buy Now"
- Behavior: Link should use WooCommerce add-to-cart URL with redirect to checkout
- URL format: `?add-to-cart={product_id}` (existing redirect in functions.php handles checkout redirect)
- Apply to: All products in current categories (excluding uncategorized)

## 5. Non-Goals (Out of Scope)

- Redesigning the homepage layout
- Changing product categories or filtering logic
- Modifying the checkout flow itself
- Adding new sections to the homepage
- Mobile-specific optimizations (beyond what these fixes provide)

## 6. Design Considerations

**CSS Arrow Animation (FR-7):**
- Use existing highlight color (`highlight blu txt` class)
- Arrow should point down by default, rotate to point up when FAQ is open
- Transition duration: 300ms ease-in-out
- No additional icons/images needed; use CSS border or SVG inline

**Buy Now Button (FR-9):**
- Maintain existing button styling (`.btn` class)
- Consider adding visual distinction (e.g., different color) to indicate purchase action
- Keep button accessible with clear focus states

## 7. Technical Considerations

**Transient Cache Invalidation (FR-8):**
```php
add_action('save_post_product', 'clear_homepage_product_cache');
function clear_homepage_product_cache($post_id) {
    delete_transient('allmyhr_homepage_products');
}
```

**Analytics Script Migration (FR-4):**
- Ensure GTM dataLayer is initialized before scripts load
- Test that conversion tracking still fires correctly
- Verify FullStory session recording works after deferral

**YouTube Facade (FR-6):**
- Preload thumbnail image from YouTube: `https://img.youtube.com/vi/MsLReBq4ziU/maxresdefault.jpg`
- Add play button overlay (can reuse existing Lottie play animation or use CSS/SVG)

## 8. Success Metrics

| Metric | Current (Estimated) | Target |
|--------|---------------------|--------|
| Lighthouse Performance Score | ~50-60 | 75+ |
| First Contentful Paint (FCP) | >3s | <2s |
| Largest Contentful Paint (LCP) | >4s | <2.5s |
| Total Blocking Time (TBT) | >500ms | <200ms |
| Number of HTTP requests | High | Reduced by ~10-15 |

## 9. Open Questions

1. Should the product transient cache also be cleared when product categories change?
2. Is there a specific thumbnail/poster image preferred for the YouTube facade, or use YouTube's auto-generated thumbnail?
3. Should the "Buy Now" button have different styling to differentiate it from navigation buttons?

---

## Implementation Order (Recommended)

1. **Phase 1** - Bug fixes (FR-1, FR-2) — Deploy immediately, low risk
2. **Phase 2A** - Font optimization (FR-3, FR-5) — Quick wins, high impact
3. **Phase 2B** - Analytics deferral (FR-4) — Test thoroughly before deploy
4. **Phase 2C** - YouTube facade (FR-6) — Medium effort, good impact
5. **Phase 2D** - CSS arrows (FR-7) — Replace Lottie dependency
6. **Phase 2E** - Product cache (FR-8) — Backend optimization
7. **Phase 3** - Buy Now UX (FR-9) — Feature enhancement, test conversion impact
