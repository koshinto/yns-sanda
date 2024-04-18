<?php
get_header();

$msg = "";

$admin_email = "tyokoyomi@yns-sanda.jp";
$admin_subject = "問い合わせがありました";
$user_subject = "お問い合わせが送信されました";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $msg = "送信されました";
  
  $username = $_POST["username"];
  $email = htmlentities($_POST["email"]);
  $phone = htmlentities($_POST["phone"]);
  $message = htmlentities($_POST["message"]);

  // if (isset($username)) {
  //   array_push($msg, "お名前が入力されていません");
  // }
  // if (isset($email) && is_email($email)) {
  //   array_push($msg, "メールアドレスが正しくありません");
  // }
  // if (isset($message)) {
  //   array_push($msg, "お問い合わせ内容が入力されていません");
  // }

  $timestamp = date("Y/m/d H:i");
  $headers = array(
    "Date: " . $timestamp . "\r\n",
    "From: " . $email . "\r\n",
    "Content-Type: text/plain" . "\r\n"
  );

  wp_mail($email, $subject, $message, $headers);
  wp_safe_redirect(home_url());
  exit;

} else {
  $username = $email = $message = $phone = null;
}

?>
<main id="page">
  <div class="page-title">
    <?php
    get_template_part('template-parts/breadcrumb');
    get_template_part('template-parts/pagetitle');
    ?>
  </div>
  <div class="page-content">
    <div class="page-content-margin">
      <article class="page-content-body">
        <div class="form-content">
          <form action="<?php the_permalink(); ?>" method="post">
            <div class="form-body">
              <h3>お問い合わせありがとうございます</h3>
              <p>
                お問い合わせいただく場合は、下記の入力フォームに必要事項をご記入いただき、
                プライバシーポリシーに同意の上、「入力内容を確認する」ボタンをクリックしてください。
                内容を確認の上、1〜3営業日以内に担当者よりご連絡いたします。
              </p>
            </div>
            <div class="form-body">
              <?php if ($msg): ?>
                <div class="msg">
                  <p><?php echo $msg; ?></p>
                </div>
              <?php endif; ?>
              <dl class="form-group">

                <dt class="form-label">
                  <label for="username">お名前<span class="text-chip text-chip-require">必須</span></label>
                </dt>
                <dd class="form-input">
                  <input id="username" name="username" type="text">
                </dd>

                <dt class="form-label">
                  <label for="email">メールアドレス<span class="text-chip text-chip-require">必須</span></label>
                </dt>
                <dd class="form-input">
                  <input type="email" name="email" id="email">
                </dd>

                <dt class="form-label">
                  <label for="phone">電話番号</label>
                </dt>
                <dd class="form-input">
                  <input type="text" name="phone" id="phone">
                </dd>

                <dt class="form-label">
                  <label for="message">お問い合わせ<span class="text-chip text-chip-require">必須</span></label>
                </dt>
                <dd>
                  <textarea name="message" id="message" rows="5" placeholder="不明な点がございましたら、入力ください"></textarea>
                </dd>
              </dl>

              <div class="form-agreement">
                <input type="checkbox" name="同意する" id="form-confirm"><label for="form-confirm"><a
                    href="<?php echo esc_url(home_url('/privacy/')); ?>" target="_blank">プライバシーポリシー</a>に同意します</label>
              </div>

              <div class="form-full-width">
                <input type="submit" value="送信">
              </div>
            </div>
          </form>
        </div>
        <section class="info info-phone">
          <h2>電話でお申し込み</h2>
          <div class="info-group">
            <p class="number-wrap"><small>TEL.</small><strong class="number number-phone">079-563-2558</strong></p>
            <p><span class="number">9:00〜17:00</span> / 日曜・祝日は休業</p>
            <p><small>※おかけ間違いのないようにご注意ください</small></p>
          </div>
        </section>
      </article>
    </div>
  </div>
</main>
<?php
get_footer();
?>