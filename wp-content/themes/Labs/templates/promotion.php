<?php
$titreStand = get_theme_mod('labs-stand-titre-setting');
$textStand = get_theme_mod('labs-stand-text-setting');
$boutonStand = get_theme_mod('labs-stand-bouton-setting');

?>

<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                $titreStand = get_theme_mod('labs-stand-titre-setting', __('Get in <span>The Lab</span> and discover the world'));
                $titreStand = str_replace('[', '<span>', $titreStand);
                $titreStand = str_replace(']', '</span>', $titreStand);
                ?>
                <h2><?= $titreStand ?></h2>
                <p><?= $textStand ?></p>
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="http://localhost:8080/blog/" class="site-btn btn-2"><?= $boutonStand ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->