<?php
require_once 'wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/inc/customizer.php';

// Theme Support
function business_theme_setup() {
    // Logo Support
    add_theme_support( 'custom-logo' );

    register_nav_menus( [
        'primary' => __( 'Primary Menu' )
    ] );
}

add_action( 'after_setup_theme', 'business_theme_setup' );


add_action( 'customize_register', 'business_customize_register' );
