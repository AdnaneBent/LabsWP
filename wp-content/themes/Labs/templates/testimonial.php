<?php
$titre_Testimonial = get_theme_mod('labs-testimonial-titre-setting'); ?>

<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div id="testimonial" class="row justify-content-end">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <?php
                    $titre_Testimonial = get_theme_mod('labs-testimonial-titre-setting', __('Get in <span>The Lab</span> and discover the world'));
                    $titre_Testimonial = str_replace('[', '<span>', $titre_Testimonial);
                    $titre_Testimonial = str_replace(']', '</span>', $titre_Testimonial);
                    ?>
                    <h2><?= $titre_Testimonial ?></h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <?php
                    $args = [
                        'post_type' => 'testimonial',
                        'orderby'   => 'rand',
                        'posts_per_page' => 3,
                    ];
                    $query = new WP_Query($args);
                    ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p><?php the_content() ?></p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                                </div>
                                <div class="client-name">
                                    <h2><?php the_title() ?></h2>
                                    <p><?php
                                        $terms = wp_get_post_terms($post->ID, ['testimonial_taxonomy']);
                                        foreach ($terms as $term) : ?>
                                            <a class="badge badge-secondary" href="<?php echo get_term_link($term); ?>">
                                                <?php echo $term->name; ?>
                                            </a>
                                        <?php endforeach; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->