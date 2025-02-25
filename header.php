<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package allmyhr-mmxxv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>
	<?php 
			if ( is_home()) { echo 'data-wf-page="67b4f78ed1034a4efbd4393f"'; } 
			if ( is_search() ) { echo 'data-wf-page="67741e41160207547be4c674"'; } 
			if ( is_post_type_archive('product') || is_tax('product_cat') || is_tax('product_tag') || is_archive() ) { echo 'data-wf-page="67b79103fab81b124f3e27f5"'; }
			
			else { echo 'data-wf-page="67b77370aa4177e837b7eaf4"';} ?> 
			
			data-wf-site="67b4f78dd1034a4efbd43935">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:100,300,regular,500,700,900,100italic,300italic,italic,500italic,700italic,900italic","Nunito:200,regular,700,900,200italic,italic,700italic,900italic"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="/wp-content/themes/allmyhr-mmxxv/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="/wp-content/themes/allmyhr-mmxxv/images/webclip.png" rel="apple-touch-icon">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'allmyhr-mmxxv' ); ?></a>

	<header id="masthead" class="site-header">
	<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" data-doc-height="1" role="banner" class="navbar w-nav">
    <div class="menu-button w-nav-button">
      <div class="icon w-icon-nav-menu"></div>
    </div>
    <div class="container nav">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-info w-nav-brand"><img src="/wp-content/themes/allmyhr-mmxxv/images/allmyhr-logo.svg" loading="lazy" alt="" class="site-logo">
        <div class="site-title">AllMyHR</div>
      </a>
      <div class="mobile-cart w-nav-link"><?php mmxxv_cart_item_count(); ?></div>
      <nav role="navigation" class="nav-menu w-nav-menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'menu-1',
						'menu_id'         => 'primary-menu',
						'container'       => 'div', 
						'container_class' => 'mmxxv-nav',
						'items_wrap'      => '<ul class="nav-list">%3$s</ul>',
						'link_before'     => '<span class="nav-link w-nav-link">',
						'link_after'      => '</span>',
					)
				);

			?>

		<?php mmxxv_cart_item_count(); ?>

        <a href="/services/" class="nav-link btn w-nav-link">Get Started</a>
      </nav>
    </div>
  </div>
	</header><!-- #masthead -->
