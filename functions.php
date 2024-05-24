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
    wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/font-awesome/css/font-awesome.min.css');
}

add_action( 'wp_enqueue_scripts', 'add_styles' );

function add_scripts() {
    wp_enqueue_script( 'anchor-script', get_template_directory_uri() . '/js/components/anchor-links.js', array(), null, true);
    wp_enqueue_script( 'hamburger-script', get_template_directory_uri() . '/js/components/hamburgermenu.js', array(), null, true);

    if(is_front_page()) {
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/components/banner.js', array(), null, true);
        wp_enqueue_script( 'activities-script', get_template_directory_uri() . '/js/components/activities.js', array(), null, true);
    }
}

add_action( 'wp_enqueue_scripts', 'add_scripts' );

function home_filter_url($items) {
    if(!is_front_page()) {
        foreach($items as $item) {
            $item->url = get_home_url() . $item->url;
        }
    }
    return $items;
}

add_filter('wp_nav_menu_objects', 'home_filter_url', 10, 2);

add_filter('excerpt_length', function($length) {
    return 25;
}, PHP_INT_MAX);

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
    
    $wp_customize->add_section('footer_options', array(
        'title' => 'Footer Options',
        'description' => 'Options to customize the footer to a degree.',
        'priority' => 125,
    ));
    $wp_customize->add_setting('footer_background');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_background', array(
        'mime_type' => 'image',
        'label' => 'Footer Background',
        'description' => 'Background image for the footer section',
        'section' => 'footer_options',
    )));
    $wp_customize->add_setting('footer_title_1');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_title_1', array(
        'label' => 'Title for the first box in the footer',
        'section' => 'footer_options',
        'settings' => 'footer_title_1',
        'type' => 'text',
    ))); 
    $wp_customize->add_setting('footer_box_1');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_box_1', array(
        'label' => 'Text for the first box in the footer',
        'section' => 'footer_options',
        'settings' => 'footer_box_1',
        'type' => 'textarea',
    ))); 
    $wp_customize->add_setting('footer_url_1');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_url_1', array(
        'label' => 'Url for the first box in the footer',
        'section' => 'footer_options',
        'settings' => 'footer_url_1',
        'type' => 'url',
        'input_attrs' => array(
            'placeholder' => 'https://www.2lipp.eu',
        ),
    )));
    $wp_customize->add_setting('footer_title_2');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_title_2', array(
        'label' => 'Title for the second box in the footer',
        'section' => 'footer_options',
        'settings' => 'footer_title_2',
        'type' => 'text',
    )));
    $wp_customize->add_setting('footer_box_2');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_box_2', array(
        'label' => 'Text for the second box in the footer',
        'section' => 'footer_options',
        'settings' => 'footer_box_2',
        'type' => 'textarea',
    )));
    $wp_customize->add_setting('footer_url_2');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_url_2', array(
        'label' => 'Url for the second box in the footer',
        'section' => 'footer_options',
        'settings' => 'footer_url_2',
        'type' => 'url',
        'input_attrs' => array(
            'placeholder' => 'https://www.2lipp.eu',
        ),
    )));
}

add_action('customize_register', 'add_theme_customizer_settings');

function register_partners_cpt() {
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
        "not_found_in_trash" => 'No partners found in trashcan',
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
add_action( 'init', 'register_partners_cpt' );

function register_activities_cpt() {
    $labels = array(
        "name" => 'Activities',
        "singular_name" => 'Activity',
        "menu_name" => 'Activities',
        "all_items" => 'All activities',
        "add_new" => 'Add new',
        "add_new_item" => 'Add new activity',
        "edit_item" => 'Edit activity',
        "new_item" => 'New activity',
        "view_item" => 'See activity',
        "search_items" => 'Search for activity',
        "not_found" => 'No activities found',
        "not_found_in_trash" => 'No activities found in trashcan',
        "archives" => 'Activities', 
        "insert_into_item" => 'Insert into activity',
        "uploaded_to_this_item" => 'Upload to this activity',
        "filter_items_list" => 'Filter activity list',
        "items_list_navigation" =>'Activity list navigation',
        "items_list" => 'Activity list',
    );

    $args = array(
        "label" => 'Activities',
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
        "menu_icon" => "dashicons-megaphone",
        "supports" => array( "title", "thumbnail", "editor" ),
    );
    register_post_type( "activities", $args );
}
add_action( 'init', 'register_activities_cpt' );

function register_activities_taxanomy(){
    $labels = array(
        "name" => "Activity categories",
        "singular_name" => "Activity category",
    );

    $args = array(
        "label" => "Activity categories",
        "labels" => $labels,
        "public" => false,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => array('slug' => 'activity_categories', 'with_front' => true,),
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "activity_categories",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => true,
    );
    register_taxonomy("activity_categories", array("activities"), $args);
}
add_action( 'init', 'register_activities_taxanomy' );