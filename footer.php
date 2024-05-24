<footer id="footer">
  <nav id="footer-sitemap" class="sitemap">
    <?php 
      wp_nav_menu(array(
        'theme_location' => 'place_sitemap',
        'container' => false,
        'menu_class' => 'sitemap-menu'
      ));
      wp_nav_menu(array(
        'theme_location' => 'place_legal',
        'container' => false,
        'menu_class' => 'legal-menu'
      ));
    ?>
  </nav>
  <div class="footer-inner">
    <div class="footer-logo">
      <h2 class="corporate">株式会社ワイエヌエス三田</h2>
    </div>
    <div class="address">
      <span class="footer-zipcode">〒669-1535</span>
      <span>兵庫県三田市南が丘1−52−11</span>
      <span class="footer-tel">TEL： 079-563-2558</span>
    </div>
    <div class="law-contents">
      <p class="copyright"><small>&copy; 2024 YNS-Sanda.co,ltd</small></p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/menu.js"></script>
</body>
</html>