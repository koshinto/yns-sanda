<?php get_header(); ?>
<main id="page">
  <div class="page-content">
    <h3>新聞を無料でお試ししませんか？</h3>
    <p>７日間無料で新聞をお試しいただけます。無理に勧誘することはありませんのでご安心ください。
      購読のお申し込みもこのフォームより承ります。
    </p>
    <?php
      if ( have_posts() ): while ( have_posts() ): the_post();
        the_content();
      endwhile; endif;
    ?>
    <form action="/subscription" method="post">
      <dl class="form-group">
        <dt class="form-label">
          <label for="type">ご希望の商品</label>
        </dt>
        <dd class="form-input">
          <select name="type" id="type">
            <optgroup label="読売新聞">
              <option value="読売新聞１週間お試し">読売新聞１週間お試し</option>
              <option value="読売新聞ご購読">読売新聞ご購読　4,150円/月（税込）〜</option>
            </optgroup>
            <optgroup label="日本経済新聞">
              <option value="日本経済新聞１週間お試し">日本経済新聞１週間お試し</option>
              <option value="日本経済新聞ご購読">日本経済新聞ご購読　4,800円/月（税込）〜</option>
            </optgroup>
            <optgroup label="スポーツ報知">
              <option value="スポーツ報知１週間お試し">スポーツ報知１週間お試し</option>
              <option value="スポーツ報知ご購読">スポーツ報知ご購読　3,700円/月（税込）</option>
            </optgroup>
            <optgroup label="読売KODOMO新聞">
              <option value="読売KODOMO新聞お試し">読売KODOMO新聞お試し</option>
              <option value="読売KODOMO新聞ご購読">読売KODOMO新聞ご購読　550円/月（税込）</option>
            </optgroup>
            <optgroup label="読売中高生新聞">
              <option value="読売中高生新聞お試し">読売中高生新聞お試し</option>
              <option value="読売中高生新聞ご購読">読売中高生新聞ご購読　850円/月（税込）</option>
            </optgroup>
            <optgroup label="日経MJ">
              <option value="日経MJお試し">日経MJお試し</option>
              <option value="日経MJご購読">日経MJご購読　2,300円/月（税込）</option>
            </optgroup>
            <optgroup label="The Japan News">
              <option value="The Japan News１週間お試し">The Japan News１週間お試し</option>
              <option value="The Japan Newsご購読">The Japan Newsご購読　3,665円/月（税込）</option>
            </optgroup>
          </select>
        </dd>
      </dl>
      <hr>
      <dl class="form-group">
        <dt class="form-label">
          <label for="c-name">氏名<span class="text-chip text-chip-require">必須</span></label>
        </dt>
        <dd class="form-input">
          <input id="c-name" name="c-name" type="text">
        </dd>
        <dt class="form-label">
          <label for="c-email">メールアドレス<span class="text-chip text-chip-require">必須</span></label>
        </dt>
        <dd class="form-input">
          <input type="email" name="c-email" id="c-email">
        </dd>
        <dt class="form-label">
          <label for="c-address">ご住所<span class="text-chip text-chip-require">必須</span></label>
        </dt>
        <dd class="form-input">
          <input type="text" name="c-address" id="c-address">
        </dd>
        <dt class="form-label">
          <label for="from">配達開始日<span class="text-chip text-chip-require">必須</span></label>
        </dt>
        <dd class="form-input">
          <input type="date" name="from" id="from">
        </dd>
        <dt class="form-label">
          <label for="payment">お支払い<span class="text-chip text-chip-normal">購読の方のみ</span></label>
        </dt>
        <dd class="form-input">
          <select name="payment" id="payment">
            <option value="cash">現金</option>
            <option value="card">クレジットカード</option>
            <option value="debit">口座振替</option>
            <option value="cvs">コンビニ</option>
          </select>
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