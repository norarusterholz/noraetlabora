<?php get_header(); ?>
<?php get_search_form(); ?>
  <main class="b-main-content">
    <section class="b-article-list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <a href="<?php echo post_permalink( $ID ); ?>">
        <article class="b-article">
          <header class="b-article-header">
            <time class="b-article-date"><?php the_time( 'F j, Y' ); ?></time>
            <h1 class="b-article-title">
              <?php the_title(); ?>
            </h1> 
          </header>
         <?php the_excerpt(); ?>
        </article>
      </a>
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria') ?></p>    
    <?php endif; ?>
    </section>
  </main>
<?php get_footer(); ?>