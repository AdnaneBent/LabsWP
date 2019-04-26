<?php

get_header();
// Ce fichier template spécial de wordpress est appelé pour afficher les catégories ou taxonomie ou autre archive. Voir le wp hierarchy
// https://wphierarchy.com/
?>

<div class="container single-post-container">
    <h1 style='margin:100px;'>
        <?php the_archive_title(); ?>
    </h1>

    <ul style='margin:100px;' class="list-group">
        <!-- Dans cette boucle nous allons récupérer tout les post qui correspondent à la recherche -->
        <?php while (have_posts()) : the_post(); ?>
            <li class="list-group-item">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a> </li>
        <?php endwhile; ?>
    </ul>
</div>
<?php

get_footer();

?>