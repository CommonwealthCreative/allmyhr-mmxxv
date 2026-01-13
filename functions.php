<?php
/**
 * allmyhr-mmxxv functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package allmyhr-mmxxv
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.1.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function allmyhr_mmxxv_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on allmyhr-mmxxv, use a find and replace
		* to change 'allmyhr-mmxxv' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'allmyhr-mmxxv', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'allmyhr-mmxxv' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'allmyhr_mmxxv_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'allmyhr_mmxxv_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function allmyhr_mmxxv_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'allmyhr_mmxxv_content_width', 640 );
}
add_action( 'after_setup_theme', 'allmyhr_mmxxv_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function allmyhr_mmxxv_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'allmyhr-mmxxv' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'allmyhr-mmxxv' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'allmyhr_mmxxv_widgets_init' );


function load_google_jquery() {
    if (!is_admin()) { // Don't override jQuery in the WordPress admin panel
        wp_deregister_script('jquery'); // Remove default WP jQuery
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), '3.6.4', true);
        wp_enqueue_script('jquery'); // Load Google's jQuery
    }
}
add_action('wp_enqueue_scripts', 'load_google_jquery');


/**
 * Enqueue scripts and styles.
 */
function allmyhr_mmxxv_scripts() {
    // Enqueue Normalize first (base styles)
    wp_enqueue_style('normalize-styles', get_template_directory_uri() . '/css/normalize.css', array(), '1.0.0', 'all');

    // Enqueue Webflow styles next
    wp_enqueue_style('webflow-styles', get_template_directory_uri() . '/css/webflow.css', array('normalize-styles'), '1.0.0', 'all');

    // Enqueue all-my-hr.webflow.css LAST to override Webflow styles
    wp_enqueue_style('mmxxv-styles', get_template_directory_uri() . '/css/all-my-hr.webflow.css', array('webflow-styles'), '1.0.0', 'all');

    // Enqueue theme's primary stylesheet last (if needed)
    wp_enqueue_style('allmyhr-mmxxv-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('allmyhr-mmxxv-style', 'rtl', 'replace');

    // Enqueue scripts
    wp_enqueue_script('webflow-js', get_template_directory_uri() . '/js/webflow.js', array('jquery'), '1.0.0', true);

    // Enqueue comment-reply script if needed
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'allmyhr_mmxxv_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Woocommerce Support
 */

function mmxxv_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mmxxv_add_woocommerce_support' );

/**
 * MMXVV Footer Widgets
 */

 function mmxxv_register_footer_widgets() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Left (Company)', 'allmyhr-mmxxv'),
        'id'            => 'footer-widget-left',
        'description'   => esc_html__('Add widgets here for the left footer section.', 'allmyhr-mmxxv'),
        'before_widget' => '<div class="footer-widget footer-widget-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Right (Quick Links)', 'allmyhr-mmxxv'),
        'id'            => 'footer-widget-right',
        'description'   => esc_html__('Add widgets here for the right footer section.', 'allmyhr-mmxxv'),
        'before_widget' => '<div class="footer-widget footer-widget-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mmxxv_register_footer_widgets');

/**
 * Call a product anywhere by ID	
 */
