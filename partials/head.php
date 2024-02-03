<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/jumbotron-narrow/">


    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/fontawesome.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <style>
        .jumbotron {
            background: url(<?php echo get_theme_mod('banner_image', get_bloginfo('template_url') . '/img/showcase.jpg'); ?>) 0 -80px;
        }
    </style>
</head>
