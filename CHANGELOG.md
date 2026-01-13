# Changelog

All notable changes to the AllMyHR MMXXV theme will be documented in this file.

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
