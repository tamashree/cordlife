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
/*Newsletter Widget*/
if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'Newsletter Widget',
        'id' => 'newsletter_widget',
        'before_widget' => '',
        'before_title' => '',
        'after_widget' => '',
        'after_title' => '',
    ));
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

/* Register Custom Post Type Test Range (Services)  */
add_action('init', 'register_services');
function register_services() {
    $labels = array(
        'name' => _x('Test Range', 'post type general name'),
        'singular_name' => _x('Test Range', 'post type singular name'),
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

/* Register Custom Post Type Press Releases  */
add_action('init', 'register_press_releases');
function register_press_releases() {
    $labels = array(
        'name' => _x('Press Releases', 'post type general name'),
        'singular_name' => _x('Press Release', 'post type singular name'),
        'add_new' => _x('Add New', 'Press Release'),
        'add_new_item' => __('Add New Press Release'),
        'edit_item' => __('Edit Press Release'),
        'new_item' => __('New Press Release'),
        'view_item' => __('View Press Release'),
        'search_items' => __('Search Press Release'),
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
    register_post_type( 'press_releases' , $args );
}

/* Register Custom Post Type Infographics  */
add_action('init', 'register_infographics');
function register_infographics() {
    $labels = array(
        'name' => _x('Infographics', 'post type general name'),
        'singular_name' => _x('Infographic', 'post type singular name'),
        'add_new' => _x('Add New', 'Infographic'),
        'add_new_item' => __('Add New Infographic'),
        'edit_item' => __('Edit Infographic'),
        'new_item' => __('New Infographic'),
        'view_item' => __('View Infographic'),
        'search_items' => __('Search Infographic'),
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
    register_post_type( 'infographics' , $args );
}

/* Register Custom Taxonomy infographics Category for Infographics  */

add_action( 'init', 'infographics_category_register', 50 );
function infographics_category_register() {
    register_taxonomy( 'infographicscat',  array('infographics'),
        array( 'hierarchical' => true,
            'label' => 'Infographics Category',
            'query_var' => true,
            'rewrite' => true ) );
}


/* Register Custom Post Type Contact Addresses  */
add_action('init', 'register_contact_addresses');
function register_contact_addresses() {
    $labels = array(
        'name' => _x('Contact Addresses', 'post type general name'),
        'singular_name' => _x('Contact Address', 'post type singular name'),
        'add_new' => _x('Add New', 'Contact Address'),
        'add_new_item' => __('Add New Contact Address'),
        'edit_item' => __('Edit Contact Address'),
        'new_item' => __('New Contact Address'),
        'view_item' => __('View Contact Address'),
        'search_items' => __('Search Contact Address'),
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
    register_post_type( 'contact_addresses' , $args );
}

?>