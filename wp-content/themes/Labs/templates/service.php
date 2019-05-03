<?php
$titreService = get_theme_mod('labs-service-titre-setting')
?>

<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <?php
            $titreService = get_theme_mod('labs-service-titre-setting', __('Get in <span>The Lab</span> and discover the world'));
            $titreService = str_replace('[', '<span>', $titreService);
            $titreService = str_replace(']', '</span>', $titreService);
            ?>
            <h2><?= $titreService ?></h2>
        </div>
        <div class="row">
            <?php
            $args = [
                'post_type' => 'service',
                'orderby'   => 'rand',
                'posts_per_page' => 9,
            ];
            $query = new WP_Query($args);
            ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="<?= get_post_meta(get_the_ID(), 'icone_choic', true); ?>"></i>
                        </div>
                        <div class="service-text">
                            <h2><?php the_title() ?></h2>
                            <p><?php the_content() ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
        <div class="text-center">
            <a href="http://localhost:8080/service#serv" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->