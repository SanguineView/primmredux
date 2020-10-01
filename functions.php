<?php
/**
 * Genesis Sample.
 *
 * This file adds functions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up the Theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

add_action( 'after_setup_theme', 'genesis_sample_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function genesis_sample_localization_setup() {

	load_child_theme_textdomain( genesis_get_theme_handle(), get_stylesheet_directory() . '/languages' );

}

// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * @since 2.7.0
 */
function genesis_child_gutenberg_support() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
	require_once get_stylesheet_directory() . '/lib/gutenberg/init.php';
}

// Registers the responsive menus.
if ( function_exists( 'genesis_register_responsive_menus' ) ) {
	genesis_register_responsive_menus( genesis_get_config( 'responsive-menus' ) );
}

add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function genesis_sample_enqueue_scripts_styles() {

	$appearance = genesis_get_config( 'appearance' );

	wp_enqueue_style(
		genesis_get_theme_handle() . '-fonts',
		$appearance['fonts-url'],
		[],
		genesis_get_theme_version()
	);

	wp_enqueue_style( 'dashicons' );

	if ( genesis_is_amp() ) {
		wp_enqueue_style(
			genesis_get_theme_handle() . '-amp',
			get_stylesheet_directory_uri() . '/lib/amp/amp.css',
			[ genesis_get_theme_handle() ],
			genesis_get_theme_version()
		);
	}

}

add_action( 'after_setup_theme', 'genesis_sample_theme_support', 9 );
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_sample_theme_support() {

	$theme_supports = genesis_get_config( 'theme-supports' );

	foreach ( $theme_supports as $feature => $args ) {
		add_theme_support( $feature, $args );
	}

}

add_action( 'after_setup_theme', 'genesis_sample_post_type_support', 9 );
/**
 * Add desired post type supports.
 *
 * See config file at `config/post-type-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_sample_post_type_support() {

	$post_type_supports = genesis_get_config( 'post-type-supports' );

	foreach ( $post_type_supports as $post_type => $args ) {
		add_post_type_support( $post_type, $args );
	}

}

// Adds image sizes.
add_image_size( 'sidebar-featured', 75, 75, true );
add_image_size( 'genesis-singular-images', 702, 526, true );

// Removes header right widget area.
unregister_sidebar( 'header-right' );

// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 10 );

add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 2.2.3
 *
 * @param array $args Original menu options.
 * @return array Menu options with depth set to 1.
 */
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' === $args['theme_location'] ) {
		$args['depth'] = 1;
	}

	return $args;

}

