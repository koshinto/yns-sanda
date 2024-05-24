<?php get_header(); ?>
<main id="home" class="home page-home">
  <article class="contents">
    <section class="main-visual">
      <div class="main-visual-text">
        <p class="main-visual-paragraph">悩める新聞販売店・小売業界のオーナー様</p>
        <h1 class="main-visual-heading"><small>令和の</small>経営改革</h1>
        <p class="main-visual-button"><a href="/" class="btn btn-visual">相談する</a></p>
      </div>
      <div class="main-visual-image">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/main-visual.webp" alt="メインビジュアルのイメージ">
      </div>
    </section>
    <section class="mission">
      <div class="heading">
        <h2>私たちにできる提案</h2>
      </div>
      <div class="mission-step">
        <dl>
          <dd><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/google_map_icon.svg" alt="googleマップの活用"></dd>
          <dt>
            <h2>新媒体の活用</h2>
            <p>Googleマップなどを活用してユーザーからより認知されより集客しやすくします。</p>
          </dt>
        </dl>
        <dl>
          <dd><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/magnifying_glass_icon.svg" alt="地域課題の発見"></dd>
          <dt>
            <h2>地域課題の発見</h2>
            <p>オーナー様の地域にもきっとたくさんの課題があるはずです。</p>
          </dt>
        </dl>
        <dl>
          <dd><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/flash_icon.svg" alt="新規事業の開拓"></dd>
          <dt>
            <h2>新規事業の開拓</h2>
            <p>発見した地域課題の解決は新たなビジネスチャンスかもしれません。</p>
          </dt>
        </dl>
      </div>
      <div class="page-link">
        <p class="page-link-button"><a href="" class="btn btn-link">記事を読む</a></p>
      </div>
    </section>
  </article>
</main>
<?php get_footer(); ?>