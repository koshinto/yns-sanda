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
  <link href="https://fonts.googleapis.com/css2?family=BIZ+UDGothic:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/stylesheet/style.css" type="text/css">
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.svg" type="image/x-icon">
</head>
<body <?php body_class(); ?> >
<?php wp_head(); ?>
<header>
  <div id="header-nav-wrap">
    <section id="header-nav">
      <a id="header-logo" class="corplogo light" href="<?php echo esc_url( home_url() ); ?>"><img class="light logo-light" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/svg/logo-light.svg" alt="logo"></a>
      <div id="menu-open-btn">
        <div id="menu-open-btn-inner">
          <span></span><span></span><span></span>
        </div>
      </div>
      <div id="header-sub-group" class="sp-hidden">
        <nav id="global-nav">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'place_global',
              'container' => false
              ) );
              ?>
        </nav>
        <nav id="sub-nav">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'place_sub_global',
              'container' => false
            ) );
          ?>
        </nav>
        <div id="search-form">
          <form action="<?php echo esc_url( home_url() ); ?>" method="get">
            <input type="text" name="s" class="search-input" placeholder="キーワードを入力" value="<?php the_search_query(); ?>">
          </form>
        </div>
      </div>
    </section>
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