add_filter( 'genesis_author_box_gravatar_size', 'genesis_sample_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 2.2.3
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function genesis_sample_author_box_gravatar( $size ) {

	return 90;

}

add_filter( 'genesis_comment_list_args', 'genesis_sample_comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 2.2.3
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function genesis_sample_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;
	return $args;



}

add_action( 'wp_enqueue_scripts', 'tpc_scripts_styles', 20 );

function tpc_scripts_styles() {

	wp_enqueue_style( 'tpc-animisition-css', get_stylesheet_directory_uri() . '/assets/css/animsition.min.css', array()  );

	// Enqueue theme scripts.
	wp_enqueue_script( 'tpc-overlay-js', get_stylesheet_directory_uri() . '/assets/js/classie.js', array( 'jquery' ), true );
	wp_enqueue_script( 'tpc-overlay-js-two', get_stylesheet_directory_uri() . '/assets/js/overlay-push.js', array( 'jquery' ), true );
	wp_enqueue_script( 'tpc-nav-respond', get_stylesheet_directory_uri() . '/assets/js/nav-main.js', array( 'jquery' ), true );

}


// Add div.wrap inside of div#inner for page load transition
function child_before_content_sidebar_wrap() {
    echo '<div class="animsition">';
}
add_action( 'genesis_before_header', 'child_before_content_sidebar_wrap', 10);

function child_after_content_sidebar_wrap() {
    echo '</div><!-- end .wrap -->';
}
add_action( 'genesis_after', 'child_after_content_sidebar_wrap' );



// BEFORE HEADER AREA
function tpc_before_header_items() {
	?>
		<section class="before-header">
			<div class="wrap">
				<div class="block w-40">
					<p>Welcome to Primm Advertising</p>
				</div>
				<div class="block w-60">
					<ul>
						<li class="email"><a href="mailto:info@primmco.com">info@primmco.com</a></li>
						<li><a href="https://www.facebook.com/PrimmAdvertising/"><i class="icon ion-social-facebook"></i></a></li>
						<li><a href="https://twitter.com/primmco"><i class="icon ion-social-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/primmadvertising/"><i class="icon ion-social-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/user/Primmco/feed"><i class="icon ion-social-youtube"></i></a></li>
						<li><a href="http://www.linkedin.com/company/the-primm-company"><i class="icon ion-social-linkedin"></i></a></li>
						<li><a href="tel:17576236234" class="button"><ion-icon name="call"></ion-icon>1 (757) 623-6234</a></li>
					</ul>
				</div>
			</div>
		</section>
	<?php
}
add_action( 'genesis_before_header', 'tpc_before_header_items', 20 );

add_action('genesis_before', 'tas_mobile_nav', 10);
function tas_mobile_nav() {
	   ?>

	  <ul class="nav-items"><li><a class="nav-primary-nav-trigger" href="#"><span class="nav-menu-icon"></span></a></li></ul>

	   <?php
}

//* Mobile Overlay Nav
add_action('genesis_after_header', 'tas_mobile_menu_nav', 5);
function tas_mobile_menu_nav() {

 ?>
 	<nav>
		<div class="nav-primary-nav">
			<ul class="nav-menu">
					<li class="digital">
						<a href="<?php echo get_site_url(); ?>/online-advertising/" itemprop="url"><span itemprop="name">Digital</span></a>
					</li>
					<li class="video">
						<a href="<?php echo get_site_url(); ?>/video-production/" itemprop="url"><span itemprop="name">Video</span></a>
					</li>
					<li class="print">
						<a href="<?php echo get_site_url(); ?>/print/" itemprop="url"><span itemprop="name">Print</span></a>
					</li>
					<li class="web">
						<a href="<?php echo get_site_url(); ?>/web-design/" itemprop="url"><span itemprop="name">Web</span></a>
					</li>
					<li class="broadcast">
						<a href="<?php echo get_site_url(); ?>/social-media/" itemprop="url"><span itemprop="name">Social Media</span></a>
					</li>
					<li class="social-media">
						<a href="<?php echo get_site_url(); ?>/media-planning/" itemprop="url"><span itemprop="name">Media</span></a>
					</li>
					<li class="social">
						<a href="<?php echo get_site_url(); ?>/seo/" itemprop="url"><span itemprop="name">SEO</span></a>
						<ul class="submen">
							<li class="sub">
									<a href="<?php echo get_site_url(); ?>/who-we-are/" itemprop="url"><span itemprop="name">Who We Are</span></a>
							</li>
	 						<li class="sub">
								<a href="<?php echo get_site_url(); ?>/our-work/" itemprop="url"><span itemprop="name">Our Work</span></a>
							</li>
		 					<li class="sub">
								<a href="<?php echo get_site_url(); ?>/contact/" itemprop="url"><span itemprop="name">Contact</span></a>
							</li>
				</ul>
				</li><li class="social social-links"><a href="https://www.facebook.com/PrimmAdvertising/"><i class="icon ion-social-facebook"></i></a></li>
				<li class="social social-links"><a href="https://twitter.com/primmco"><i class="icon ion-social-twitter"></i></a></li>
				<li class="social social-links"><a href="https://www.instagram.com/primmadvertising/"><i class="icon ion-social-instagram"></i></a></li>
				<li class="social social-links"><a href="https://www.youtube.com/user/Primmco/feed"><i class="icon ion-social-youtube"></i></a></li>
				<li class="social social-links"><a href="http://www.linkedin.com/company/the-primm-company"><i class="icon ion-social-linkedin"></i></a></li>
			</ul>
		</div>
 	</nav>
<?php

}


remove_action('genesis_footer', 'genesis_do_footer');
remove_action('genesis_footer', 'genesis_footer_markup_open', 5);
remove_action('genesis_footer', 'genesis_footer_markup_close', 15);

//Site Footer Nav
add_action('genesis_after_footer', 'tpc_footer');
function tpc_footer() {
	?>
	<footer class="site-footer-two">
		<div class="site-footer-two__container">
			<a href="<?php echo get_site_url(); ?>" class="brand footer-brand"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/logo.png" /></a>
			<ul class="site-footer-two__social-links">
					<li><a href="https://www.facebook.com/PrimmAdvertising/"><i class="icon ion-social-facebook"></i></a></li>
					<li><a href="https://twitter.com/primmco"><i class="icon ion-social-twitter"></i></a></li>
					<li><a href="https://www.instagram.com/primmadvertising/"><i class="icon ion-social-instagram"></i></a></li>
					<li><a href="https://www.youtube.com/user/Primmco/feed"><i class="icon ion-social-youtube"></i></a></li>
					<li><a href="http://www.linkedin.com/company/the-primm-company"><i class="icon ion-social-linkedin"></i></a></li>
			</ul>
			<div class="site-footer-two__copyright">&copy; <?php echo date('Y'); ?> Primm Advertising</div>
			<ul class="site-footer-two__text-links" id="menu-primary-navigation">
				<li class="who-we-are">
					<a href="<?php echo get_home_url(); ?>/who-we-are/" itemprop="url" class="animsition-link"><span itemprop="name">Who We Are</span></a>
				</li>
				<li class="digital">
					<a href="<?php echo get_home_url(); ?>/online-advertising/" itemprop="url" class="animsition-link"><span itemprop="name">Digital</span></a>
				</li>
				<li class="web">
					<a href="<?php echo get_home_url(); ?>/web-design/" itemprop="url" class="animsition-link"><span itemprop="name">Web</span></a>
				</li>
				<li class="video">
					<a href="<?php echo get_home_url(); ?>/video-production/" itemprop="url" class="animsition-link"><span itemprop="name">Video</span></a>
				</li>
				<li class="print">
					<a href="<?php echo get_home_url(); ?>/print/" itemprop="url" class="animsition-link"><span itemprop="name">Print</span></a>
				</li>
				<li class="broadcast">
					<a href="<?php echo get_home_url(); ?>/media-planning/" itemprop="url" class="animsition-link"><span itemprop="name">Media</span></a>
				</li>
				<li class="social">
					<a href="<?php echo get_home_url(); ?>/seo/" itemprop="url" class="animsition-link"><span itemprop="name">SEO</span></a>
				</li>
				<li class="social">
					<a href="<?php echo get_home_url(); ?>/our-work/" itemprop="url" class="animsition-link"><span itemprop="name">Our Work</span></a>
				</li>
				<li class="contact">
					<a href="<?php echo get_home_url(); ?>/contact/" itemprop="url" class="animsition-link"><span itemprop="name">Contact</span></a>
				</li>
			</ul>
		</div>
	</footer>
	<?php

}

// Add Google Tag Manager code in <head>
add_action( 'wp_head', 'pd_google_tag_manager1' );
function pd_google_tag_manager1() { ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NVNR3B2');</script>
	<!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-8390030-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-8390030-1');
	</script>
<?php }

// Add Google Tag Manager code immediately below opening <body> tag
add_action( 'genesis_before', 'pd_google_tag_manager2' );
function pd_google_tag_manager2() { ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVNR3B2"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php }