function mmxxv_product_tab_card( $product_id ) {
    if ( ! $product_id ) {
        return;
    }
    
    // Use a dedicated query to isolate the product.
    $args = array(
        'p'         => $product_id,
        'post_type' => 'product',
    );
    $custom_query = new WP_Query( $args );
    
    if ( ! $custom_query->have_posts() ) {
        echo 'Product not found.';
        return;
    }
    
    while ( $custom_query->have_posts() ) {
        $custom_query->the_post();
        
        // Get the product object.
        $current_product = wc_get_product( $product_id );
        if ( ! $current_product ) {
            echo 'Product not found.';
            return;
        }
        
        // Retrieve dynamic values.
        $title        = get_the_title();
        $product_link = get_permalink();
        $price_html   = $current_product->get_price_html();
        
        echo '<div data-w-id="01359f47-5257-5e6d-ef23-984a4434e930" class="card lite w-inline-block">';
            
            // Product details: image and title (wrapped in a link).
            echo '<div class="w-layout-hflex phrases hr">';
                echo '<a class="card-tab-title highlight txt" href="' . esc_url( $product_link ) . '">';
                    echo '<img loading="lazy" src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-logo.svg" alt="" class="headlineicon">';
                    echo '<h2>' . esc_html( $title ) . '</h2>';
                echo '</a>';
				echo '<h3 class="fa move highlight txt">&#x279C;</h3>';
            echo '</div>';
            
            // Crumb text.
            echo '<div class="crumb">';
                echo  '<p>AllMyHR provides businesses with a complete HR compliance and management solution, combining expert guidance, up-to-date labor law resources, and essential HR tools in one platform. It helps organizations streamline HR processes, reduce compliance risks, and stay informed with the latest regulatory updates.</p>';
            echo '</div>';
            
            // HR section with bullet items.
            echo '<div class="hr">';
                echo '<div class="w-layout-hflex bullet">';
                    echo '<div class="crumb"><span class="fa highlight blu txt"></span></div>';

                    echo '<h4 class="crumb"><b>All-in-One HR Management Platform</b> – Streamline employee management, policies, and documentation with a centralized, user-friendly system.</h4>';
                echo '</div>';
                echo '<div class="w-layout-hflex bullet">';
                    echo '<div class="crumb"><span class="fa highlight blu txt"></span></div>';
                    echo '<h4 class="crumb"><b>Comprehensive HR Compliance & Support</b> – Access expert guidance, labor law updates, and compliance tools to mitigate risks and ensure regulatory adherence.</h4>';
                echo '</div>';
                echo '<div class="w-layout-hflex bullet">';
                    echo '<div class="crumb"><span class="fa highlight blu txt"></span></div>';
                    echo '<h4 class="crumb"><b>Continuous Updates & Expert Insights</b> – Stay ahead of HR regulations with real-time updates, training resources, and expert-backed insights.</h4>';
                echo '</div>';
            echo '</div>';
            
            // Interactive add-to-cart section.
            echo '<div class="card-tab-variations">';
			echo '<h3 class="price">' . $price_html . '</h3>';
                
                // WooCommerce variable product logic.
                if ( $current_product->is_type( 'variable' ) ) {
                    wp_enqueue_script( 'wc-add-to-cart-variation' );
                    ob_start();
                    wc_get_template( 'single-product/add-to-cart/variable.php', array(
                        'available_variations' => $current_product->get_available_variations(),
                        'attributes'           => $current_product->get_variation_attributes(),
                        'selected_attributes'  => $current_product->get_default_attributes(),
                        'product'              => $current_product,
                    ) );
                    $add_to_cart_form = ob_get_clean();

                    // Replace the button class.
                    $add_to_cart_form = str_replace( 
                        'single_add_to_cart_button button alt', 
                        'btn', 
                        $add_to_cart_form 
                    );

                    echo $add_to_cart_form;
                } else {
                    // For simple products.
                    ob_start();
                    woocommerce_template_single_add_to_cart();
                    $add_to_cart_button = ob_get_clean();
                    
                    // Replace the button class.
                    $add_to_cart_button = str_replace( 
                        'single_add_to_cart_button button alt', 
                        'btn', 
                        $add_to_cart_button 
                    );

                    echo $add_to_cart_button;
                }
                
            echo '</div>'; // close card-tab-variations
            
        echo '</div>'; // close card container
    }
    
    wp_reset_postdata();
    ?>
    <script type="text/javascript">
    jQuery(document).on('found_variation', '.variations_form', function(event, variation) {
         // Update the price inside the closest card container.
         jQuery(this).closest('.card').find('.price').html(variation.price_html);
    });
    </script>
    <?php
}
add_action( 'mmxxv_product_tab_card_hook', 'mmxxv_product_tab_card', 10, 1 );

/**
 * Woocommerce Cart Count
 */

function mmxxv_cart_item_count() {
    if ( function_exists( 'WC' ) && WC()->cart ) {
        $cart_count = WC()->cart->get_cart_contents_count();
    } else {
        $cart_count = 0; 
    }

    echo '<a href="' . esc_url( wc_get_cart_url() ) . '" class="nav-link cart w-nav-link">
            ( ' . esc_html( $cart_count ) . ' ) <span class="fa"></span>
          </a>';
}

