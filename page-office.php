<?php get_header(); ?>
<main id="page" class="office-page">
  <div class="page-content">
    <?php
      if ( have_posts() ): while ( have_posts() ): the_post();
        the_content();
      endwhile; endif;
    ?>
  </div>
</main>
<?php
  dynamic_sidebar( 'bottom-widget-area' );
  get_footer();
?>