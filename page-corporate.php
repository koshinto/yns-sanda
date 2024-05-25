<?php get_header(); ?>
<main id="page" class="page page-corporate">
  <article class="contents corporate">
    <?php get_template_part('template-parts/pagetitle'); ?>
    <div class="page-container">
      <?php
        if ( have_posts() ): while ( have_posts() ): the_post();
          the_content();
        endwhile; endif;
      ?>
    </div>
  </article>
</main>
<?php
  get_footer();
?>