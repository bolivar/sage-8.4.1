<section>
    <h2>Recent Posts</h2>
    <ul class="top">
    <?php
    $recent_posts = wp_get_recent_posts(4);
    foreach( $recent_posts as $recent ){
      echo '<li class="post">';
      echo '<figure><a" href="' . get_permalink($recent["ID"]) . '">' .  get_the_post_thumbnail ($recent["ID"], 'thumbnail')   .'</a></figure>';
      echo '<header><h4><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </h4> </header>';
      echo '<p>' . get_the_time("F jS, Y") . '</p>';
      echo '</li>';
    }
    ?>
    </ul>
</section>

<section>
   <h2>Shop Now</h2>
  <div class="shop-now">
    <div>
      <img src="http://localhost/wordpress/wp-content/uploads/2015/09/AMBER_K210208_CO.jpg" alt="" />
      <p>DAFFODIL JACKET</p>
      <button class="btn btn-default" type="button" name="button">shop now</button>
    </div>
    <div>
      <img src="http://localhost/wordpress/wp-content/uploads/2015/09/AMBER_K210208_CO.jpg" alt="" />
      <p>DAFFODIL JACKET</p>
      <button class="btn btn-default" type="button" name="button">shop now</button>
    </div>
    <div>
      <img src="http://localhost/wordpress/wp-content/uploads/2015/09/AMBER_K210208_CO.jpg" alt="" />
      <p>DAFFODIL JACKET</p>
      <button class="btn btn-default" type="button" name="button">shop now</button>
    </div>
  </div>
</section>

<?php dynamic_sidebar('sidebar-primary'); ?>
