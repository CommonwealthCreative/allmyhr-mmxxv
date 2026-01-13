## Relevant Files

- `index.php` - Homepage template; add the on-demand section after trusted container (line 138)
- `template-parts/content-ondemand-card.php` (new) - Product card template with Buy Now button for homepage
- `functions.php` - Add helper functions for buyable URL logic and flash notification system
- `woocommerce/archive-product.php` - Reference file for section structure (do not modify)
- `woocommerce/product-cards.php` - Reference file for existing product card structure (do not modify)

### Notes
- No automated tests configured for this project
- Test manually in local Docker environment before deploying to production
- The existing `mmxxv_force_checkout_redirect_for_add_to_cart_url()` function in `functions.php` already handles checkout redirect for `?add-to-cart` URLs

## Instructions for Completing Tasks

IMPORTANT: As you complete each task, you must check it off in this markdown file by changing `- [ ]` to `- [x]`.

## Tasks

- [ ] 0.0 Create feature branch
  - [ ] 0.1 Create and checkout a new branch named `feature/homepage-ondemand` from `develop`

- [ ] 1.0 Create the on-demand product card template with Buy Now functionality
  - [ ] 1.1 Create new file `template-parts/content-ondemand-card.php`
  - [ ] 1.2 Copy base structure from `woocommerce/product-cards.php` as starting point
  - [ ] 1.3 Create helper function `mmxxv_get_buyable_product_url()` in `functions.php` that:
    - Returns `/?add-to-cart={product_id}` for simple products
    - For variable products: finds default variation ID and returns `/?add-to-cart={variation_id}`
    - Falls back to product permalink if no default variation or out of stock
  - [ ] 1.4 Replace "Learn More" link with "Buy Now" button using the helper function
  - [ ] 1.5 Add `data-product-id` attribute to the Buy Now button
  - [ ] 1.6 Style the Buy Now button using existing `.btn` class

- [ ] 2.0 Add the on-demand section to the homepage
  - [ ] 2.1 In `index.php`, locate line 138 after `get_template_part('template-parts/content', 'trusted');`
  - [ ] 2.2 Add new `<section>` element with ID `ondemand` and classes `content-section bg-dkblue bg-gradientblack`
  - [ ] 2.3 Add container structure with heading "On-Demand HR Services" and subheading
  - [ ] 2.4 Add CTA buttons: "Schedule A Demo" and "Contact Us Today"
  - [ ] 2.5 Add product grid container with class `w-layout-layout wf-layout-layout`
  - [ ] 2.6 Add WP_Query loop to fetch products (exclude uncategorized category)
  - [ ] 2.7 Load `content-ondemand-card.php` template part for each product
  - [ ] 2.8 Add background jumbo text element ("On-Demand")
  - [ ] 2.9 Reset post data after loop with `wp_reset_postdata()`

- [ ] 3.0 Implement session flash notification system for checkout
  - [ ] 3.1 Create function `mmxxv_set_buynow_flash_message()` in `functions.php` to store product name in WC session
  - [ ] 3.2 Hook the function to `woocommerce_add_to_cart` action to capture product additions
  - [ ] 3.3 Create function `mmxxv_display_checkout_flash_message()` to display the flash message
  - [ ] 3.4 Hook display function to `woocommerce_before_checkout_form` action
  - [ ] 3.5 Clear the session variable after displaying the message
  - [ ] 3.6 Style the flash message to match WooCommerce notices or site aesthetic

- [ ] 4.0 Test and verify all functionality
  - [ ] 4.1 Verify on-demand section displays correctly after trusted container on homepage
  - [ ] 4.2 Verify all non-uncategorized products appear in the section
  - [ ] 4.3 Test "Buy Now" on a simple product - should add to cart and redirect to checkout
  - [ ] 4.4 Test "Buy Now" on a variable product with default variation - should add default variation and redirect
  - [ ] 4.5 Test "Buy Now" on a variable product without default/stock - should link to product page
  - [ ] 4.6 Verify flash notification appears on checkout page after clicking Buy Now
  - [ ] 4.7 Test mobile responsiveness of the on-demand section
  - [ ] 4.8 Check browser console for JavaScript errors
