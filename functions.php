<?php 

function scripts_load_cdn()
{
    // Deregister the included library
    wp_deregister_script( 'jquery' );
    // Register the library again from Google's CDN
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, false );
    // Register bootstrap
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );
     // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery', 'bootstrap' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script');
}
add_action( 'wp_enqueue_scripts', 'scripts_load_cdn' );


/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
 
 // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

set_post_thumbnail_size( 350, 350, array( 'center', 'center') );



//  wp_title



?>