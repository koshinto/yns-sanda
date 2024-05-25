<?php
get_header();

$msg = '';
$errflg = false;
// display =  0 フォーム入力画面
//         =  1 フォーム確認画面
//         =  2 フォーム送信完了画面
//         = -1 エラー画面
$display = 0;
$domain = str_replace(['http://', 'https://'], '', home_url());

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $admin_email = get_bloginfo('admin_email');
  $admin_subject = '問い合わせがありました';
  $user_subject = 'お問い合わせが送信されました';
  
  $username = $_POST['username'];
  $email = htmlentities($_POST['email']);
  $phone = htmlentities($_POST['phone']);
  $message = 'メッセージ内容: \r\n' . htmlentities($_POST['message']);

  $headers .= 'Date: ' . date('Y/m/d H:i') . '\r\n';
  $headers .= 'From: ' . $email . '\r\n';
  $headers .= 'Content-Type: text/plain' . '\r\n';

  if(wp_mail($email, $user_subject, $message, $headers)) {
    $display = 2;
  } else {
    $display = -1;
  }
}

get_header();
?>
<main id="page" class="page page-contact">
  <article class="contents corporate">
    <?php
      get_template_part('template-parts/pagetitle');
      if ( have_posts() ): while ( have_posts() ): the_post();
        the_content();
      endwhile; endif;
    ?>
    <div class="page-container">
      <h2>お問い合わせフォーム</h2>
      <p>下記フォームに入力いただき、送信ください。</p>
      <form action="<?php the_permalink(); ?>" method="post"></form>
    </div>
  </article>
</main>
<?php
  get_footer();
?>