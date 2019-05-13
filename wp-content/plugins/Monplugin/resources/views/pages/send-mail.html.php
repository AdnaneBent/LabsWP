<div class="wrap container">
    <!-- nous utilisons la fonction get_admin_page_title() pour récupérer le titre de la page admin que l'on a défini lors de l'enregistrement -->
    <h1 class="animated fadeInUp text-center"><?= get_admin_page_title(); ?></h1>
    <!-- Ici nous ajoutons une partie d'html qui prendra en charge les notifications. On met cela dans un fichier à part afin de pouvoir réutiliser les notifications ailleurs -->
    <?php view('partials/notice'); ?>
    <div class="row">
        <div class="col-sm-12">
            <!-- on reçois la variable mails(celle qu'on a compact dans la commit précedent) c'est une variable qui contient un tableau contenant chaque mails enregistré dans la Base de donnée(bdd), on va donc faire un foreach et créer une div class postbox pour chaque élément à fin d'avoir un rendu correct. -->
            <?php foreach ($mails as $mail) : ?>
                <div class="postbox w-50 mx-auto">
                    <div class="inside text-center">
                        <strong>Mails reçu </strong><?= $mail->email; ?>
                        <a href="<?php menu_page_url('mail-client'); ?>&action=show&id=<?= $mail->id; ?>" class="btn btn-info text-dark">voir</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>