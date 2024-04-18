<?php get_header(); ?>
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
              <h3>配達の停止のお申し込み</h3>
              <p>
                旅行や出張、帰省などでご不在にされる場合に新聞の一時休止ができます。防犯対策に有効ですので、ぜひご利用ください。
              </p>
              <div class="form-body">
              <dl class="form-group">

                <dt class="form-label">
                  <label for="username">氏名<span class="text-chip text-chip-require">必須</span></label>
                </dt>
                <dd class="form-input">
                  <input id="username" name="username" type="text">
                </dd>

                <dt class="form-label">
                  <label for="address">ご住所<span class="text-chip text-chip-require">必須</span></label>
                </dt>
                <dd class="form-input">
                  <input type="text" name="address" id="address">
                </dd>

                <dt class="form-label">
                  <label for="phone">電話番号<span class="text-chip text-chip-require">必須</span></label>
                </dt>
                <dd class="form-input">
                  <input type="number" name="phone" id="phone">
                </dd>

                <dt class="form-label">
                  <label for="email">メールアドレス</label>
                </dt>
                <dd class="form-input">
                  <input type="email" name="email" id="email">
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

                <dl class="form-label">
                  <label>新聞のお取り置き</label>
                </dl>
                <dd class="form-input form-checkbox">
                  <input type="checkbox" name="希望する（広告付）" id="stock-with-flyer" value="希望する（広告付）">
                  <label for="stock-with-flyer">希望する（広告付）</label>
                  <input type="checkbox" name="希望する（広告無）" id="stock" value="希望する（広告無）">
                  <label for="stock">希望する（広告無）</label>
                  <input type="checkbox" name="希望しない" id="non-stock" value="希望しない">
                  <label for="non-stock">希望しない</label>
                </dd>

                <dt class="form-label">
                  <label for="other">お問い合わせ</label>
                </dt>
                <dd>
                  <textarea name="other" id="other" rows="5" placeholder="不明な点がございましたら、入力ください"></textarea>
                </dd>
              </dl>

                <div class="form-agreement">
                  <input type="checkbox" name="同意する" id="form-confirm"><label for="form-confirm"><a
                      href="<?php echo esc_url(home_url('/privacy/')); ?>" target="_blank">プライバシーポリシー</a>に同意します</label>
                </div> <!-- form-agreement -->

                <div class="form-full-width">
                  <input type="submit" value="送信">
                </div>
              </div> <!-- form-full-width -->
            </div> <!-- form-body -->
          </form>
        </div> <!-- form-content -->
        <section class="info info-phone">
          <h2>電話でお申し込み</h2>
          <div class="info-group">
            <p class="number-wrap"><small>TEL.</small><strong class="number number-phone">079-563-2558</strong></p>
            <p><span class="number">9:00〜17:00</span> / 日曜・祝日は休業</p>
            <p><small>※おかけ間違いのないようにご注意ください</small></p>
          </div> <!-- form-group -->
        </section>
      </article>
    </div> <!-- page-content-margin -->
  </div> <!-- page-content -->
</main>
<?php get_footer(); ?>