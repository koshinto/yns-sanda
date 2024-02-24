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
  'place_footer_company' => 'フッター企業情報',
  'place_footer_service' => 'フッターサービス情報',
  'place_user_action' => 'ユーザーアクション'
) );

// JavaScript読み込み
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
function my_custom_scripts() {
  wp_enqueue_script( 'slider-script', get_template_directory_uri() . '/assets/js/slider.js' );
  // wp_enqueue_script( 'menu-script', get_template_directory_uri() . '/assets/js/menu.js' );
}

// ウィジェットの有効化
function theme_widgets_init() {
  register_sidebar( array(
    'name' => 'ボトムウィジェットエリア',
    'id' => 'bottom-widget-area',
    'description' => '投稿ページ用の下部に表示する',
    'before_widget' => '<aside class="bottom-widget">',
    'after_widget' => '</aside>',
  ) );
};
add_action( 'widgets_init', 'theme_widgets_init' );