function cc_insert_checkout_login_message( $content ) {
    if ( is_checkout() && has_block( 'woocommerce/checkout', $content ) ) {

        ob_start();

        echo '<div class="woocommerce-info cc-checkout-login-notice" style="margin-bottom:2rem;">';

        if ( is_user_logged_in() ) {
            $current_user = wp_get_current_user();
            $account_url  = wc_get_page_permalink( 'myaccount' );

            echo 'You are logged in as <strong>' . esc_html( $current_user->display_name ) . '</strong>. ';
            echo '<a href="' . esc_url( $account_url ) . '" style="text-decoration: underline;">Account Details</a>';
        } else {
            echo 'If you are an existing or previous customer, ';
            echo '<a href="#" class="cc-toggle-login" style="text-decoration: underline;">please login to your account</a>.';
            echo '<div class="cc-checkout-login-form" style="margin-top:1rem; display:none;">';
            echo '<form method="post" action="' . esc_url( wp_login_url( wc_get_checkout_url() ) ) . '">';
            echo '<input type="text" name="log" placeholder="Username or email" style="display:block; margin-bottom:1rem; padding:0.5rem; width:100%; max-width:300px;">';
            echo '<input type="password" name="pwd" placeholder="Password" style="display:block; margin-bottom:1rem; padding:0.5rem; width:100%; max-width:300px;">';
            echo '<button type="submit" class="button" style="padding:0.5rem 1rem;">Login</button>';
            echo '</form></div>';
        }

        echo '</div>';

        if ( ! is_user_logged_in() ) {
            echo '<script>
                document.addEventListener("DOMContentLoaded", function () {
                    const toggle = document.querySelector(".cc-toggle-login");
                    const form = document.querySelector(".cc-checkout-login-form");
                    if (toggle && form) {
                        toggle.addEventListener("click", function(e) {
                            e.preventDefault();
                            form.style.display = form.style.display === "block" ? "none" : "block";
                        });
                    }
                });
            </script>';
        }

        $notice = ob_get_clean();

        return $notice . $content;
    }

    return $content;
}
add_filter( 'the_content', 'cc_insert_checkout_login_message', 1 );

// Display alert at the top using WooCommerce hook
add_action( 'woocommerce_before_thankyou', 'allmyhr_thankyou_account_alert_top', 1 );
function allmyhr_thankyou_account_alert_top( $order_id ) {
    if ( ! $order_id ) return;
    echo allmyhr_account_alert_html();
}

// Display alert at the bottom using output buffer on the thank you page
add_filter( 'the_content', 'allmyhr_thankyou_account_alert_bottom' );
function allmyhr_thankyou_account_alert_bottom( $content ) {
    if ( ! is_order_received_page() ) return $content;
    if ( strpos( $content, 'allmyhr-thankyou-bottom-alert' ) !== false ) return $content;
    return $content . allmyhr_account_alert_html( true );
}

// The alert HTML used in both places; bottom includes the Gravity Form shortcode
function allmyhr_account_alert_html( $is_bottom = false ) {
    $classes   = 'woocommerce-error allmyhr-thankyou-' . ( $is_bottom ? 'bottom' : 'top' ) . '-alert';
    $message   = 'Almost done. ';
    $link_text = 'Click Here to complete your New Client Setup Form';

    if ( $is_bottom ) {
        $link_url    = '#account-setup-image';
        $link_target = '';
        $extra_html  = do_shortcode( '[gravityform id="10" description="false"]' );
    } else {
        $link_url    = 'https://allmyhr.com/account-set-up-form/';
        $link_target = ' target="_blank"';
        $extra_html  = '';
    }

    $alert  = '<ul class="' . esc_attr( $classes ) . '" role="alert" style="margin:2rem 0;list-style:none;font-size:150%;color:red;">';
    $alert .= '<li><b>' . esc_html( $message );
    $alert .= '<a href="' . esc_url( $link_url ) . '" style="color:red;text-decoration:underline;"' . $link_target . '>';
    $alert .= esc_html( $link_text ) . '</a></b></li>';
    $alert .= '</ul>';

    return $extra_html . $alert;
}


// Force redirect to checkout when ?add-to-cart is used (URL-based)
function mmxxv_force_checkout_redirect_for_add_to_cart_url() {
    if ( is_admin() || is_ajax() ) {
        return;
    }

    if ( isset( $_GET['add-to-cart'] ) && ! is_checkout() ) {
        wp_safe_redirect( wc_get_checkout_url() );
        exit;
    }
}
add_action( 'template_redirect', 'mmxxv_force_checkout_redirect_for_add_to_cart_url', 20 );

// Redirect to checkout after adding product to cart (form-based on product pages)
add_filter( 'woocommerce_add_to_cart_redirect', 'mmxxv_redirect_to_checkout_after_add_to_cart' );
function mmxxv_redirect_to_checkout_after_add_to_cart( $url ) {
    return wc_get_checkout_url();
}

