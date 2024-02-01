<?php
// アイキャッチ画像の有効化
add_theme_support( 'post-thumbnails' );
// キービジュアルの画像サイズ
add_image_size( 'key-visual', 1024, 640, true );
// 記事一覧の画像サイズ
add_image_size( 'common', 520, 240, true );
add_image_size( 'post', 320, 240, true );

// カスタムメニュー
register_nav_menus( array(
  'place_global' => 'グローバル',
  'place_sub_global' => 'サブメニュー',
  'place_footer' => 'フッター'
) );

// JavaScript読み込み
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
function my_custom_scripts() {
  wp_enqueue_script( 'slider-script', get_template_directory_uri() . '/assets/js/slider.js' );
  // wp_enqueue_script( 'menu-script', get_template_directory_uri() . '/assets/js/menu.js' );
}