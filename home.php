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
      <div class="seminar-headline">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/seminar.svg" alt="セミナー">
        <p class="seminar-headline-subtext">セミナー情報</p>
      </div>
      <div class="seminars-wrap">
        <?php
        $the_query = new WP_Query(array(
          'category_name' => 'seminar',
        ));
        if ($the_query->have_posts()):
          while ($the_query->have_posts()):
            $the_query->the_post();
            ?>
        <article class="post-seminar">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
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