// Modify WooCommerce empty cart block message to include homepage link
add_filter( 'render_block', 'allmyhr_custom_empty_cart_block', 10, 2 );
function allmyhr_custom_empty_cart_block( $block_content, $block ) {
    // Target the Cart block
    if ( isset( $block['blockName'] ) && 'woocommerce/cart' === $block['blockName'] ) {
        // Replace the empty-cart title H2
        $pattern = '/<h2[^>]*wc-block-cart__empty-cart__title[^>]*>.*?<\/h2>/i';
        $replacement = '<h2 class="wp-block-heading has-text-align-center with-empty-cart-icon wc-block-cart__empty-cart__title">'
                     . 'Your cart is empty. Return to the <a href="' . esc_url( home_url() ) . '">homepage</a>.'
                     . '</h2>';
        $block_content = preg_replace( $pattern, $replacement, $block_content, 1 );
    }
    return $block_content;
}

add_action( 'wp_footer', 'cc_replace_subscription_labels_js', 25 );
function cc_replace_subscription_labels_js() {
    if ( ! function_exists( 'is_checkout' ) || ! is_checkout() ) {
        return;
    }
    ?>
    <script>
    ( () => {
        // Walk an element’s text nodes and swap only the raw “every month”/“every year” text.
        const replaceInTextNodes = (el) => {
            el.childNodes.forEach(node => {
                if ( node.nodeType === Node.TEXT_NODE ) {
                    const updated = node.textContent
                        .replace(/\bevery month\b/gi, 'Monthly')
                        .replace(/\bevery year\b/gi,  'Annually');
                    if ( updated !== node.textContent ) {
                        node.textContent = updated;
                    }
                } else if ( node.nodeType === Node.ELEMENT_NODE ) {
                    replaceInTextNodes(node);
                }
            });
        };

        // Target the places we know “every month”/“every year” shows up
        const replaceAll = () => {
            document.querySelectorAll(
                '.wc-block-components-order-summary-item__individual-prices, ' +
                '.wc-block-components-order-summary-item__total-price, ' +
                '.wc-block-components-totals-item__label'
            ).forEach(el => replaceInTextNodes(el));
        };

        // Run once on load…
        document.addEventListener('DOMContentLoaded', replaceAll);
        // …and again whenever Blocks re-renders parts of the sidebar
        new MutationObserver(replaceAll)
            .observe(document.body, { childList: true, subtree: true });
    })();
    </script>
    <?php
}

add_filter( 'gettext', 'custom_rename_signup_fee_text', 20, 3 );
function custom_rename_signup_fee_text( $translated_text, $text, $domain ) {
    if ( 'woocommerce-subscriptions' === $domain && trim( $text ) === 'Sign-up fee' ) {
        return 'Setup Fee';
    }

    // Fallback for other domains or capitalizations
    if ( trim( $text ) === 'Sign-up fee' || trim( $text ) === 'Sign up fee' ) {
        return 'Setup Fee';
    }

    return $translated_text;
}

add_filter( 'woocommerce_subscriptions_product_price_string', function( $price_string, $product ) {
    if ( strpos( $price_string, 'Sign-up fee' ) !== false ) {
        $price_string = str_replace( 'Sign-up fee', 'Setup Fee', $price_string );
    } elseif ( strpos( $price_string, 'Sign up fee' ) !== false ) {
        $price_string = str_replace( 'Sign up fee', 'Setup Fee', $price_string );
    }
    return $price_string;
}, 20, 2 );

add_action('wp_footer', function () {
    if (! (is_cart() || is_checkout())) return;

    $targets = [];
    if (WC()->cart) {
        foreach (WC()->cart->get_cart() as $ci) {
            if ((int) $ci['product_id'] === 30702) {
                $targets[] = wp_strip_all_tags($ci['data']->get_name());
            }
        }
    }
    if (empty($targets)) return;

    ?>
    <style>
      .cc-hide-30702 .wc-block-components-order-summary-item__individual-prices { display:none !important; }
      .cc-hide-30702 .wc-block-components-product-details__free-trial,
      .cc-hide-30702 .wc-block-components-product-details__setup-fee { display:none !important; }
    </style>
    <script>
      (function(){
        var targetNames = <?php echo wp_json_encode(array_values(array_unique($targets))); ?>;

        function norm(t){ return (t || '').replace(/\s+/g,' ').trim(); }

        function flagRows(){
          document.querySelectorAll('.wc-block-components-order-summary-item').forEach(function(row){
            var nameEl = row.querySelector('.wc-block-components-product-name');
            if (!nameEl) return;
            var name = norm(nameEl.textContent);
            if (targetNames.some(function(n){ return norm(n) === name; })) {
              row.classList.add('cc-hide-30702');

              var ind = row.querySelector('.wc-block-components-order-summary-item__individual-prices');
              if (ind) ind.remove();

              row.querySelectorAll('.wc-block-components-product-details__free-trial, .wc-block-components-product-details__setup-fee')
                 .forEach(function(li){ li.remove(); });
            }
          });
        }

        if (document.readyState === 'loading') {
          document.addEventListener('DOMContentLoaded', flagRows);
        } else {
          flagRows();
        }

        new MutationObserver(flagRows).observe(document.body, {childList:true, subtree:true});
      })();
    </script>
    <?php
});

