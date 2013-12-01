<?php

register_nav_menu( 'primary', 'Primary Menu' );

function add_scripts() {
  wp_enqueue_script( 'responsive_nav', get_template_directory_uri() . '/scripts/nav.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'add_scripts' );

// function twentythirteen_setup() {

// 	/*
// 	 * Switches default core markup for search form, comment form,
// 	 * and comments to output valid HTML5.
// 	 */
// 	// add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

// 	// This theme uses wp_nav_menu() in one location.
// 	//register_nav_menu( 'primary', __( 'Navigation Menu', 'twentythirteen' ) );

// 	/*
// 	 * This theme uses a custom image size for featured images, displayed on
// 	 * "standard" posts and pages.
// 	 */
// 	// add_theme_support( 'post-thumbnails' );
// 	// set_post_thumbnail_size( 604, 270, true );
// }


// function twentythirteen_scripts_styles() {
// 	/*
// 	 * Adds JavaScript to pages with the comment form to support
// 	 * sites with threaded comments (when in use).
// 	 */
// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
// 		wp_enqueue_script( 'comment-reply' );

// 	// Adds Masonry to handle vertical alignment of footer widgets.
// 	if ( is_active_sidebar( 'sidebar-1' ) )
// 		wp_enqueue_script( 'jquery-masonry' );

// 	// Loads JavaScript file with functionality specific to Twenty Thirteen.
// 	wp_enqueue_script( 'twentythirteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '2013-07-18', true );

// 	// Add Source Sans Pro and Bitter fonts, used in the main stylesheet.
// 	wp_enqueue_style( 'twentythirteen-fonts', twentythirteen_fonts_url(), array(), null );

// 	// Add Genericons font, used in the main stylesheet.
// 	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/fonts/genericons.css', array(), '2.09' );

// 	// Loads our main stylesheet.
// 	wp_enqueue_style( 'twentythirteen-style', get_stylesheet_uri(), array(), '2013-07-18' );

// 	// Loads the Internet Explorer specific stylesheet.
// 	wp_enqueue_style( 'twentythirteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentythirteen-style' ), '2013-07-18' );
// 	wp_style_add_data( 'twentythirteen-ie', 'conditional', 'lt IE 9' );
// }
// add_action( 'wp_enqueue_scripts', 'twentythirteen_scripts_styles' );

// /**
//  * Filter the page title.
//  *
//  * Creates a nicely formatted and more specific title element text for output
//  * in head of document, based on current view.
//  */
// function twentythirteen_wp_title( $title, $sep ) {
// 	global $paged, $page;

// 	if ( is_feed() )
// 		return $title;

// 	// Add the site name.
// 	$title .= get_bloginfo( 'name' );

// 	// Add the site description for the home/front page.
// 	$site_description = get_bloginfo( 'description', 'display' );
// 	if ( $site_description && ( is_home() || is_front_page() ) )
// 		$title = "$title $sep $site_description";

// 	// Add a page number if necessary.
// 	if ( $paged >= 2 || $page >= 2 )
// 		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentythirteen' ), max( $paged, $page ) );

// 	return $title;
// }
// add_filter( 'wp_title', 'twentythirteen_wp_title', 10, 2 );