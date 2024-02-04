<!doctype html>
<html <?php language_attributes(); ?>>

<?php get_template_part( 'partials/head' ); ?>

<body <?php body_class(); ?>>


<?php get_template_part( 'partials/header' ) ?>
<div class="jumbotron">
    <div class="container">
        <h1><?php echo get_theme_mod( 'banner_heading', 'Banner Heading' ); ?></h1>
        <p class="lead"><?php echo get_theme_mod( 'banner_text', 'Welcome to the WordPress Business Theme.  This theme uses the Twitter Bootstrap framework. Use the WordPress Customizer to set this text for your website.' ); ?></p>
        <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod( 'banner_btn_url', get_home_url() ); ?>"
              role="button"><?php echo get_theme_mod( 'banner_btn_text', 'Sign Up Today' ) ?></a></p>
    </div>
</div>

<div class="container">
    <section class="row marketing">
        <div class="col-lg-4 block">
            <i class="fa fa-<?php echo get_theme_mod( 'box1_icon', 'bar-chart' ); ?> fa-3"></i>
            <h3><?php echo get_theme_mod( 'box1_heading', 'Box 1 Heading' ); ?></h3>
            <p><?php echo get_theme_mod( 'box1_text', 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.' ); ?></p>
        </div>

        <div class="col-lg-4 block">
            <i class="fa fa-<?php echo get_theme_mod( 'box2_icon', 'code' ); ?> fa-3"></i>
            <h3><?php echo get_theme_mod( 'box2_heading', 'Box 2 Heading' ); ?></h3>
            <hp><?php echo get_theme_mod( 'box2_text', 'Maecenas sed diam eget risus varius blandit sit amet non magna.' ); ?></hp>
        </div>

        <div class="col-lg-4 block">
            <i class="fa fa-<?php echo get_theme_mod( 'box3_icon', 'desktop' ); ?> fa-3"></i>
            <h3><?php echo get_theme_mod( 'box3_heading', 'Box 3 Heading' ); ?></h3>
            <p><?php echo get_theme_mod( 'box3_text', 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.' ); ?></p>
        </div>
    </section>
</div>

<?php if ( is_active_sidebar( 'content-region-1' ) ): ?>
    <?php dynamic_sidebar( 'content-region-1' ); ?>
<?php endif; ?>

<?php if ( is_active_sidebar( 'content-region-2' ) ): ?>
    <?php dynamic_sidebar( 'content-region-2' ); ?>
<?php endif; ?>

<?php get_template_part( 'partials/footer' ); ?>
</body>
</html>
