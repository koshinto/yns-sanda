<?php get_header(); ?>
<main id="single" class="single single-common">
  <article class="contents corporate">
    <?php get_template_part('template-parts/pagetitle'); ?>
    <div class="page-container">
      <?php
        if ( have_posts() ): while ( have_posts() ): the_post();
          $author_email = get_the_author_meta( 'user_email' );
          the_content();
      ?>
      <section id="writer">
        <div class="author-icon"><?php echo get_avatar( $author_email ); ?></div>
        <div class="author-profile">
          <h3 class="author-name"><?php the_author(); ?></h3>
          <p class="author-description"><?php echo get_the_author_meta( 'description' ); ?></p>
        </div>
      </section>
      <?php
        endwhile; endif;
      ?>
    </div>
  </article>

</main>
<?php
  get_footer();
?>