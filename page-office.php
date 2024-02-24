<?php get_header(); ?>
<main class="page" class="office-page">
<?php
  if ( have_posts() ): while ( have_posts() ): the_post();
    the_content();
  endwhile; endif; ?>
<?php get_footer(); ?>