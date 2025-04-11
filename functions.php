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
	define( '_S_VERSION', '1.0.0' );
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
 * Woocommerce Send to Cart
 */

 function mmxxv_redirect_to_checkout_on_add_to_cart( $url ) {
    if ( WC()->cart ) {
        remove_filter('woocommerce_add_to_cart_redirect', '__return_false'); // Prevent WooCommerce from overriding redirect behavior
        return wc_get_checkout_url(); // Redirect to checkout while keeping cart items
    }
    return $url;
}
add_filter( 'woocommerce_add_to_cart_redirect', 'mmxxv_redirect_to_checkout_on_add_to_cart' );


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

// Display alert at the top of the thank you page
add_action( 'woocommerce_before_thankyou', 'allmyhr_thankyou_account_alert_top', 1 );
function allmyhr_thankyou_account_alert_top( $order_id ) {
	if ( ! $order_id ) return;
	echo allmyhr_account_alert_html();
}

// Display alert at the bottom using output buffer on the thank you page
add_filter( 'the_content', 'allmyhr_thankyou_account_alert_bottom' );
function allmyhr_thankyou_account_alert_bottom( $content ) {
	if ( ! is_order_received_page() ) return $content;

	// Append alert only once
	if ( strpos( $content, 'allmyhr-thankyou-bottom-alert' ) !== false ) return $content;

	return $content . allmyhr_account_alert_html( true );
}

// The alert HTML used in both places
function allmyhr_account_alert_html( $is_bottom = false ) {
	$classes = 'woocommerce-error allmyhr-thankyou-' . ( $is_bottom ? 'bottom' : 'top' ) . '-alert';
	$message = 'Almost done. ';
	$link_text = 'Click Here to complete your New Client Setup Form';
	$link_url = 'https://allmyhr.com/account-set-up-form/';

	return '<ul class="' . esc_attr( $classes ) . '" role="alert" style="margin: 2rem 0; list-style: none; font-size: 150%; color: red;">'
	     . '<li><b>' . esc_html( $message ) . '<a href="' . esc_url( $link_url ) . '" style="color: red; text-decoration: underline;" target="_blank">' . esc_html( $link_text ) . '</a></b></li>'
	     . '</ul>';
}




































