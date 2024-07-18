<?php
/*-----------------------------------------------------------------------------------*/
/* This file will be referenced every time a template/page loads on your Wordpress site
/* This is the place to define custom fxns and specialty code
/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
// define( 'NAKED_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;


/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );


/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
// register_nav_menus( 
// 	array(
// 		'header'	=>	__( 'Header Menu', 'blank' ), // Register the Header menu
// 	)
// );


/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
/*
	function theme_register_sidebars() {
		register_sidebar(array(				// Start a series of sidebars to register
			'id' => 'sidebar', 					// Make an ID
			'name' => 'Sidebar',				// Name it
			'description' => 'Take it on the side...', // Dumb description for the admin side
			'before_widget' => '<div>',	// What to display before each widget
			'after_widget' => '</div>',	// What to display following each widget
			'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
			'after_title' => '</h3>',		// What to display following each widget's title
			'empty_title'=> '',					// What to display in the case of no title defined for a widget
			// Copy and paste the lines above right here if you want to make another sidebar, 
			// just change the values of id and name to another word/name
		));
	} 
	// adding sidebars to Wordpress (these are created in functions.php)
	add_action( 'widgets_init', 'theme_register_sidebars' );
*/


/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/
function theme_scripts()  { 
	// enqueue css files
	wp_enqueue_style('main', get_stylesheet_directory_uri() . '/styles/main.min.css');
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');

	// enqueue js files
	wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/scripts/vendors/jquery.min.js');
	wp_enqueue_script('popper', get_stylesheet_directory_uri() . '/scripts/vendors/popper.min.js');
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/scripts/vendors/bootstrap.min.js');
	wp_enqueue_script('scrollCue', get_stylesheet_directory_uri() . '/scripts/vendors/scrollCue.min.js');
	wp_enqueue_script('swiper-bundle', get_stylesheet_directory_uri() . '/scripts/vendors/swiper-bundle-min.js');
	wp_enqueue_script('script', get_stylesheet_directory_uri() . '/scripts/script.js');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header


/*-----------------------------------------------------------------------------------*/
/* PHP code for SVG support In WordPress
/*-----------------------------------------------------------------------------------*/
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
	$filetype = wp_check_filetype( $filename, $mimes );
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  
}, 10, 4 );
  
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter( 'upload_mimes', 'cc_mime_types' );
  
function fix_svg() {
	echo '<style type="text/css">
		.attachment-266x266, .thumbnail img {
			width: 100% !important;
			height: auto !important;
		}
	</style>';
}
add_action( 'admin_head', 'fix_svg' );


/*-----------------------------------------------------------------------------------*/
/* Add Theme Settings Advanced Custom Fields
/*-----------------------------------------------------------------------------------*/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header',
		'menu_title'	=> 'Header Section',
		'parent_slug'	=> 'general-settings',
	));	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer',
		'menu_title'	=> 'Footer Section',
		'parent_slug'	=> 'general-settings',
	));	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Media',
		'menu_title'	=> 'Social Media',
		'parent_slug'	=> 'general-settings',
	));	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Shop Page',
		'menu_title'	=> 'Shop Page',
		'parent_slug'	=> 'general-settings',
	));	
	acf_add_options_sub_page(array(
		'page_title' 	=> '404 Page',
		'menu_title'	=> '404 Page',
		'parent_slug'	=> 'general-settings',
	));
}


/*-----------------------------------------------------------------------------------*/
/* Advanced Custom Fields Modifications - Resize WYSIWYG Editor
/*-----------------------------------------------------------------------------------*/
function PREFIX_apply_acf_modifications() { ?>
	<style>
		.acf-editor-wrap iframe {
			min-height: 0;
		}
	</style>
	<script>
		(function($) {
			// (filter called before the tinyMCE instance is created)
			acf.add_filter('wysiwyg_tinymce_settings', function(mceInit, id, $field) {
				// enable autoresizing of the WYSIWYG editor
				mceInit.wp_autoresize_on = true;
				return mceInit;
			});
			// (action called when a WYSIWYG tinymce element has been initialized)
			acf.add_action('wysiwyg_tinymce_init', function(ed, id, mceInit, $field) {
				// reduce tinymce's min-height settings
				ed.settings.autoresize_min_height = 100;
				// reduce iframe's 'height' style to match tinymce settings
				$('.acf-editor-wrap iframe').css('height', '100px');
			});
		})(jQuery)
	</script>
<?php }
add_action('acf/input/admin_footer', 'PREFIX_apply_acf_modifications');


/*-----------------------------------------------------------------------------------*/
/* WooCoomerce Shop Page
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'woocommerce' );



/*-----------------------------------------------------------------------------------*/
/* Search function - Search titles only 
/*-----------------------------------------------------------------------------------*/
function __search_by_title_only( $search, $wp_query )
{
    global $wpdb;
    if(empty($search)) {
        return $search; // skip processing - no search term in query
    }
    $q = $wp_query->query_vars;
    $n = !empty($q['exact']) ? '' : '%';
    $search =
    $searchand = '';
    foreach ((array)$q['search_terms'] as $term) {
        $term = esc_sql($wpdb->esc_like($term));
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if (!empty($search)) {
        $search = " AND ({$search}) ";
        if (!is_user_logged_in())
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
add_filter('posts_search', '__search_by_title_only', 500, 2);



// /*-----------------------------------------------------------------------------------*/
// /* Search Results Page - Change default URL from "/?s=search-term" to "/search" 
// /*-----------------------------------------------------------------------------------*/
// function change_search_url() {
//     if ( is_search() && ! empty( $_GET['s'] ) ) {
//         wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
//         exit();
//     }
// }
// add_action( 'template_redirect', 'change_search_url' );



// make website exclusive to whitelisted IP addresses
add_action('init', 'restrict_access_by_ip');

function restrict_access_by_ip() {
    // 5.255.58.50, 85.199.247.218 - Pets Choice Server
    // 120.29.86.34, 120.29.86.216, 120.29.86.218, 120.29.69.77, 120.29.87.133, 192.168.100.44 - Owen
	// 119.94.65.69, 120.29.76.215 - E
	// 82.28.151.140 - Sam
    $allowed_ips = array('5.255.58.50', '85.199.247.218', '120.29.69.77', '120.29.86.34', '120.29.86.216', '120.29.86.218', '120.29.87.133', '192.168.100.44', '119.94.65.69', '120.29.76.215', '82.28.151.140');
    $user_ip = $_SERVER['REMOTE_ADDR'];
    
    if (!in_array($user_ip, $allowed_ips)) {
        wp_die('You are not authorized to access this website.');
    }
}