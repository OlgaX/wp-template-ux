<?php
if (file_exists(__DIR__ . '/../../../RoyalOF/order_form_integration.wp.php')) {
	require_once(__DIR__ . '/../../../RoyalOF/order_form_integration.wp.php');
}

function draw_exit_popup() {
	if (function_exists('makeRoyalExitPopUp')) echo makeRoyalExitPopUp();
}

$order_form_pages = array('prices', 'order', 'preview');

//ADDING JS AND CSS FILES
//--------------------------------------------------
function ox_adding_scripts() {
	if (!function_exists('is_login_page')) {
		function is_login_page() {
			return !strncmp($_SERVER['REQUEST_URI'], '/wp-login.php', strlen('/wp-login.php'));
		}
	}

	if( !is_admin() && !is_login_page()){
		/*removed wp-embed.min.js*/
		wp_deregister_script('wp-embed');

		/*jquery*/
		wp_deregister_script('jquery');
		$infooter = !is_page(array($order_form_pages)) ? true : false;
		wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false, '1.11.3', $infooter);
		wp_enqueue_script('jquery');

		/*bootstrap*/
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

		/*slicknav menu*/
		wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '', true );

		/*owl-slider*/
		wp_enqueue_style( 'owl-slider', get_template_directory_uri() . '/css/owl.carousel.min.css');
		wp_enqueue_script( 'owl-slider', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true);

		/*waypoints*/
		wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '', true );

		/*counterup*/
		wp_enqueue_script('counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array('jquery', 'waypoints'), '', true );

		/*zopim chat*/
		wp_enqueue_script('zopim', get_template_directory_uri() . '/js/zopim-chat.js', array(), '', true );

		/*et-line-icons*/
		wp_enqueue_style( 'et-line-icons', get_template_directory_uri() . '/css/et-line-icons.min.css');

		/*custom css*/
		wp_enqueue_style( 'custom', get_template_directory_uri() . '/style.css', array('bootstrap','et-line-icons'));

		/*custom js*/
		wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
	}
}

add_action( 'wp_enqueue_scripts', 'ox_adding_scripts' );

//REWOVE SOME META TAGS AND UNNECESSARY LINKS
//--------------------------------------------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'feed_links', 2 );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');

//remove wpemoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//remove wp-json
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

//REMOVE LOGIN-PAGE ERRORS
//--------------------------------------------------
add_filter('login_errors',create_function('$a', "return null;"));

//REGISTRATION MENU
//--------------------------------------------------
register_nav_menus( array(
	'nav' => 'Navigaton',
	'footer' => 'Footer Menu',
	'footer2' => 'Footer Menu (second)',
));

//REGISTRATION SIDEBAR
//--------------------------------------------------
register_sidebar(array(
	'name' => 'Sidebar',
	'id' => 'sidebar',
	'before_widget' => '<div id="%1$s" class="site_widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="site_widget-title">',
	'after_title'   => '</h3>',
));

//CUSTOM EXCERPT ('Read More' btn)
//--------------------------------------------------
// custom excerpt length
function ox_custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'ox_custom_excerpt_length', 999 );

// add more link to excerpt
function ox_custom_excerpt_more($more) {
	global $post;
	return '... <div class="site_more-btn-wrap"><a class="btn btn-default site_big-btn site_more-btn" href="'. get_permalink($post->ID) . '">'.'Read More' .'</a></div>';
}
add_filter('excerpt_more', 'ox_custom_excerpt_more');

/*
//ENABLE THUMBNAILS (posts preview img)
//--------------------------------------------------
add_theme_support('post-thumbnails');
set_post_thumbnail_size(180, 180, true);
*/
