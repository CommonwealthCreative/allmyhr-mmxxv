# PRD: Homepage On-Demand Section with Buy Now Functionality

## 1. Introduction/Overview

This feature adds the "On-Demand HR Services" product showcase section to the homepage, positioned immediately after the trusted companies carousel (`.trusted-container`). The section will display WooCommerce products with a streamlined "Buy Now" button that adds the product to the cart and redirects users directly to checkout. A session-based flash notification will confirm the action on the checkout page.

## 2. Goals

- Increase product visibility by featuring on-demand HR services directly on the homepage
- Reduce friction in the purchase flow by enabling one-click checkout from the homepage
- Provide clear user feedback when a product is added to cart via a flash message on checkout
- Maintain visual consistency with the existing shop archive page

## 3. User Stories

1. **As a visitor**, I want to see available on-demand HR services on the homepage so I can quickly understand what's offered without navigating to another page.

2. **As a potential customer**, I want to click "Buy Now" on a product and be taken directly to checkout so I can complete my purchase quickly.

3. **As a user**, I want to see a confirmation message on the checkout page so I know my product was successfully added to my cart.

4. **As a user viewing a variable product without available stock**, I want to be directed to the product page so I can see options or be notified of availability.

## 4. Functional Requirements

### 4.1 Section Placement
- The `.ondemand` section must be inserted into `index.php` immediately after the `get_template_part('template-parts/content', 'trusted');` call (line 138)
- The section should be wrapped in its own `<section>` element with appropriate classes

### 4.2 Section Structure
- Match the existing structure from `woocommerce/archive-product.php` lines 80-131:
  - Section ID: `ondemand`
  - Classes: `content-section bg-dkblue bg-gradientblack`
  - Heading: "On-Demand HR Services" with subheading
  - CTA buttons: "Schedule A Demo" and "Contact Us Today"
  - Product grid using `w-layout-layout wf-layout-layout`
  - Background jumbo text element

### 4.3 Product Query
- Display all published products excluding those in the "uncategorized" category
- Use the **exact same** `WP_Query` arguments as the archive page:
  ```php
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
  ```

### 4.4 Product Card Modification (Homepage Only)
- Create a new template part: `template-parts/content-ondemand-card.php` (or modify the loop inline)
- Replace the "Learn More" link with a "Buy Now" button
- The "Buy Now" button must:
  - Link to `/?add-to-cart={product_id}` for simple products
  - For variable products: link to `/?add-to-cart={default_variation_id}` using the product's default variation
  - Use class `btn w-button` or similar styled button class
  - Include a data attribute for the product ID: `data-product-id="{id}"`

### 4.5 Default Variation Logic
- For variable products, retrieve the default variation using:
  ```php
  $product->get_default_attributes()
  ```
- Find the matching variation ID using `WC_Product_Data_Store_CPT::find_matching_product_variation()`
- **Fallback behavior**: If no default variation is set, OR if the default variation is out of stock, link to the product page instead of the add-to-cart URL

### 4.6 Session Flash Notification on Checkout
- When a product is added via the "Buy Now" button, store a session flash message
- Display the flash message on the checkout page confirming: "{Product Name} has been added to your cart!"
- Implementation:
  - Set a transient or WC session variable when `?add-to-cart` is processed
  - Hook into checkout page to display the message (e.g., `woocommerce_before_checkout_form`)
  - Clear the flash message after displaying
- Style the flash message to match WooCommerce notices or the site's aesthetic

### 4.7 Styling
- No new CSS required for the section layout (reuse existing `.ondemand` styles)
- Flash notification styling:
  - Use existing WooCommerce notice styles (`.woocommerce-message`) or custom styling
  - Should be prominent but not obstructive
  - Match site color scheme (gradient highlight or blue theme)

## 5. Non-Goals (Out of Scope)

- Modifying the product cards on the shop archive page (`woocommerce/archive-product.php`)
- Adding quantity selectors to the homepage product cards
- Implementing a mini-cart or cart drawer
- Adding product filtering or sorting on the homepage section
- Modifying checkout flow or cart behavior beyond the existing redirect
- Changing the product query criteria (must match archive page exactly)

## 6. Design Considerations

- The "Buy Now" button should be visually distinct and action-oriented
- Consider using the existing `.btn` class with appropriate color variant (`.btn.wht` or gradient)
- Flash notification on checkout should integrate naturally with the page layout
- Mobile responsiveness must be maintained (test on various viewport sizes)

## 7. Technical Considerations

- **Template Organization**: Consider creating a dedicated template part for the homepage on-demand section to keep `index.php` clean
- **Performance**: The product query runs on every homepage load; consider transient caching if performance issues arise
- **Variable Products**: The default variation lookup adds complexity; ensure graceful fallback to product page if:
  - No default variation is configured
  - Default variation is out of stock
  - No variations are available
- **Session Storage**: Use WC()->session for flash messages to ensure compatibility with WooCommerce's session handling
- **Existing Function**: Leverage the existing `mmxxv_force_checkout_redirect_for_add_to_cart_url()` function which already handles the checkout redirect for `?add-to-cart` URLs

## 8. Success Metrics

- [ ] The on-demand section displays correctly on the homepage after the trusted container
- [ ] All non-uncategorized products appear in the section (same as archive page)
- [ ] Clicking "Buy Now" on a simple product adds it to cart and redirects to checkout
- [ ] Clicking "Buy Now" on a variable product adds the default variation to cart and redirects to checkout
- [ ] Variable products without stock or default variation link to product page instead
- [ ] A flash notification appears on the checkout page confirming the item was added
- [ ] The section styling matches the archive page exactly
- [ ] No JavaScript errors in the browser console
- [ ] Mobile responsive layout is maintained

## 9. Open Questions

*All questions have been resolved:*

1. ~~Should the toast notification persist across the redirect?~~ **RESOLVED**: Yes, use a session flash message displayed on the checkout page.

2. ~~What should happen if a variable product has no variations in stock?~~ **RESOLVED**: Fall back to linking to the product page.

3. ~~Should there be a limit on the number of products displayed?~~ **RESOLVED**: Use the same criteria as the product archive (all products, excluding uncategorized).

## 10. Implementation Notes

### Files to Create/Modify:
1. `index.php` - Add the on-demand section after trusted container
2. `template-parts/content-ondemand-card.php` (new) - Product card with "Buy Now" button
3. `functions.php` - Add flash message session logic and checkout display hook

### Key Functions to Implement:
1. `mmxxv_set_buynow_flash_message()` - Store product name in session when added via homepage
2. `mmxxv_display_checkout_flash_message()` - Display and clear the flash message on checkout
3. `mmxxv_get_buyable_product_url()` - Helper to determine correct URL (add-to-cart or product page)
