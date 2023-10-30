<?php 
function enqueue_custom_style() {
    // Enqueue the style.css file
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_style');
