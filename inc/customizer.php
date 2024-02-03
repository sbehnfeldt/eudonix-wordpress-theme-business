<?php
function business_customize_register( $wp_customizer ) {
    // Banner Section
    $wp_customizer->add_section( 'banner', [
        'title'       => __( 'Banner', 'business' ),
        'description' => sprintf( __( 'Options for homepage banner', 'business' ) ),
        'priority'    => 130
    ] );

    // Heading Setting & Control
    $wp_customizer->add_setting( 'banner_heading', [
        'default' => _x( 'Banner Heading', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'banner_heading', [
        'label'    => _x( 'Heading', 'business' ),
        'section'  => 'banner',
        'priority' => 20
    ] );

    // Text Setting & Control
    $wp_customizer->add_setting( 'banner_text', [
        'default' => _x( 'Welcome to the WordPress Business Theme.  This theme uses the Twitter Bootstrap framework and can be customized to your liking', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'banner_text', [
        'label'    => _x( 'Text', 'business' ),
        'section'  => 'banner',
        'priority' => 20
    ] );

    // Button Setting & Control
    $wp_customizer->add_setting( 'banner_btn_text', [
        'default' => _x( 'Sign Up', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'banner_btn_text', [
        'label'    => _x( 'Button Text', 'business' ),
        'section'  => 'banner',
        'priority' => 20
    ] );

    // Button URL Setting & Control
    $wp_customizer->add_setting( 'banner_btn_url', [
        'default' => _x( 'http://test.com', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'banner_btn_url', [
        'label'    => _x( 'Button URL', 'business' ),
        'section'  => 'banner',
        'priority' => 20
    ] );

    // Background Image Setting & Control
    $wp_customizer->add_setting( 'banner_image', [
        'default' => _x( get_bloginfo( 'template_directory' ) . '/img/showcase.jpg', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( new WP_Customize_Image_Control( $wp_customizer, 'banner_image', [
        'label'    => __( 'Background Image', 'business' ),
        'section'  => 'banner',
        'settings' => 'banner_image'
    ] ) );

    // Boxes Section
    $wp_customizer->add_section( 'boxes', [
        'title'       => __( 'Boxes', 'business' ),
        'description' => sprintf( __( 'Options for homepage boxes', 'business' ) ),
        'priority'    => 130
    ] );

    //*** Box 1 ***//
    // Box 1 Heading Setting and Control
    $wp_customizer->add_setting( 'box1_heading', [
        'default' => _x( 'Box 1 Heading', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'box1_heading', [
        'label'    => __( 'Box 1 Heading', 'business' ),
        'section'  => 'boxes',
        'priority' => 20
    ] );

    // Box 1 Text Setting and Control
    $wp_customizer->add_setting( 'box1_text', [
        'default' => _x( 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'box1_text', [
        'label'    => __( 'Box 1 Text', 'business' ),
        'section'  => 'boxes',
        'priority' => 20
    ] );

    // Box 1 Icon Setting and Control
    $wp_customizer->add_setting( 'box1_icon', [
        'default' => _x( 'bar-chart', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'box1_icon', [
        'label'    => __( 'Box 1 Icon', 'business' ),
        'section'  => 'boxes',
        'priority' => 20
    ] );

    //*** Box 2 ***//
    // Box 2 Heading Setting and Control
    $wp_customizer->add_setting( 'box2_heading', [
        'default' => _x( 'Box 2 Heading', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'box2_heading', [
        'label'    => __( 'Box 2 Heading', 'business' ),
        'section'  => 'boxes',
        'priority' => 20
    ] );

    // Box 2 Text Setting and Control
    $wp_customizer->add_setting( 'box2_text', [
        'default' => _x( 'Maecenas sed diam eget risus varius blandit sit amet non magna.', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'box2_text', [
        'label'    => __( 'Box 2 Text', 'business' ),
        'section'  => 'boxes',
        'priority' => 20
    ] );

    // Box 2 Icon Setting and Control
    $wp_customizer->add_setting( 'box2_icon', [
        'default' => _x( 'bar-chart', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'box2_icon', [
        'label'    => __( 'Box 2 Icon', 'business' ),
        'section'  => 'boxes',
        'priority' => 20
    ] );

    //*** Box 3 ***//
    // Box 3 Heading Setting and Control
    $wp_customizer->add_setting( 'box3_heading', [
        'default' => _x( 'Box 3 Heading', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'box3_heading', [
        'label'    => __( 'Box 3 Heading', 'business' ),
        'section'  => 'boxes',
        'priority' => 20
    ] );

    // Box 3 Text Setting and Control
    $wp_customizer->add_setting( 'box3_text', [
        'default' => _x( 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'box3_text', [
        'label'    => __( 'Box 3 Text', 'business' ),
        'section'  => 'boxes',
        'priority' => 20
    ] );

    // Box 3 Icon Setting and Control
    $wp_customizer->add_setting( 'box3_icon', [
        'default' => _x( 'bar-chart', 'business' ),
        'type'    => 'theme_mod'
    ] );
    $wp_customizer->add_control( 'box3_icon', [
        'label'    => __( 'Box 3 Icon', 'business' ),
        'section'  => 'boxes',
        'priority' => 20
    ] );
}
add_action( 'customize_register', 'business_customize_register' );
