<?php
$titreContact = get_theme_mod('labs-contact-titre-setting');
$texteContact = get_theme_mod('labs-contact-text-setting');
$soustitreContact = get_theme_mod('labs-contact-soust-setting');
$adresseContact = get_theme_mod('labs-contact-adress-setting');
$postaleContact = get_theme_mod('labs-contact-postal-setting');
$telContact = get_theme_mod('labs-contact-tel-setting');
$mailContact = get_theme_mod('labs-contact-mail-setting');

?>


<!-- Contact section -->
<div class="contact-section spad fix" id="contactform">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2><?= $titreContact ?></h2>
                </div>
                <p><?= $texteContact ?> </p>
                <h3 class="mt60"><?= $soustitreContact ?></h3>
                <p class="con-item"><?= $adresseContact ?><br> <?= $postaleContact ?> </p>
                <p class="con-item"><?= $telContact ?></p>
                <p class="con-item"><?= $mailContact ?></p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">

                <?php view('partials/notice'); ?>

                <form id="con_form" class="form-class" action="<?= admin_url('admin-post.php'); ?>#contactform" method="post">
                    <input type="hidden" name="action" value='send-mail'>
                    <div class="row">
                        <?php $old = isset($_SESSION['old']) ? $_SESSION['old'] : ''; ?>
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name" value="<?= isset($old['name']) ? $old['name'] : '' ?>">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email" value="<?= isset($old['email']) ? $old['email'] : '' ?>">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject" value="<?= isset($old['subject']) ? $old['subject'] : '' ?>">
                            <textarea name="message" placeholder="Message" value="<?= isset($old['message']) ? $old['message'] : '' ?>"></textarea>
                            <button class="site-btn">Envoyé</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->