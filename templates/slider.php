<article class="center">
<?php while (have_posts()) : the_post(); ?>
  <div><?php the_post_thumbnail( 'full' ); ?>
    <div class="featured-title">
      <aside class="">
        <p class="category"><?php printf(  get_the_category_list(', ') ); ?></p>
      </aside>
      <div class="post-title">
        <h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
      </div>
      <div class="link">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Read more <span class="
glyphicon glyphicon-arrow-right"></span></a>
      </div>
    </div>
  </div>
<?php endwhile; ?>
</article>
