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

// Register widgets menu

// id – a unique identifier of a widget area
// name – the name of the widget area, which will be displayed in Appearance > Widgets
// description – a description of the widget area that is displayed within it and visible in Appearance > Widgets
// class – additional CSS class that can be assigned to the widget area, which will help you customize the widget area with CSS later
// before_widget – a block of HTML code added before every widget that belongs to the widget area
// after_widget – a block of HTML code added after every widget that belongs to the widget area
// before_title – a block of HTML code added before the widget area title when it is displayed
// after_title – a block of HTML code added after the widget area title when it is displayed
// function register_custom_widget_area() {
//     register_sidebar(
//     array(
//     'id' => 'shop',
//     'name' => esc_html__( 'dig', 'theme-domain' ),
//     'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
//     'before_widget' => '<div id="%1$s" class="widget %2$s">',
//     'after_widget' => '</div>',
//     'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
//     'after_title' => '</h3></div>'
//     )
//     );
//     }
//     add_action( 'widgets_init', 'register_custom_widget_area' );

    register_sidebar (
        array(
            'name' => 'Page sidebar',
            'id' => 'page-sidebar',
            'class' => '',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        )
        );