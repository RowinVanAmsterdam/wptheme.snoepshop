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
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

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

        // Show next and previous buttons on product image carousel
        // add_filter( 'woocommerce_single_product_carousel_options', 'cuswoo_update_woo_flexslider_options' );
        /** 
         * Filer WooCommerce Flexslider options - Add Navigation Arrows
         */
        // function cuswoo_update_woo_flexslider_options( $options ) {
        
        //     $options['directionNav'] = true;
        
        //     return $options;
        // }


        // Woocommerce functions

        // Change add-to-cart text
        add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );
        function woo_custom_cart_button_text() { return __( 'In winkelwagen', 'woocommerce' ); };

        // Remove short-description @single-product page
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
        function woocommerce_template_single_excerpt() { return; };

        // Remove meta @single-product page
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
        function woocommerce_template_single_meta() { return; };

        // Remove Heading Title @WooCommerce Single Product Tabs
        add_filter( 'woocommerce_product_description_heading', '__return_null' );
        add_filter( 'woocommerce_product_additional_information_heading', '__return_null' );

        // Remove up-sell @single-product page
        remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
        function woocommerce_upsell_display() { return; };


        // Cart
        // Removes Cross sell @cart page
        remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );

        add_shortcode( 'recently_viewed_products', 'bbloomer_recently_viewed_shortcode' );
 
        // Recent bezochte producten
// function bbloomer_recently_viewed_shortcode() {
 
//    $viewed_products = ! empty( $_COOKIE['woocommerce_recently_viewed'] ) ? (array) explode( '|', wp_unslash( $_COOKIE['woocommerce_recently_viewed'] ) ) : array();
//    $viewed_products = array_reverse( array_filter( array_map( 'absint', $viewed_products ) ) );
 
//    if ( empty( $viewed_products ) ) return;
    
//    $title = '<h3>Recent bezochte producten</h3>';
//    $product_ids = implode( ",", $viewed_products );
 
//    return $title . do_shortcode("[products ids='$product_ids']");
   
// }

// function custom_track_product_view() {
//     if ( ! is_singular( 'product' ) ) {
//         return;
//     }

//     global $post;

//     if ( empty( $_COOKIE['woocommerce_recently_viewed'] ) )
//         $viewed_products = array();
//     else
//         $viewed_products = (array) explode( '|', $_COOKIE['woocommerce_recently_viewed'] );

//     if ( ! in_array( $post->ID, $viewed_products ) ) {
//         $viewed_products[] = $post->ID;
//     }

//     if ( sizeof( $viewed_products ) > 15 ) {
//         array_shift( $viewed_products );
//     }

//     // Store for session only
//     wc_setcookie( 'woocommerce_recently_viewed', implode( '|', $viewed_products ) );
// }

// add_action( 'template_redirect', 'custom_track_product_view', 20 );

// Remove coupon code @checkout-page
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );


// Show product thumbnail @checkout-page
add_filter( 'woocommerce_cart_item_name', 'product_image_review_order_checkout', 9999, 3 );
function product_image_review_order_checkout( $name, $cart_item, $cart_item_key ) {
    if ( ! is_checkout() ) return $name;
    $product = $cart_item['data'];
    $thumbnail = $product->get_image( array( '50', '50' ), array( 'class' => 'product-name__thumbnail' ) );
    return $thumbnail . $name;
}

// Remove shipping labels
add_filter( 'woocommerce_cart_shipping_method_full_label', 'remove_shipping_label', 9999, 2 );
function remove_shipping_label( $label, $method ) {
    $new_label = preg_replace( '/^.+:/', '', $label );
    return $new_label;
}