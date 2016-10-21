<?php
// HANDLE INCLUDES HERE
require_once('wp-bootstrap-navwalker.php');
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/widgets.php';


// Theme Support
function fiftysevenchevy_theme_setup(){
    // Logo Support
    add_theme_support('custom-logo');
    
    // Featured Image
    add_theme_support('post-thumbnails');
    
    // Navigation
    register_nav_menus(array(
        'primary'           => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'fiftysevenchevy_theme_setup');

// Widget Locations






