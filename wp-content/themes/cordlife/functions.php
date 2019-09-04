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
?>