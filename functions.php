<?php
function load_stylesheets() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_register_style('snoepshop-style', get_template_directory_uri() . '/assets/styling/css/snoepshop.css', '', 1, 'all');
    wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.11/css/all.css');
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('snoepshop-style');
    wp_enqueue_style('font-awesome');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript() {
    wp_register_script('custom', get_template_directory_uri() . '/app.js', '', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// function load_iconSprite() {
//     get_template_part('/assets/images/icon-sprite.svg', 'hello');
// }
// add_action('wp_enqueue_scripts', 'load_iconSprite');

// function load_inline_svg($filename) {
 //https://enshrined.co.uk/2018/09/19/how-to-properly-include-inline-svgs-in-a-wordpress-theme/
//     // Add the path to your SVG directory inside your theme.
//     $svg_path = '/assets/images/svg-sprite';
 
//     // Check the SVG file exists
//     if ( file_exists( get_stylesheet_directory() . $svg_path . $filename ) ) {
 
//         // Load and return the contents of the file
//         return file_get_contents( get_stylesheet_directory_uri() . $svg_path . $filename );
//     }
 
//     // Return a blank string if we can't find the file.
//     return file_get_contents( get_stylesheet_directory_uri() . $svg_path . $filename );
// }

// Add theme support
add_theme_support('menus');
add_theme_support('woocommerce');

// Register menu
register_nav_menus(
    array(
        'main-menu' => __('Main Menu', 'wptheme.snoepshop')
    )
);