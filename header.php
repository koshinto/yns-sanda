<!DOCTYPE html>
<html lang="ja">
<head prefix="og:<?php echo esc_url( home_url() ); ?>">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <meta property="og:url" content="<?php echo esc_html( home_url() ); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
  <meta property="og:description" content="<?php $description; ?>">
  <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ogp-image.webp">
  <title><?php echo esc_html( wp_get_document_title() ); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/stylesheet/style.css" type="text/css">
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.svg" type="image/x-icon">
</head>
<body <?php body_class(); ?> >
<?php wp_head(); ?>
<header>
  <div class="site-description"><?php bloginfo( 'description'); ?></div>
  <div class="header-inner">
    <div class="header-logo">
      <?php custom_logo_script(); ?>
    </div>
      <div class="menu-btn pc-hidden">
        <div class="menu-btn-inner menu-bar-close">
          <span class="menu-bar menu-bar-1"></span>
          <span class="menu-bar menu-bar-2"></span>
          <span class="menu-bar menu-bar-3"></span>
        </div>
      </div>
    <div id="header-menus" class="menu-group sp-menu-group-hidden">
      <nav id="header-global-nav" class="global-nav">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'place_global',
            'container' => false
          ) );
        ?>
      </nav>
      <nav id="header-button-menus" class="button-menus">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'place_button_menu',
            'container' => false
          ));
        ?>
      </nav>
    </div>
  </div>
  
  <?php if( !is_home() && function_exists( 'bcn_display' ) ): ?>
    <!-- パンくずリスト -->
    <nav class="bread-crumb">
        <?php bcn_display(); ?>
    </nav>
  <?php endif; ?>

  <?php if( !is_home() ): // ページタイトルを表示するページ ?>
  <div id="page-title">
    <?php if( is_single() || is_page() ): // ページタイトルを表示 ?>
    <h1><?php echo get_the_title(); ?></h1>
  <?php elseif( is_404() ): // 404ページ ?>
    <h1>お探しのページは見つかりませんでした</h1>
  <?php endif; ?>
  </div>
  <?php endif; ?>
</header>