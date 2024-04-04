<?php get_header(); ?>
<main id="page" class="page page-index page-category">
  <div class="page-title">
    <?php
      if ( is_single() || is_category() ) {
        get_template_part( 'template-parts/breadcrumb' );
      }
        get_template_part( 'template-parts/pagetitle' );
        if ( have_posts() ):
    ?>
  </div>
  <div class="page-content">
    <ul class="post">
    <?php 
      while ( have_posts() ): the_post();
    ?>
      <li class="post-item">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'full' ); ?>
          <h2 class="post-title"><?php the_title(); ?></h2>
          <p class="post-date"><?php echo get_the_date(); ?></p>
          <p class="post-excerpt"><?php the_excerpt(); ?></p>
        </a>
      </li>
    <?php endwhile; ?>
    </ul>
  </div>
  <?php endif; ?>
</main>
<?php
  dynamic_sidebar( 'bottom-widget-area' );
  get_footer();
?>