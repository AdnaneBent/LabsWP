<!-- variable -->

<?php
$titre_about = get_theme_mod('labs-about-titre-setting');
$column_right = get_theme_mod('labs-about-right');
$column_left = get_theme_mod('labs-about-left');
$bouton = get_theme_mod('labs-about-bouton-setting');
$bgvideo = get_theme_mod('labs-about-video-setting')

?>

<!-- Fin variable -->

<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-023-flask"></i>
                        </div>
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-011-compass"></i>
                        </div>
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
                <!-- single card -->
                <div class="col-md-4 col-sm-12">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-037-idea"></i>
                        </div>
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2><?= $titre_about ?></h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p><?= $column_left['text']; ?></p>
                </div>
                <div class="col-md-6">
                    <p><?= $column_right['text']; ?></p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="<?= $bouton['url'] ?>" class="site-btn"><?= $bouton['text'] ?></a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <?= wp_get_attachment_image(
                            $bgvideo['img'],
                            '',
                            [
                                'class' => 'img-fluid'
                            ]
                        ); ?>
                        <a href="<?= $bgvideo['url'] ?>" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->