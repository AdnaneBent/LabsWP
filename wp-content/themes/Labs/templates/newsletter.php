<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form" action="<?= admin_url('admin-post.php'); ?>" method="post">
                    <input type="hidden" name="action" value="send-newsletter">
                    <input type="text" name="emailNew" placeholder="Votre Email ici">
                    <button class="site-btn btn-2">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->