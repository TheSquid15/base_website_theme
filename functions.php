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
    wp_enqueue_script( 'anchor-script', get_template_directory_uri() . '/js/components/anchor-links.js', array(), null, true);
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

function register_2lipp_partners_cpt() {
    $labels = array(
        "name" => 'Partners',
        "singular_name" => 'Partner',
        "menu_name" => 'Partners',
        "all_items" => 'All partners',
        "add_new" => 'Add new',
        "add_new_item" => 'Add new partner',
        "edit_item" => 'Edit partner',
        "new_item" => 'New partner',
        "view_item" => 'See partner',
        "search_items" => 'Search for partner',
        "not_found" => 'No partners found',
        "not_found_in_trash" => 'No parnters found in trashcan',
        "archives" => 'Partners', 
        "insert_into_item" => 'Insert into partner',
        "uploaded_to_this_item" => 'Upload to this partner',
        "filter_items_list" => 'Filter partner list',
        "items_list_navigation" =>'Partner list navigation',
        "items_list" => 'Partner list',
    );

    $args = array(
        "label" => 'Partners',
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "", "with_front" => false ),
        "query_var" => true,
        "menu_position" => 4,
        "menu_icon" => "dashicons-groups",
        "supports" => array( "title", "thumbnail", "editor" ),
    );
    register_post_type( "partners", $args );
}
add_action( 'init', 'register_2lipp_partners_cpt' );