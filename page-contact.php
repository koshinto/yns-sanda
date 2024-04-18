<?php
get_header();

$msg = "";

$to = "tyokoyomi@yns-sanda.jp";
$subject = "テストメールを送信しました";
$message = "コンタクトフォームへのアクセスがありました";

if( wp_mail( $to, $subject, $message ) ) {
  $msg = "テストメールが送信されました";
} else {
  $msg = "メール送信に失敗しました";
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
              <?php if( $msg ): ?>
              <div class="message">
                <p><?php echo $msg; ?></p>
              </div>
              <?php endif; ?>
              <dl class="form-group">

                <dt class="form-label">
                  <label for="username">氏名<span class="text-chip text-chip-require">必須</span></label>
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