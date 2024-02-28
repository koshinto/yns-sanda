<?php get_header(); ?>
<main id="page">
  <div class="page-content">
    <h3>配達の停止のお申し込み</h3>
    <p>
      旅行や出張、帰省などでご不在にされる場合に新聞の一時休止ができます。防犯対策に有効ですので、ぜひご利用ください。
    </p>
    <?php
      if ( have_posts() ): while ( have_posts() ): the_post();
        the_content();
      endwhile; endif;
    ?>
    <form action="/pause" method="post">
      <dl class="form-group">
        <dt class="form-label">
          <label for="c-name">氏名<span class="text-chip text-chip-require">必須</span></label>
        </dt>
        <dd class="form-input">
          <input id="c-name" name="c-name" type="text">
        </dd>
        <dt class="form-label">
          <label for="c-address">ご住所<span class="text-chip text-chip-require">必須</span></label>
        </dt>
        <dd class="form-input">
          <input type="text" name="c-address" id="c-address">
        </dd>
        <dt class="form-label">
          <label for="c-email">電話番号<span class="text-chip text-chip-require">必須</span></label>
        </dt>
        <dd class="form-input">
          <input type="number" name="phone" id="phone">
        </dd>
        <dt class="form-label">
          <label for="c-email">メールアドレス</label>
        </dt>
        <dd class="form-input">
          <input type="email" name="c-email" id="c-email">
          <p>※Gmailには送信できません</p>
        </dd>
        <dt class="form-label">
          <label for="from-date">配達停止の開始日<span class="text-chip text-chip-require">必須</span></label>
        </dt>
        <dd class="form-input">
          <input type="date" name="from-date" id="from-date">
        </dd>
        <dt class="form-label">
          <label for="to-date">配達停止の終了日<span class="text-chip text-chip-require">必須</span></label>
        </dt>
        <dd class="form-input">
          <input type="date" name="to-date" id="to-date">
        </dd>
        <dt class="form-label">
          <label for="other">お問い合わせ</label>
        </dt>
        <dd>
          <textarea name="other" id="other" rows="5" placeholder="不明な点がございましたら、入力ください"></textarea>
        </dd>
      </dl>
      <div class="form-agreement">
        <input type="checkbox" name="confirm" id="form-confirm"><label for="form-confirm"><a href="">プライバシーポリシー</a>に同意します</label>
      </div>
      <div class="form-full-width">
        <input type="submit" value="送信">
      </div>
    </form>
    <section class="info info-phone">
      <h5>電話でお申し込み</h5>
      <p><small>TEL.</small><span class="number phone-number">079-563-2558</span></p>
      <p>受付：平日 <span class="number">9:00〜17:00</span>  日曜・祝日は休業</p>
      <p>※おかけ間違いのないようにご注意ください</p>
    </section>
  </div>
</main>
<?php
  dynamic_sidebar( 'bottom-widget-area' );
  get_footer();
?>