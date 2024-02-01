</main>
<footer>
  <div class="footer-area">
    <?php
    wp_nav_menu( array(
      'location' => 'place_footer',
      'container' => false
    ) );
    ?>

    <section class="corplogo footer-corplogo">
      <img class="right logo-right" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/svg/logo-light.svg" alt="logo">
      <img class="dark logo-dark" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/svg/logo-dark.svg" alt="logo">
    </section>
    
    <section class="copyright">
      <p><small>&copy; <span class="year"><?php echo date('Y'); ?></span> YNS-Sanda Co., Ltd.</small></p>
    </section>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/menu.js"></script>
</body>
</html>