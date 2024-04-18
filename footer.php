<footer id="footer">
  <nav class="sitemap">
    <?php 
    wp_nav_menu( array(
      'theme_location' => 'place_sitemap',
      'container' => false
    ) )
    ?>
  </nav>
  <div class="footer-info">
    <div class="footer-logo">
      <p class="site-description"><?php bloginfo( 'description' ); ?></p>
      <h2 >ワイエヌエス三田</h2>
    </div>
    <nav class="sns-icon">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'place_social_service',
        'container' => false
      ) )
      ?>
    </nav>
    <div class="modest-text">
      <p class="copyright"><small>&copy; 2024 YNS-Sanda.co,ltd</small></p>
      <nav class="legal">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'place_legal',
          'container' => false
        ))
        ?>
      </nav>
    </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script type="module" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/menu.js"></script>
<script type="module" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/tabpanel.js"></script>
</body>
</html>