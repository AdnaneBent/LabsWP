<div class="wrap">
    <!-- nous utilisons la fonction get_admin_page_title() pour récupérer le titre de la page admin que l'on a défini lors de l'enregistrement -->
    <h1 class="animated fadeInUp text-center"><?= get_admin_page_title(); ?></h1>
    <!-- Ici nous ajoutons une partie d'html qui prendra en charge les notifications. On met cela dans un fichier à part afin de pouvoir réutiliser les notifications ailleurs -->
    <?php view('partials/notice'); ?>
    <div class="row">
        <div class="col-sm-12">
            <!-- on reçois la variable news(celle qu'on a compact dans la commit précedent) c'est une variable qui contient un tableau contenant chaque news enregistré dans la Base de donnée(bdd), on va donc faire un foreach et créer une div class postbox pour chaque élément à fin d'avoir un rendu correct. -->
            <?php foreach ($news as $new) : ?>
                <div class="postbox">
                    <div class="inside text-center">
                        <strong>Mails de la newsletter reçu </strong><?= $new->email; ?>
                        <form action="<?php get_site_url(); ?>?action=new-delete" method="post">
                            <input type="hidden" name="newsId" value="<?= $new->id; ?>">
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>