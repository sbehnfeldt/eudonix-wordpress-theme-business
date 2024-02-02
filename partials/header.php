<div class="header clearfix">
    <div class="container">
        <?php
        wp_nav_menu( [
            'theme_location' => 'primary',
            'depth'          => 2,
            'container'      => false,
            'menu_class'     => 'nav nav-pills pull-right',
            'fallback'       => 'wp_bootstrap_navwalker::fallback',
            'walker'         => new wp_bootstrap_navwalker()
        ] );
        ?>

        <?php if ( has_custom_logo() ): ?>
            <?php the_custom_logo(); ?>
        <?php else: ?>
            <h1><?php bloginfo( 'name' ); ?></h1>
        <?php endif; ?>
    </div>
</div>
