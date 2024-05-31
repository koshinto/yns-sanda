<?php get_header(); ?>
<main id="home" class="home page-home">
  <div class="contents">
    <section class="main-visual">
      <div class="main-visual-text">
        <p class="main-visual-paragraph">悩める新聞販売店・小売業界のオーナー様</p>
        <p class="hand-write-heading"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/hand_write_heading.svg" alt="今こそ"></p>
        <h1 class="main-visual-heading"><small>令和の</small>経営改革</h1>
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
        <p class="page-link-button"><a href="" class="btn btn-link">相談する</a></p>
      </div>
    </section>
    <section id="main-tab-menu" class="tab-menu">
      <ul class="tab-label" role="tablist">
        <li class="tab-label-item" data-tab="1">プレスリリース</li>
        <li class="tab-label-item" data-tab="2">スケジュール</li>
      </ul>
      <div class="tab-panel">
        <?php
          $the_query = new WP_Query( array('category_name' => 'press') );
          if( $the_query->have_posts() ):
            $i = 0;
            $num = 5; // 投稿の表示数 / Display number
            echo '<ul class="post">';
            while( $the_query->have_posts() &&  $i < $num):
              $the_query->the_post();
        ?>
          <li class="post-item" data-panel="<?php echo $i + 1; ?>">
            <article class="post-contents">
              <a href="<?php esc_html( the_permalink() ); ?>">
                <div class="post-column-left">
                  <span class="post-date"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></span>
                  <h3 class="post-heading"><?php echo esc_html( get_the_title() ); ?></h3>
                </div>
                <div class="post-column-right">
                  <?php 
                    if( has_post_thumbnail() ): 
                      the_post_thumbnail( 'label' );
                    else:
                  ?>
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/1x/no_image.webp"
                      srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/2x/no_image@2x.webp 2x"
                      alt="noimage"
                      width="64"
                      height="64"
                    >
                  <?php endif; ?>
                </div>
              </a>
            </article>
          </li>
        <?php
              $i ++;
            endwhile;
            echo '</ul>';
          endif;
          wp_reset_postdata();
        ?>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>