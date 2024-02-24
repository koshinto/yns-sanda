<?php get_header(); ?>
<main class="page">
<ul>
<?php
  if ( have_posts() ): while ( have_posts() ): the_post();
?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
</ul>
</main>
<?php
  dynamic_sidebar( 'bottom-widget-area' );
  get_footer();
?>