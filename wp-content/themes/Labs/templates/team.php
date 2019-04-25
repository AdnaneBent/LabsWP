<?php
$titreTeam = get_theme_mod('labs-service-team-setting') ?>

<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <?php
            $titreTeam = get_theme_mod('labs-team-titre-setting', __('Get in <span>The Lab</span> and discover the world'));
            $titreTeam = str_replace('[', '<span>', $titreTeam);
            $titreTeam = str_replace(']', '</span>', $titreTeam);
            ?>
            <h2><?= $titreTeam ?></h2>
        </div>
        <div class="row">
            <?php
            $args = [
                'post_type' => 'team',
                'orderby'   => 'rand',
                'posts_per_page' => 3,
            ];
            $query = new WP_Query($args);
            ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-sm-4">
                    <div class="member">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        <h2><?php the_title() ?></h2>
                        <h3 style="color: #2be6ab;"><?php the_content() ?></h3>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>
</div>
<!-- Team Section end-->