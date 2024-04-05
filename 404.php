<?php get_header(); ?>
<main id="page" class="page page-404">
  <div class="page-title">
    <?php
      get_template_part( 'template-parts/breadcrumb' );
      get_template_part( 'template-parts/pagetitle' );
    ?>
  </div>
  <div class="page-content">
    <div class="page-content-margin">
      <div class="page-content-body">
        <h2>Page not found</h2>
        <p>お探しのページを見つけることはできませんでした</p>
        <p class="btn"><a href="<?php echo esc_url( get_home_url() ); ?>">ホームに戻る</a></p>
      </div>
    </div>
    </div>
</main>
<?php get_footer(); ?>