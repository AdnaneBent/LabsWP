<?php
$biglogoLabs = get_theme_mod('labs-biglogo-setting');
$imageCarousel1 = get_theme_mod('labs-carousel-setting');
$imageCarousel2 = get_theme_mod('labs-carousel2-setting');
$imageCarousel3 = get_theme_mod('labs-carousel3-setting');
?>

<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <?= wp_get_attachment_image(
                $biglogoLabs,
                '',
                [
                    'class' => 'img-fluid'
                ]
            ); ?>
            <p><?php echo get_bloginfo('description'); ?></p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        <?= wp_get_attachment_image(
            $imageCarousel1,
            'full',
            '',
            [
                'class' => 'img-fluid item hero-item'
            ]
        ); ?>
        <?= wp_get_attachment_image(
            $imageCarousel2,
            'full',
            '',
            [
                'class' => 'img-fluid item hero-item'
            ]
        ); ?>
        <?= wp_get_attachment_image(
            $imageCarousel3,
            'full',
            '',
            [
                'class' => 'img-fluid item hero-item'
            ]
        ); ?>
    </div>
</div>
<!-- Intro Section -->