// Exit Intent Popup - exclude from cart/checkout pages
add_action('wp_footer', function () {
    if (is_admin()) return;
    if (wp_doing_ajax()) return;
    if (defined('REST_REQUEST') && REST_REQUEST) return;

    // Use WooCommerce conditionals - more reliable than URL matching
    if ( function_exists('is_cart') && is_cart() ) return;
    if ( function_exists('is_checkout') && is_checkout() ) return;

    get_template_part('template-parts/exit');
}, 9999);

/**
 * Deferred Analytics Scripts (FR-4)
 * Loads FullStory, GTM, and gtag in footer for better page performance
 */
add_action('wp_footer', 'allmyhr_deferred_analytics_scripts', 100);
function allmyhr_deferred_analytics_scripts() {
    if (is_admin()) return;
    ?>
    <!-- FullStory (deferred) -->
    <script>
    window['_fs_host'] = 'fullstory.com';
    window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
    window['_fs_org'] = 'o-23CB24-na1';
    window['_fs_namespace'] = 'FS';
    !function(m,n,e,t,l,o,g,y){var s,f,a=function(h){
    return!(h in m)||(m.console&&m.console.log&&m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].'),!1)}(e)
    ;function p(b){var h,d=[];function j(){h&&(d.forEach((function(b){var d;try{d=b[h[0]]&&b[h[0]](h[1])}catch(h){return void(b[3]&&b[3](h))}
    d&&d.then?d.then(b[2],b[3]):b[2]&&b[2](d)})),d.length=0)}function r(b){return function(d){h||(h=[b,d],j())}}return b(r(0),r(1)),{
    then:function(b,h){return p((function(r,i){d.push([b,h,r,i]),j()}))}}}a&&(g=m[e]=function(){var b=function(b,d,j,r){function i(i,c){
    h(b,d,j,i,c,r)}r=r||2;var c,u=/Async$/;return u.test(b)?(b=b.replace(u,""),"function"==typeof Promise?new Promise(i):p(i)):h(b,d,j,c,c,r)}
    ;function h(h,d,j,r,i,c){return b._api?b._api(h,d,j,r,i,c):(b.q&&b.q.push([h,d,j,r,i,c]),null)}return b.q=[],b}(),y=function(b){function h(h){
    "function"==typeof h[4]&&h[4](new Error(b))}var d=g.q;if(d){for(var j=0;j<d.length;j++)h(d[j]);d.length=0,d.push=h}},function(){
    (o=n.createElement(t)).async=!0,o.crossOrigin="anonymous",o.src="https://"+l,o.onerror=function(){y("Error loading "+l)}
    ;var b=n.getElementsByTagName(t)[0];b&&b.parentNode?b.parentNode.insertBefore(o,b):n.head.appendChild(o)}(),function(){function b(){}
    function h(b,h,d){g(b,h,d,1)}function d(b,d,j){h("setProperties",{type:b,properties:d},j)}function j(b,h){d("user",b,h)}function r(b,h,d){j({
    uid:b},d),h&&j(h,d)}g.identify=r,g.setUserVars=j,g.identifyAccount=b,g.clearUserCookie=b,g.setVars=d,g.event=function(b,d,j){h("trackEvent",{
    name:b,properties:d},j)},g.anonymize=function(){r(!1)},g.shutdown=function(){h("shutdown")},g.restart=function(){h("restart")},
    g.log=function(b,d){h("log",{level:b,msg:d})},g.consent=function(b){h("setIdentity",{consent:!arguments.length||b})}}(),s="fetch",
    f="XMLHttpRequest",g._w={},g._w[f]=m[f],g._w[s]=m[s],m[s]&&(m[s]=function(){return g._w[s].apply(this,arguments)}),g._v="2.0.0")
    }(window,document,window._fs_namespace,"script",window._fs_script);
    </script>
    
    <!-- Google Tag Manager (deferred) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5HDR3FSV');</script>
    
    <!-- Google Analytics gtag (deferred) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KG495602JF"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-KG495602JF');
    </script>
    <?php
}

/**
 * Clear homepage product cache when products are updated (FR-8)
 */
add_action('save_post_product', 'allmyhr_clear_homepage_product_cache');
function allmyhr_clear_homepage_product_cache($post_id) {
    delete_transient('allmyhr_homepage_products');
}












































