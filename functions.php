<?php
/**
 * cm-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cm-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}
function cm_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'top-navigation' => esc_html__( 'Header', 'cm-theme' ),
            'footer-navigation' => esc_html__( 'Footer', 'cm-theme' ),
		)
	);

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
add_action( 'after_setup_theme', 'cm_theme_setup' );

function cm_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cm-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cm-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cm_theme_widgets_init' );

function cm_theme_scripts() {
	wp_enqueue_style( 'owlcss', get_template_directory_uri() . "/assets/dist/owl/owl.carousel.min.css", array(), _S_VERSION );
    wp_enqueue_style( 'owlcss');
    wp_enqueue_style( 'customcss', get_template_directory_uri() . "/assets/css/style.css", array(), _S_VERSION );
    wp_enqueue_style( 'customcss');

    wp_enqueue_script( 'owljs', get_template_directory_uri() . "/assets/dist/owl/owl.carousel.min.js", array("jquery"), _S_VERSION, true );
    wp_enqueue_script( 'owljs' );
	wp_enqueue_script( 'tailwindjs', "//cdn.tailwindcss.com", array("jquery"), _S_VERSION, true );
    wp_enqueue_script( 'tailwindjs' );
	wp_enqueue_script( 'tailwindconfig', get_template_directory_uri() . "/assets/js/tailwind.config.js", array("jquery"), _S_VERSION, true );
    wp_enqueue_script( 'tailwindconfig' );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . "/assets/js/scripts.js", array("jquery"), _S_VERSION, true );
    wp_enqueue_script( 'customjs' );

}
add_action( 'wp_enqueue_scripts', 'cm_theme_scripts' );

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

add_action('init', 'podcasts_register');
function podcasts_register() {
    $labels = array(
        'name' => _x('Podcast', 'post type general name'),
        'singular_name' => _x('Podcast', 'post type singular name'),
        'add_new' => _x('Add New', 'Podcast episode'),
        'add_new_item' => __('New Episode'),
        'edit_item' => __('Edit Episode'),
        'new_item' => __('New Episode'),
        'view_item' => __('View Episode'),
        'search_items' => __('Search Episodes'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-audio',
        'show_in_nav_menus' => false,
        'has_archive' => false,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
        ); 
    
    register_post_type( 'podcast', $args );
}