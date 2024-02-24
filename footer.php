<footer>
  <div class="footer-area">
    <div class="sitemaps">
    <div class="sitemap service">
        <h5 class="sitemap-head">サービス</h5>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'place_footer_service',
          'container' => false
        ) );
        ?>
      </div>
      <div class="sitemap company">
        <h5 class="sitemap-head">企業</h5>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'place_footer_company',
          'container' => false
        ) );
        ?>
      </div>
    </div>

    <section class="logo-area">
      <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/svg/logo-light.svg" alt="logo">
    </section>
    
    <p class="copyright"><small>&copy; <span class="year"><?php echo date('Y'); ?></span> YNS-Sanda Co., Ltd.</small></p>
    <p class="support-browser">
      動作環境<br>
      対応OS:Windows 10以降, macOS 12以降<br>
      対応ブラウザ: Google Chrome117以降, Microsoft Edge117以降, Safari16以降, Mozilla FireFox71以降<br>
      ※Internet Explorerは動作対象外です。
    </p>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/menu.js"></script>
</body>
</html>