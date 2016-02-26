<section>
    <h2>Recent Posts</h2>
    <ul class="top">
    <?php
    $recent_posts = wp_get_recent_posts(4);
    foreach( $recent_posts as $recent ){
      echo '<li class="post">';
      echo '<figure><a" href="' . get_permalink($recent["ID"]) . '">' .  get_the_post_thumbnail ($recent["ID"], 'thumbnail')   .'</a></figure>';
      echo '<header><h4><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </h4> </header>';
      echo '<p>' . get_the_time('F jS, Y', $recent["ID"]) . '</p>';
      echo '</li>';
    }
    ?>
    </ul>
</section>

<section>
   <h2>Shop Styles</h2>
  <div class="shop-now">
    <div>
      <img src="http://www.shoplimitededitions.com/v/vspfiles/photos/M105546-4.jpg" alt="" />
      <p>DAFFODIL JACKET</p>
      <a class="btn btn-default" type="button" href="http://www.shoplimitededitions.com/product-p/m105546.htm" target="_blank" name="button">Shop Now</a>
    </div>
    <div>
      <img src="http://www.shoplimitededitions.com/v/vspfiles/photos/M105581-4.jpg" alt="" />
      <p>BRILLIANTBLUE JACKET</p>
      <a class="btn btn-default" type="button" href="http://www.shoplimitededitions.com/product-p/m105581.htm" target="_blank" name="button">Shop Now</a>
    </div>
    <div>
      <img src="http://www.shoplimitededitions.com/v/vspfiles/photos/M112582-2T.jpg" alt="" />
      <p>CITYBLOCK BLOUSE</p>
      <a class="btn btn-default" type="button" href="http://www.shoplimitededitions.com/product-p/m112582.htm" target="_blank" name="button">Shop Now</a>
    </div>
  </div>
</section>

<?php dynamic_sidebar('sidebar-primary'); ?>
