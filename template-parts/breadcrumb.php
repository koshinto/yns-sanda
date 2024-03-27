<?php if( !is_home() && function_exists( 'bcn_display' ) ): ?>
  <!-- パンくずリスト -->
  <nav class="bread-crumb">
      <?php bcn_display(); ?>
  </nav>
<?php endif; ?>
