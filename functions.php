<?php

// adding the CSS and JS files

function patat_setup()
{   wp_enqueue_style('google-fonts','//fonts.googleapis.com/css2?family=Knewave&family=Roboto&display=swap');
    wp_enqueue_style('fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'patat_setup');