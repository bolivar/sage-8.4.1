<!-- i dont need this for now -->
<!-- <?php get_template_part('templates/page', 'header'); ?> -->

<section class="row">
  <?php query_posts('showposts=6'); while (have_posts()) : the_post(); ?>

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
      <div class="entry-share">
        <div class="comment-counter box">
          <a href="<?php comments_link(); ?>" class="glyphicon glyphicon-comment">
          </a>
        </div>

        <div class="box share">
          <!-- <a href="#" class="glyphicon glyphicon-share-alt"></a> -->
            <div class="more-button glyphicon glyphicon-share-alt">
              <div class="share-container">
                <a href="#" class="fa fa-facebook fa-2x"></a>
                <a href="#" class="fa fa-twitter fa-2x"></a>
                <a href="#"  class="fa fa-instagram fa-2x"></a>
                <a href="#"  class="fa fa-pinterest fa-2x"></a>
              </div>
            </div>
        </div>

        <div class="more">
          <button type="submit" class="btn btn-default"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">View More</a></button>
        </div>

      </div>


    </div>
  <?php endwhile; ?>
</section>
