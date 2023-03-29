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

function add_scripts() {
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/components/banner.js', array(), null, true);
}

add_action( 'wp_enqueue_scripts', 'add_scripts' );

function add_theme_customizer_settings($wp_customize) {
    $wp_customize->add_section('logo_options', array(
        'title' => 'Logo Options',
        'description' => 'Options to edit the sponsor logo on pages',
        'priority' => 120,
    ));
    $wp_customize->add_setting('sponsor_logo');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sponsor_logo', array(
        'mime_type' => 'image',
        'label' => 'Sponsor Logo',
        'description' => 'Logo of the sponsor that will appear in the top.',
        'section' => 'logo_options',
    )));
}

add_action('customize_register', 'add_theme_customizer_settings');