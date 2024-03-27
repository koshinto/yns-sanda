<?php get_header(); ?>
<main id="page">
  <?php
    get_template_part( 'template-parts/breadcrumb' );
    get_template_part( 'template-parts/pagetitle' );
  ?>
  <?php if ( have_posts() ): ?>
    <ul>
    <?php while ( have_posts() ): the_post(); ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    </ul>
  <?php endif; ?>
</main>
<?php
  dynamic_sidebar( 'bottom-widget-area' );
  get_footer();
?>