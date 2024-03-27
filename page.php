<?php get_header(); ?>
<main id="page" class="common-page">
<?php
  get_template_part( 'template-parts/breadcrumb' );
  get_template_part( 'template-parts/pagetitle' );
  
  if ( have_posts() ): while ( have_posts() ): the_post();
    the_content();
  endwhile; endif; ?>
</main>
<?php
  dynamic_sidebar( 'bottom-widget-area' );
  get_footer();
?>