<?php 

// Styles and scripts
function enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/styles.css' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), true);
}

// Menus
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
        )
    );
}

// Logo   
add_theme_support( 'custom-logo' );

// Actions
add_action( 'init', 'register_my_menus' );
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
?>