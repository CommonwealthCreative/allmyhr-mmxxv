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
			if ( is_home() || is_page_template( 'homealt.php' )) { echo 'data-wf-page="67b4f78ed1034a4efbd4393f"'; } 
			if ( is_search() ) { echo 'data-wf-page="67741e41160207547be4c674"'; } 
			if ( is_page_template( array('landing-orange.php', 'landing-lh-demo.php', 'landing-lh-product.php',
) ) ) {
    echo 'data-wf-page="6880fcf901584b475e7a721a"';
}

			if ( is_post_type_archive('product') || is_tax('product_cat') || is_tax('product_tag') || is_archive() ) { echo 'data-wf-page="67b79103fab81b124f3e27f5"'; }
			
			else { echo 'data-wf-page="67b77370aa4177e837b7eaf4"';} ?> 
			
			data-wf-site="67b4f78dd1034a4efbd43935">
			<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5HDR3FSV');</script>
<!-- End Google Tag Manager -->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:100,300,regular,500,700,900,100italic,300italic,italic,500italic,700italic,900italic","Nunito:200,regular,700,900,200italic,italic,700italic,900italic"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="/wp-content/themes/allmyhr-mmxxv/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="/wp-content/themes/allmyhr-mmxxv/images/webclip.png" rel="apple-touch-icon">
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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="ns "
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
