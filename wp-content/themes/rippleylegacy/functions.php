<?php

function rippley_enqueue_styles()
{
    wp_enqueue_style( 'main-style', get_template_directory_uri(). '/css/main.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    
    
    wp_enqueue_style( 'google-font-1', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_enqueue_style( 'google-font-2', 'https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic');

    wp_enqueue_script( 'main-script', get_stylesheet_directory() . 'js/main.js', NULL, microtime(), true );
    wp_enqueue_script( 'jquery', get_stylesheet_directory() . 'js/jquery.min.js', NULL, microtime(), true );
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory() . 'js/boostrap.min.js', NULL, microtime(), true );
    wp_enqueue_script( 'particles', get_stylesheet_directory() . 'js/particles.min.js', NULL, microtime(), true );
}


add_action('wp_enqueue_scripts', 'rippley_enqueue_styles');