<?php get_header(); ?>

<?php
$quoteblog = get_theme_mod('labs-quote-pBlog-setting'); ?>


<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Blog</h2>
            <div class="page-links">
                <a href="<?php echo get_site_url(); ?>">Home</a>
                <span>Blog</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->


<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <?php
            $args = [
                'post_type' => 'post',
                // nous récupérons maintenant la valeur de l'option qui va elle déterminé le nombre à affiché
                'posts_per_page' => (get_option('nombre_portfolio_home')) ? get_option('nombre_portfolio_home') : 3,
                'paged' => $paged
            ];
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $query = new WP_Query($args);

            ?>
            <div class="col-md-8 col-sm-7 blog-posts">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <!-- Post item -->
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                            <div class="post-date">
                                <h2> <?= get_the_date('d') ?></h2>
                                <h3>
                                    <?= get_the_date('F Y') ?>
                                </h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"><?php the_title() ?></h2>
                            <div class="post-meta">
                                <?php
                                $terms = wp_get_post_terms($post->ID, ['post_tag']);
                                foreach ($terms as $term) : ?>
                                    <a class="" href="<?php echo get_term_link($term); ?>">
                                        <?= $term->name; ?>
                                    </a>
                                <?php endforeach; ?>
                                <?php
                                $terms = wp_get_post_terms($post->ID, ['category']);
                                foreach ($terms as $term) : ?>
                                    <a class="" href="<?php echo get_term_link($term); ?>">
                                        <?php echo $term->name; ?>
                                    </a>
                                <?php endforeach; ?>
                                <a href=""> <?= get_comments_number($post_id) ?> commentaire</a>
                            </div>
                            <?php the_content() ?>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                <?php endwhile ?>
                <!-- Post item -->

                <!-- Pagination -->
                <div class="page-pagination">
                    <a class="active" href="">
                        <?= paginate_links([
                            'format' => '?paged=%#%',
                            'current' => $paged,
                            'total' => $query->max_num_pages,
                            'type' => 'active'
                        ]); ?></a>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <?php get_search_form(); ?>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        <li>
                            <?php wp_list_categories([
                                'hide_empty' => 1,
                                'title_li' => '',
                                'number' => 6
                            ]); ?>
                        </li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        <?php
                        $terms = get_tags();
                        foreach ($terms as $term) : ?>
                            <li><a href="<?php echo get_term_link($term); ?>">
                                    <?= $term->name; ?>
                                </a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Quote</h2>
                    <div class="quote">
                        <span class="quotation">‘​‌‘​‌</span>
                        <p><?= $quoteblog ?></p>
                    </div>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Add</h2>
                    <div class="add">
                        <a href=""><img src="" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->

<?php
get_template_part('templates/newsletter');

get_template_part('templates/contact');

get_footer();

?>
</body>

</html>