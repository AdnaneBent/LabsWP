<?php get_header(); ?>

<?php

$titreservice = get_theme_mod('labs-titre-pService-setting');
$titreprojet = get_theme_mod('labs-titre-pService-phone-setting');

?>

<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Services</h2>
            <div class="page-links">
                <a href="<?php echo get_site_url(); ?>">Home</a>
                <span>Services</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->


<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div id="serv" class="section-title dark">
            <?php
            $titreservice = get_theme_mod('labs-titre-pService-setting', __('Get in <span>The Lab</span> and discover the world'));
            $titreservice = str_replace('[', '<span>', $titreservice);
            $titreservice = str_replace(']', '</span>', $titreservice);
            ?>
            <h2> <?= $titreservice ?></h2>
        </div>
        <div class="row">
            <?php
            $args = [
                'post_type' => 'service',
                'posts_per_page' => 9,
                'paged' => $paged
            ];
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
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
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
            <?= paginate_links([
                'format' => '?paged=%#%',
                'current' => $paged,
                'total' => $query->max_num_pages,

            ]); ?>
        </div>
    </div>
</div>
<!-- services section end -->


<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <?php
            $titreprojet = get_theme_mod('labs-titre-pService-phone-setting', __('Get in <span>The Lab</span> and discover the world'));
            $titreprojet = str_replace('[', '<span>', $titreprojet);
            $titreprojet = str_replace(']', '</span>', $titreprojet);
            ?>
            <h2><?= $titreprojet ?></h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <?php
                $args = [
                    'post_type' => 'project',
                    'orderby'   => 'rand',
                    'posts_per_page' => 3,
                ];
                $query = new WP_Query($args);
                ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2><?php the_title() ?></h2>
                            <?php the_content() ?>
                        </div>
                        <div class="icon">
                            <i class="<?= get_post_meta(get_the_ID(), 'icone_choice', true); ?>"></i>
                        </div>
                    </div>
                    <!-- feature item -->
                <?php endwhile ?>
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <?php
                $args = [
                    'post_type' => 'project',
                    'orderby'   => 'rand',
                    'posts_per_page' => 3,
                ];
                $query = new WP_Query($args);
                ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="icon-box light">
                        <div class="icon">
                            <i class="<?= get_post_meta(get_the_ID(), 'icone_choice', true); ?>"></i>
                        </div>
                        <div class="service-text">
                            <h2><?php the_title() ?></h2>
                            <?php the_content() ?>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
        <div class="text-center mt100">
            <a href="#projet" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->


<!-- services card section-->
<div class="services-card-section spad" id="projet">
    <div class="container">
        <div class="row">
            <?php
            $args = [
                'post_type' => 'project',
                'orderby'   => 'rand',
                'posts_per_page' => 3,
            ];
            $query = new WP_Query($args);
            ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <!-- Single Card -->
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="card-text">
                            <h2><?php the_title() ?></h2>
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>
</div>
<!-- services card section end-->





<?php
get_template_part('templates/newsletter');

get_template_part('templates/contact');

get_footer();

?>
</body>

</html>