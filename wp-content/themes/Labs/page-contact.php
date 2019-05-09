<?php get_header() ?>
<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Contact</h2>
            <div class="page-links">
                <a href="<?php echo get_site_url(); ?>">Home</a>
                <span>Contact</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end -->


<!-- Google map -->
<div class="map" id="map-area">
    <iframe src="https://maps.google.com/map?q=<?= urlencode(get_theme_mod('adresse_map')) ?>" frameborder="0"></iframe>
</div>


<?php
get_template_part('templates/contact');

get_footer();

?>
</body>

</html>