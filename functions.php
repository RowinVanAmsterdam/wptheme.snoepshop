<?php
function load_stylesheets() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_register_style('snoepshop-style', get_template_directory_uri() . '/assets/styles/css/snoepshop.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('snoepshop-style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript() {
    wp_register_script('custom', get_template_directory_uri() . '/app.js', '', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');