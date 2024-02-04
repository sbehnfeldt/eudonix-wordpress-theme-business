<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'partials/head' ); ?>

<body <?php body_class(); ?>>
<?php get_template_part( 'partials/header' ) ?>

<section class="row title-bar">
    <div class="container">
        <div class="col-md-12">
            <h1><?php echo __( 'Blog' ); ?></h1>
        </div>
    </div>
</section>

<section class="row main">
    <div class="container">
        <div class="row">
            <?php if ( is_active_sidebar( 'sidebar' ) ): ?>
            <div class="col-md-8">
                <?php else: ?>
                <div class="col-md-12">
                    <?php endif; ?>

                    <?php if ( have_posts() ): ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article class="post row">
                                <div class="col-md-5">
                                    <div class="post-thumbnail">
                                        <?php if ( has_post_thumbnail() ): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>"
                                       class="btn btn-primary btn-block"><?php echo __( 'Read More' ); ?></a>
                                </div>
                                <div class="col-md-7">
                                    <ul class="meta">
                                        <li>By
                                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                                                <?php the_author(); ?>
                                            </a>
                                        </li>
                                        <li><?php the_time( 'F j, Y g:i a' ); ?></li>
                                        <li>
                                            <?php
                                            $categories = get_the_category();
                                            $sep        = ', ';
                                            $output     = '';

                                            if ( $categories ) {
                                                foreach ( $categories as $cat ) {
                                                    $output .= '<a href="' . get_category_link( $cat->term_id ) . '">' . $cat->cat_name . '</a>' . $sep;
                                                }
                                                echo trim( $output, $sep );
                                            }
                                            ?>
                                        </li>
                                    </ul>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                </div>
                            </article>
                            <div class="clr"></div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <b>No Posts</b>
                    <?php endif; ?>
                </div>

                <?php if ( is_active_sidebar( 'sidebar' ) ): ?>
                    <div class="col-md-4"><?php dynamic_sidebar( 'sidebar' ); ?></div>
                <?php endif; ?>
            </div>
        </div>
</section>

<?php if ( is_active_sidebar( 'content-region-1' ) ): ?>
    <?php dynamic_sidebar( 'content-region-1' ); ?>
<?php endif; ?>

<?php if ( is_active_sidebar( 'content-region-2' ) ): ?>
    <?php dynamic_sidebar( 'content-region-2' ); ?>
<?php endif; ?>


<?php get_template_part( 'partials/footer' ); ?>
</body>
</html>
