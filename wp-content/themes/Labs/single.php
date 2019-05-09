<?php

get_header();

?>

<?php
$quoteblog = get_theme_mod('labs-quote-pBlog-setting'); ?>

<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Blog</h2>
            <div class="page-links">
                <a href="#">Home</a>
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
            <div class="col-md-8 col-sm-7 blog-posts">
                <?php while (have_posts()) : the_post(); ?>
                    <!-- Single Post -->
                    <div class="single-post">
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
                                        <?php echo $term->name; ?>
                                    </a>
                                <?php endforeach; ?>

                                <a href="#comment"> <?= get_comments_number($post_id) ?> commentaire</a>
                            </div>
                            <?= the_content() ?>
                        </div>
                    <?php endwhile ?>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="img/avatar/03.jpg" alt="">
                        </div>
                        <div class="author-info">
                            <h2><?php the_author() ?> <span>Auteur</span></h2>
                            <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div id="comment" class="comments">
                        <h2>Nombre de commentaire <?= get_comments_number($post_id) ?></h2>
                        <ul class="comment-list">
                            <?php $args = array(
                                'post_id' => get_the_id()
                            );

                            // The Query
                            $comments_query = new WP_Comment_Query;
                            $comments = $comments_query->query($args);

                            foreach ($comments as $comment) : ?>
                                <li>
                                    <div class="avatar">
                                        <?= get_avatar(get_the_author_meta('ID'), 70); ?>
                                    </div>
                                    <div class="comment-text">
                                        <h3><?= $comment->comment_author ?> | <?= comment_date(('d M Y')) ?> </h3>
                                        <p style="margin-top:20px;"><?= $comment->comment_content ?> </p>
                                    </div>

                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <?php if (is_single()) comments_template(''); ?>
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
                        <a href=""><img src="img/add.jpg" alt=""></a>
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