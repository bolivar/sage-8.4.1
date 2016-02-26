<?php while (have_posts()) : the_post(); ?>
  <section class="row">
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="col-md-1 col-sm-1 hidden-xs">
      <div class="share-side">
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/Eccoci-Official-201920033314097/" class="fa fa-facebook"></a>
        <a href="https://www.twitter.com/intent/tweet?url=https://twitter.com/shop_limitededs&text=Check out this awesome post by Limited Editions" target="_blank" class="fa fa-twitter"></a>
        <a href="http://www.pinterest.com/pin/create/button/?url=https://www.pinterest.com/ShopLimited/shop-limited-editons/" target="_blank"  class="fa fa-pinterest"></a>
        <a target="_blank" class="fa fa-envelope" href="mailto:friend@gmail.com?subject=Via BlogLimitedEditions.com&amp;body=Check this out" id="emaillink"></a>
      </div>
    </div>
    <article <?php post_class('col-md-11 col-sm-11 col-xs-12'); ?>>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer>
      <?php comments_template('/templates/comments.php'); ?>
    </article>
  </section>
<?php endwhile; ?>
