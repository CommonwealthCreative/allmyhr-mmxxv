# Changelog

All notable changes to the AllMyHR MMXXV theme will be documented in this file.

## [1.2.0] - 2026-01-13

### Added
- **Ask AllMyHR** - AI-powered HR Q&A chatbox page template
  - Users can select Federal or any US State jurisdiction
  - Submit HR-related questions (256 char limit)
  - Receive AI-generated responses via OpenAI ChatGPT API
  - Legal disclaimer appended to all responses
  - Session-based rate limiting (3 questions per session)
  - Gravity Form integration (ID 12) for lead capture
  - Hidden fields auto-populated with question, jurisdiction, and AI response
  - Redirect to `/confirmation-page` on form submission

### New Files
- `ask-aries.php` - Page template
- `template-parts/content-ask-aries.php` - Chat interface markup
- `js/ask-aries.js` - Frontend JavaScript (AJAX, validation, character counter)

### Technical
- OpenAI API integration with server-side requests (wp_remote_post)
- WordPress AJAX handlers for secure API communication
- Nonce verification for security
- Input sanitization and validation
- PHP session management for rate limiting

### Security
- API key stored as `ALLMYHR_OPENAI_API_KEY` constant in wp-config.php
- Server-side API calls only (key never exposed to frontend)
- Rate limiting prevents API abuse

---

## [1.1.0] - 2026-01-13

### Added
- **Buy Now functionality** on homepage product cards - clicking adds product to cart and redirects to checkout
- **Transient caching** for homepage product query (1-hour cache, auto-clears on product save)
- **YouTube facade pattern** - video iframe only loads when modal opens (improves page load)
- **CSS FAQ arrows** - replaced Lottie animations with lightweight CSS chevrons
- **Deferred analytics** - FullStory, GTM, and gtag now load in footer
- **Resource hints** - preconnect/dns-prefetch for third-party domains
- **WooCommerce checkout redirect** - all add-to-cart actions now redirect to checkout
- **CHANGELOG.md** - version history tracking

### Changed
- **Google Fonts** - switched from JavaScript WebFont loader to CSS preload (faster)
- **Product cards** - "Learn More" on archive pages, "Buy Now" on homepage only
- **Exit popup** - now uses `is_cart()` and `is_checkout()` functions instead of URL matching

### Fixed
- **Duplicate header call** - removed erroneous `get_header('shop')` from index.php
- **Duplicate testimonials** - removed second testimonials section from homepage
- **Exit popup on checkout** - popup no longer appears on cart/checkout pages

### Performance
- Reduced render-blocking scripts in `<head>`
- Eliminated 6 redundant Lottie JSON file loads
- Added transient caching for WooCommerce product queries

---

## [1.0.0] - Initial Release

- Base theme built on Underscores (_s)
- WooCommerce integration
- Webflow design implementation
- Custom product card templates
