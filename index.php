<?php get_template_part('templates/page', 'header'); ?>
    
<section class="row">
  <?php while (have_posts()) : the_post(); ?>

    <!-- article container -->
    <div class="col-md-4 col-sm-6 col-xs-12 article-container">
      <!-- display the article image -->
      <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( 'full' ); ?>
        </a>
      <?php endif; ?>

      <!-- display the article header -->
      <header class="article-header">
        <p class="category"><?php printf(  get_the_category_list(', ') ); ?></p>
        <h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        <p class="entry-time">
                    <?php printf(
                  /* the time the post was published */
                  '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
                  /* the author of the post */
              ); ?>
        </p>
      </header>

      <!-- display the article body -->
      <section class="entry-content">
        <?php
        $content = get_the_content();
        $trimmed_content = wp_trim_words( $content, 20, '...' );

        echo '<p>'.$trimmed_content.'</p>';
        ?>
      </section>

      <!-- display the comments and social media -->
      <footer class="entry-share">
        <div class="comment-counter box">
          <a href="<?php comments_link(); ?>" class="fa fa-comment-o fa-2x">
          </a>
        </div>

        <div class="box share">
          <a href="#" class="fa fa-share fa-2x"></a>
        </div>

        <span><?php comments_number( $zero, $one, $more ); ?> </span>
      </footer>


    </div>
  <?php endwhile; ?>
</section>





<!-- default code -->
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
