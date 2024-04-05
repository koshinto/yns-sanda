<?php get_header(); ?>
<main id="page" class="page page-post">
  <div class="page-title">
    <?php
      get_template_part( 'template-parts/breadcrumb' );
      get_template_part( 'template-parts/pagetitle' );
    ?>
  </div>
  <div class="page-content">
    <div class="page-content-margin">
      <div class="page-content-body">
        <?php
          if ( have_posts() ): while ( have_posts() ): the_post(); 
            the_content();
          endwhile; endif;
        ?>
      </div>
    </div>
    </div>
</main>
<?php
  dynamic_sidebar( 'bottom-widget-area' );
  get_footer();
?>