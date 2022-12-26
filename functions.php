<?php
/**
 * cm-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cm-theme
 */

include_once('acf-fields.php');

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.1' );
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
			'name'          => esc_html__( 'Footer Left Sidebar', 'cm-theme' ),
			'id'            => 'footer-left',
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
    wp_enqueue_script( 'customjs', get_template_directory_uri() . "/assets/js/scripts.js", array("jquery"), _S_VERSION, false );
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
add_action('init', 'projects_register');
function projects_register() {
    $labels = array(
        'name' => _x('Projects', 'post type general name'),
        'singular_name' => _x('Project', 'post type singular name'),
        'add_new' => _x('Add New', 'Project episode'),
        'add_new_item' => __('New Project'),
        'edit_item' => __('Edit Project'),
        'new_item' => __('New Project'),
        'view_item' => __('View Project'),
        'search_items' => __('Search Projects'),
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
        'menu_icon' => 'dashicons-columns',
        'show_in_nav_menus' => false,
        'has_archive' => false,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array( 'category' ),
        ); 
    
    register_post_type( 'projects', $args );
}

function cm_theme_menu_fallback() {
  ?>
  <div class="border-2 border-gray-500 border-dashed rounded-md py-4"><p class="text-gray-500 text-center">Footer Menu not set,<br/> <a class="underline" href="/wp-admin/nav-menus.php">set it here</a></p></div>
  <?php
}

function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'footer-navigation') {
    $classes[] = '';
  } else if ($args->theme_location == 'top-navigation') {
    $classes[] = 'text-seashell text-5xl font-serif font-bold transition hover:text-silver';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);


/**
 * Limit number of nav menu items on menu
 */
function my_nav_menu_objects( $sorted_menu_items, $args ) {
    if ( $args->theme_location != 'footer-navigation' )
        return $sorted_menu_items;
    $unset_top_level_menu_item_ids = array();
    $array_unset_value = 1;
    $count = 1;

    foreach ( $sorted_menu_items as $sorted_menu_item ) {

        // unset top level menu items if over count 4
        if ( 0 == $sorted_menu_item->menu_item_parent ) {
            if ( $count > 6 ) {
                unset( $sorted_menu_items[$array_unset_value] );
                $unset_top_level_menu_item_ids[] = $sorted_menu_item->ID;
            }
            $count++;
        }

        // unset child menu items of unset top level menu items
        if ( in_array( $sorted_menu_item->menu_item_parent, $unset_top_level_menu_item_ids ) )
            unset( $sorted_menu_items[$array_unset_value] );

        $array_unset_value++;
    }

    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'my_nav_menu_objects', 10, 2 );