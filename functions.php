<?php
// アイキャッチ画像の有効化
add_theme_support( 'post-thumbnails' );
// カスタムロゴの有効化
add_action( 'after_setup_theme', function() { add_theme_support( 'custom-logo' ); } );
// キービジュアルの画像サイズ
add_image_size( 'key-visual', 1024, 640, true );
// 記事一覧の画像サイズ
add_image_size( 'common', 520, 240, true );
add_image_size( 'post', 320, 240, true );
add_image_size( 'logo', 200, 50, true );

// SVGファイルのサポート
function custom_mime_types( $mimes ) {	$mimes['svg'] = 'image/svg+xml';	return $mimes;
}
add_filter( 'upload_mimes', 'custom_mime_types' );

// カスタムメニュー
register_nav_menus( array(
  'place_global' => 'グローバルメニュー',
  'place_button_menu' => 'ヘッダーボタンメニュー',
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

// ホームへリンクするロゴを表示
function custom_logo_script() {
  $logo = $tag = null;
  if ( has_custom_logo() ) {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
    $tag = '<a id="header-logo" class="corplogo light" href="' . home_url() . '">'. '<img src="' . $logo[0] . '" alt="logo"></a>';
  } else {
    $tag = '<a id="header-logo" class="corplogo light" href="' . home_url() . '"><h1>' . get_bloginfo( 'name' ) . '</h1></a>';
  }
  echo $tag;
};

function theme_customizer_extension($wp_customize) {
  $wp_customize->add_section( 'corporate_message', array(
    'title' => 'コーポレートメッセージ',
    'property' => 201
  ) );
  $wp_customize->add_setting( 'catch-copy', array(
    'default' => '',
    'type' => 'option',
    'transport' => 'postMessage',
  ) );
  $wp_customize->add_control( 'corp_msg', array(
    'settings' => 'catch-copy',
    'label' => 'トップページのキャッチコピー',
    'section' => 'corporate_message',
    'type' => 'text',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'catch-copy',
      array(
        'label' => 'キャッチコピーの背景',
        'section' => 'corporate_message',
        'setting' => 'catch-copy-image',
      )
    )
  );
}
add_action( 'customize_register', 'theme_customizer_extension' );