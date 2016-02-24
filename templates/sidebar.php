<?php dynamic_sidebar('sidebar-primary'); ?>
<?php while (have_posts()) : the_post(); ?>
<section>
    <h2>Recent Posts</h2>
    <ul>
    <?php
    $recent_posts = wp_get_recent_posts();
    foreach( $recent_posts as $recent ){

      echo '<?php the_post_thumbnail( "thumbnail" ); ?>';
      echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
    }
    ?>
    </ul>
</section>
<?php endwhile; ?>
