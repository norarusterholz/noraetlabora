<?php get_header(); ?>
  <main class="b-main-content">
    <section class="b-article-list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="b-article">
        <header class="b-article-header">
          <time class="b-article-date"><?php the_time( 'F j, Y' ); ?></time>
          <h1 class="b-article-title">
            <a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a>
          </h1> 
        </header>
        <?php the_content(); ?>
      </article>
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria') ?></p>    
    <?php endif; ?>
    </section>
  </main>
<?php get_footer(); ?>