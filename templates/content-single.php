<?php while (have_posts()) : the_post(); ?>
  <section class="row">
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="col-md-1 col-sm-1 hidden-xs">
      <div class="share-side">
          <a class="addthis_button_facebook addthis_32x32_style atss atss-left at4-show"></a>
          <a class="addthis_button_twitter addthis_32x32_style atss atss-left at4-show "></a>
          <!--<a class="addthis_button_pinterest addthis_32x32_style atss atss-left at4-show"></a>-->
          <a class="addthis_button_email addthis_32x32_style atss atss-left at4-show"></a>
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
