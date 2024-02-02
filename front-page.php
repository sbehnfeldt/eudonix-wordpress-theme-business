<!doctype html>
<?php get_template_part('partials/head'); ?>

<body <?php body_class(); ?>>


<?php get_template_part('partials/header') ?>
<div class="jumbotron">
    <div class="container">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus
            commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
    </div>
</div>

<div class="container">
    <section class="row marketing">
        <div class="col-lg-4 block">
            <i class="fa fa-bar-chart fa-3"></i>
            <h3>Subheading</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
        </div>

        <div class="col-lg-4 block">
            <i class="fa fa-code fa-3"></i>
            <h3>Subheading</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
        </div>

        <div class="col-lg-4 block">
            <i class="fa fa-desktop fa-3"></i>
            <h3>Subheading</h3>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
    </section>
</div>

<section class="row content-region-1 pt50 pb40">
    <div class="col-md-12 container">
        <h1>Clean Bootstrap Wordpress Theme</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis dolor,
            doloremque error expedita facilis incidunt, necessitatibus officiis perferendis perspiciatis porro
            quae quidem voluptate? Autem modi odit provident reiciendis veniam.</p>
    </div>
</section>

<section class="content-region-2 pt40 pb40 container">
    <div class="row">
        <div class="col-md-5">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/pic1.jpg" alt="">
        </div>
        <div class="col-md-7">
            <h3>Theme Features</h3>
            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>Clean Code</li>
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>Custom Showcase Area</li>
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>Bootstrap Framework</li>
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>Multiple Color Choices
                </li>
            </ul>
        </div>
    </div>
</section>

<?php get_template_part('partials/footer'); ?>
</body>
</html>
