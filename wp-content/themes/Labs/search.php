<?php

get_header();

?>

<div style='margin:100px;' class="container single-post-container">
    <h1 style='margin:50px;'>Résultat de la recherche pour
        <span>"
            <?php echo get_search_query(); ?>"</span>
    </h1>
    <ul class="list-group mb-5">
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