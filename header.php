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
  <link href="https://fonts.googleapis.com/css2?family=BIZ+UDGothic&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/stylesheet/style.css" type="text/css">
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicon.svg" type="image/x-icon">
</head>
<body <?php body_class(); ?> >
<?php wp_head(); ?>
<header>
  <div class="site-description"><?php bloginfo('description'); ?></div>
  <div class="header-inner">
    <div class="sp-header">
      <!-- スマートフォン用のヘッダー -->
      <div class="header-top">
        <div class="header-logo">
          <?php custom_logo_script(); ?>
        </div>
        <div class="menu-btn pc-hidden">
          <div class="menu-btn-inner">
            <span class="menu-bar menu-bar-1"></span>
            <span class="menu-bar menu-bar-2"></span>
            <span class="menu-bar menu-bar-3"></span>
          </div>
        </div>
      </div>
      <div class="header-slide-wraper">
        <div id="header-slide" class="header-slide">
          <nav id="header-main-menus" class="main-menu">
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'place_main_menu',
                'container' => false
              )
            );
            ?>
          </nav>
          <nav id="header-global-nav" class="global-nav">
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'place_global',
                  'container' => false
                )
              );
              ?>
          </nav>
        </div>
      </div>
    </div>
    <div class="pc-header">
      <!-- パソコン用のヘッダー -->
      <div class="header-group">
        <div class="header-logo">
          <?php custom_logo_script(); ?>
        </div>
        <nav id="header-global-nav" class="global-nav">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'place_global',
              'container' => false
            )
          );
          ?>
        </nav>
      </div>
      <nav id="header-main-menus" class="main-menu">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'place_main_menu',
            'container' => false
          )
        );
        ?>
      </nav>
    </div>
  </div>
</header>