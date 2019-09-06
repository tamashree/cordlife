<?php
ob_start();
ob_clean();
///////////////********* To Upload Feature Image *********///////////////////
add_theme_support( 'post-thumbnails' );
///////////////********* Register Menus  *********///////////////////
/*Header Menu*/
if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'inner_top', ' Top menu' );
}
/*Footer Menu*/
if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'inner_bottom', ' Footer menu' );
}
/*Theme Options*/
if ( !function_exists( 'optionsframework_init' ) ) {
    define('OPTIONS_FRAMEWORK_URL', get_template_directory_uri() . '/admin/');
    define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory() . '/admin/');
    require_once ( OPTIONS_FRAMEWORK_DIRECTORY.'options-framework.php');
}

/* Register Custom Post Type Testimonials  */
add_action('init', 'register_testimonials');
function register_testimonials() {
    $labels = array(
        'name' => _x('Testimonials', 'post type general name'),
        'singular_name' => _x('Testimonial', 'post type singular name'),
        'add_new' => _x('Add New', 'Testimonial'),
        'add_new_item' => __('Add New Testimonial'),
        'edit_item' => __('Edit Testimonial'),
        'new_item' => __('New Testimonial'),
        'view_item' => __('View Testimonial'),
        'search_items' => __('Search Testimonial'),
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
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','custom-fields')
    );
    register_post_type( 'testimonials' , $args );
}

/* Register Custom Post Type Services  */
add_action('init', 'register_services');
function register_services() {
    $labels = array(
        'name' => _x('Services', 'post type general name'),
        'singular_name' => _x('Service', 'post type singular name'),
        'add_new' => _x('Add New', 'Service'),
        'add_new_item' => __('Add New Service'),
        'edit_item' => __('Edit Service'),
        'new_item' => __('New Service'),
        'view_item' => __('View Service'),
        'search_items' => __('Search Service'),
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
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','custom-fields')
    );
    register_post_type( 'services' , $args );
}
?>