 <!-- Commert Form -->
 <div class="row">
     <div class="col-md-9 comment-from">
         <h2>Laissez un commentaire</h2>
         <form action="<?= get_home_url() ?>/wp-comments-post.php" method="post" class="form-class">
             <div class="row">
                 <div class="col-sm-6">
                     <input type="text" name="name" placeholder="Votre nom">
                 </div>
                 <div class="col-sm-6">
                     <input type="text" name="email" placeholder="Votre Email">
                 </div>
                 <div class="col-sm-12">
                     <input type="text" name="url" placeholder="Sujet">
                     <input type="hidden" name="comment_post_ID" value="131" id="comment_post_ID">
                     <input id="comment_parent" type="hidden" name="comment_parent" value="0">
                     <textarea name="comment" placeholder="Message"></textarea>
                     <input name="submit" type="submit" class="site-btn" value="Envoyé"></button>
                 </div>
             </div>
         </form>
     </div>
 </div>