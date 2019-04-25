<?php get_header(); ?>


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
            ];
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
                                        <?php echo $term->name; ?>
                                    </a>
                                <?php endforeach; ?>
                                <a href="">2 Comments</a>
                            </div>
                            <?php the_content() ?>
                            <a href="blog-post.html" class="read-more">Read More</a>
                        </div>
                    </div>
                <?php endwhile ?>
                <!-- Post item -->

                <!-- Pagination -->
                <div class="page-pagination">
                    <a class="active" href="">01.</a>
                    <a href="">02.</a>
                    <a href="">03.</a>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        <li><a href="#">Vestibulum maximus</a></li>
                        <li><a href="#">Nisi eu lobortis pharetra</a></li>
                        <li><a href="#">Orci quam accumsan </a></li>
                        <li><a href="#">Auguen pharetra massa</a></li>
                        <li><a href="#">Tellus ut nulla</a></li>
                        <li><a href="#">Etiam egestas viverra </a></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Instagram</h2>
                    <ul class="instagram">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/1.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/2.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/3.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/4.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/5.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/6.jpg" alt=""></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        <li><a href="">branding</a></li>
                        <li><a href="">identity</a></li>
                        <li><a href="">video</a></li>
                        <li><a href="">design</a></li>
                        <li><a href="">inspiration</a></li>
                        <li><a href="">web design</a></li>
                        <li><a href="">photography</a></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Quote</h2>
                    <div class="quote">
                        <span class="quotation">‘​‌‘​‌</span>
                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
                    </div>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Add</h2>
                    <div class="add">
                        <a href=""><img src="<?= get_template_directory_uri(); ?>/img/add.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->


<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form">
                    <input type="text" placeholder="Your e-mail here">
                    <button class="site-btn btn-2">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->

<?php
get_template_part('templates/contact');

get_footer();

?>
</body>

</html>