<?php if( !is_home() ): // ページタイトルを表示するページ ?>
  <?php if( is_single() || is_page() ): // ページタイトルを表示 ?>
  <h1 class="page-title"><?php echo get_the_title(); ?></h1>
<?php elseif( is_category() ): ?>
  <h1 class="page-title"><?php single_cat_title() ?></h1>
<?php elseif( is_404() ): // 404ページ ?>
  <h1 class="page-title">お探しのページは見つかりませんでした</h1>
<?php endif; ?>
<?php endif; ?>