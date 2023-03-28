<?php

if(! function_exists( 'theme_init ')) {
    function init_2lipp_theme() {

        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));


        register_nav_menus(array(
            "main_nav" => "Main Nav",
            "footer_nav" => "Footer Nav"
        ));
    }
}

add_action( 'after_setup_theme', 'init_2lipp_theme' );

function add_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
}

add_action( 'wp_enqueue_scripts', 'add_styles' );