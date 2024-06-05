<?php get_header(); ?>
<main id="home" class="home page-home">
  <div class="contents">
    <section class="main-visual">
      <div class="main-visual-wrap">
        <div class="main-visual-left">
          <span class="main-headline handwrite">The Think.</span>
        </div>
        <div class="main-visual-right">
          <span class="main-visual-message">これからの新聞販売店を</span>
          <span class="main-visual-message">考える</span>
        </div>
      </div>
    </section>
    <section id="seminar">
      <div class="headline">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/seminar.svg" alt="セミナー">
        <p class="headline-subtext">セミナー情報</p>
      </div>
      <div class="seminars-wrap">
        <?php
        $the_query = new WP_Query(array(
          'category_name' => 'seminar',
          'posts_per_page' => 6
        ));
        if ($the_query->have_posts()):
          while ($the_query->have_posts()):
            $the_query->the_post();
            ?>
        <article class="post-seminar">
          <a href="<?php the_permalink(); ?>">
          <?php
            if( has_post_thumbnail() ):
               the_post_thumbnail( 'tile', array( 'class' => 'image'));
            else:
              echo '<img class="image no-image" src="' . esc_url(get_template_directory_uri()) . '/assets/images/1x/no_image.webp" alt="no image">';
            endif;
          ?>
              <div class="seminar-info">
                <h2 class="seminar-title"><?php the_title();?></h2>
                <span class="seminar-date"><?php the_date('Y.m.d'); ?></span>
                <span class="seminar-author"><?php the_author(); ?></span>
              </div>
          </a>
        </article>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </section>
    <section id="press">
      <div class="headline">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/press.svg" alt="セミナー">
        <p class="headline-subtext">プレスリリース</p>
      </div>
      <div class="presses-wrap">
        <?php
        $the_query = new WP_Query(array(
          'category_name' => 'press',
          'posts_per_page' => 6
        ));
        if ($the_query->have_posts()):
          while ($the_query->have_posts()):
            $the_query->the_post();
            ?>
        <article class="post-press">
          <a href="<?php the_permalink(); ?>">
          <span class="press-info press-date"><?php the_date('Y.m.d'); ?></span>
          <h2 class="press-info press-title"><?php the_title();?></h2>
          <?php
            if( has_post_thumbnail() ):
               the_post_thumbnail( 'thumbnail', array( 'class' => 'image'));
            else:
              echo '<img class="image no-image" src="' . esc_url(get_template_directory_uri()) . '/assets/images/1x/no_image.webp" alt="no image">';
            endif;
          ?>
          </a>
        </article>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </section>
    <section id="service">
      <div class="headline">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/service.svg" alt="サービス">
        <p class="headline-subtext">サービス</p>
      </div>
      <div class="services-wrap">
        <div class="service-item service-google-business">
          <div class="service-head">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/google_business.svg" alt="グーグルビジネスプロフィール">
            <h2 class="service-title">Googleビジネスプロフィール</h2>
          </div>
          <ul class="service-description">
            <li>Googleビジネスプロフィール開設代行</li>
            <li>Googleビジネスプロフィール運営代行</li>
          </ul>
          <div class="service-pricing">
            <p><span class="currency">￥</span>10,000<span class="price-per">/回 〜</span></p>
          </div>
        </div>

        <div class="service-item service-line">
          <div class="service-head">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/line.svg" alt="ライン">
            <h2 class="service-title">公式LINEアカウント</h2>
          </div>
          <ul class="service-description">
            <li>LINE公式アカウント開設代行</li>
            <li>LINE公式アカウント運営代行</li>
          </ul>
          <div class="service-pricing">
            <p><span class="currency">￥</span>10,000<span class="price-per">/回 〜</span></p>
          </div>
        </div>

        <div class="service-item service-website">
          <div class="service-head">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/window.svg" alt="ウェブサイト制作">
            <h2 class="service-title">店舗Webサイト</h2>
          </div>
          <ul class="service-description">
            <li>ホームページ制作</li>
            <li>留守止・お問い合わせフォーム設置</li>
          </ul>
          <div class="service-pricing">
            <p><span class="currency">￥</span>10,000<span class="price-per">/ページ 〜</span></p>
          </div>
        </div>

        <div class="service-item service-lecture">
          <div class="service-head">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/lecture.svg" alt="セミナー・講演">
            <h2 class="service-title">セミナー・講演</h2>
          </div>
          <ul class="service-description">
            <li>「私の経営戦略」</li>
            <li>「地域課題解決企業を目指す」</li>
            <li>「子供のためのお金の講座」</li>
            <li>「子供のための新聞読み方講座」</li>
            <li>「社会人のための新聞活用セミナー」</li>
          </ul>
          <div class="service-pricing">
            <p><span class="currency">￥</span>10,000<span class="price-per">/回 （１時間）〜</span></p>
          </div>
        </div>
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
    </section>
    <section id="main-tab-menu" class="tab-menu">
      <ul class="tab-label">
        <li class="tab-label-item" data-tab="1">プレスリリース</li>
        <li class="tab-label-item" data-tab="2">スケジュール</li>
      </ul>
      <div class="tab-panel-wrap">
        <?php get_template_part('template-parts/tab-menu', 'press', $args = array('category' => 'press', 'number' => 5, 'panel' => 1)); ?>
        <?php get_template_part('template-parts/tab-menu', 'seminar', $args = array('category' => 'seminar', 'number' => 5, 'panel' => 2)); ?>
      </div>
    </section>
  </section>
</main>
<?php get_footer(); ?>