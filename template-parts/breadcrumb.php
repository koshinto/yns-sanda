<?php if( !is_home() && function_exists( 'bcn_display' ) ): ?>
  <!-- パンくずリスト -->
  <nav class="bread-crumb">
    <div class="bread-crumb-inner">
      <?php bcn_display(); ?>
    </div>
  </nav>
<?php endif; ?>
