<?php get_header(); ?>
<main class="page" class="common-page">
<?php
  if ( have_posts() ): while ( have_posts() ): the_post();
    the_content();
  endwhile; endif; ?>
</main>
<?php
  dynamic_sidebar( 'bottom-widget-area' );
  get_footer();
?>