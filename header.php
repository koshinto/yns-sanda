<!DOCTYPE html>
<html lang="ja">
<head prefix="og:<?php echo esc_url(home_url()); ?>">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta property="og:url" content="<?php echo esc_html(home_url()); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php $description; ?>">
  <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ogp-image.webp">
  <title><?php echo esc_html(wp_get_document_title()); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/stylesheet/style.css" type="text/css">
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicon.svg" type="image/x-icon">
</head>
<body <?php body_class(); ?> >
<?php wp_head(); ?>
<header>
  <div class="header-inner">
    <div class="sp-header-icon">
      <span id="sp-menu-open" class="sp-header-icon sp-menu-open">
        <i class="fa-solid fa-bars"></i>
      </span>
    </div>
    <div class="header-title">
      <?php custom_logo_script(); ?>
    </div>
    <nav class="header-nav-menu">
      <div class="sp-header-icon">
        <span id="sp-menu-close" class="sp-header-icon sp-menu-close">
          <i class="fa-solid fa-xmark"></i>
        </span>
      </div>
      <?php 
        wp_nav_menu(
          array(
            'theme_location' => 'place_global',
            'container' => false,
          )
        );
        wp_nav_menu(
          array(
            'theme_location' => 'place_social_service',
            'container' => false,
            'menu_class' => 'sns-menu',
            )
        );
      ?>
    </nav>
    <div class="header-icon"></div>
  </div>
</header>