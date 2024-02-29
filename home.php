<?php get_header(); ?>
<main class="home-page">
  <section class="catch-copy">
    <div class="catch-text catch-item">
      <p class="catch-headding"><strong>宅配</strong>で<strong>街</strong>を<span class="catch-decoration">笑顔</span>に！</p>
      <p class="catch-message">私たちのミッションは宅配を通し、<br>お客様に寄り添うパートナーになることです</p>
    </div>
    <div class="catch-item">
      <img class="catch-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/staff.webp" alt="スタッフのイメージ" srcset="">
    </div>
  </section>
  
  <!-- キービジュアル -->
  <?php
    $args = array( 'category_name' => 'key-visual' );
    $key_visual_posts = get_posts( $args );
    if ( $key_visual_posts ):
  ?>
  <section class="key-visual">
    <ul>
  <?php
      foreach ( $key_visual_posts as $post ):
        setup_postdata( $post );
  ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'key-visual' ); ?></a></li>
  <?php endforeach; ?>
    </ul>
  </section>
  <?php endif; ?>

  <!-- ユーザーアクション -->
  <section id="user-action">
    <?php wp_nav_menu( array(
      'theme_location' => 'place_user_action',
      'container' => false
      ) );
    ?>
  </section>
  
  <!-- トピックスと新着の投稿 -->
  <section class="post-sec">
    <?php
      // 新着のお知らせ
      $the_query = new WP_Query( array( 'post_type' => 'post', 'category_name' => 'infomation' ) );
      if ( $the_query->have_posts() ): 
    ?>
    <div class="infomation">
      <h2>お知らせ</h2>
      <ul class="post">
        <?php
        while ( $the_query->have_posts() ): $the_query->the_post();
      ?>
        <li class="post-item">
          <a href="<?php the_permalink(); ?>">
            <p class="post-date"><?php echo get_the_date(); ?></p>
            <p class="post-title"><?php the_title(); ?></p>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
    </div>
    <?php
      endif;
      // トピックス
      $the_query = new WP_Query( array( 'post_type' => 'post', 'category_name' => 'blog' ) );
      if ( $the_query->have_posts() ): 
    ?>
      <div class="topics">
        <h2>トピックス</h2>
        <ul class="post">
        <?php
          while ( $the_query->have_posts() ): $the_query->the_post();
        ?>
          <li class="post-item">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
              <div class="post-text">
                <p class="post-date"><?php echo get_the_date(); ?></p>
                <p class="post-title"><?php the_title(); ?></p>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
        </ul>
      </div>
    <?php endif; ?>
  </section>

  <section class="brands">
    <div class="brands-wrap">
      <h2>取扱商品</h2>
      <?php $brands_path = esc_url( get_template_directory_uri() ) . "/assets/images/brands/"; ?>
      <ul class="brand">
        <li><img
              src="<?php echo $brands_path; ?>yomiuri.png"
              alt="読売新聞"
              srcset="<?php echo $brands_path; ?>yomiuri.png 1x,
                      <?php echo $brands_path; ?>yomiuri@2x.png 2x"
        ></li>
        <li><img
              src="<?php echo $brands_path; ?>nikkei.png"
              alt="日本経済新聞"
              srcset="<?php echo $brands_path; ?>nikkei.png 1x,
                      <?php echo $brands_path; ?>nikkei@2x.png 2x"
        ></li>
        <li><img
              src="<?php echo $brands_path; ?>hochi.png"
              alt="報知新聞"
              srcset="<?php echo $brands_path; ?>hochi.png 1x,
                      <?php echo $brands_path; ?>hochi@2x.png 2x"
        ></li>
        <li><img
              src="<?php echo $brands_path; ?>shirobara.png"
              alt="白バラ牛乳"
              srcset="<?php echo $brands_path; ?>shirobara.png 1x,
                      <?php echo $brands_path; ?>shirobara@2x.png 2x"
        ></li>
        <li><img
              src="<?php echo $brands_path; ?>morinaga.png"
              alt="森永乳業"
              srcset="<?php echo $brands_path; ?>morinaga.png 1x,
                      <?php echo $brands_path; ?>morinaga@2x.png 2x"
        ></li>
      </ul>
    </div>
  </section>

  <section class="sustainability">
    <img class=""
      src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sustainability.jpeg"
      alt=""
    >
    <div class="message-group">
      <h2>ワイエヌエス三田の取り組み</h2>
      <p>持続可能で豊かな生活を続ける為に事業活動と共に地球環境への影響を意識した活動を行います。</p>
    </div>

    <div class="message-group">
      <h3>地球環境への取組みとして資源の回収を推進</h3>
      <p>紙資源を事業主体とする弊社の責務として主に新聞・古本等の紙資源、アルミを積極的に回収を行い再利用に取り組みます。</p>
    </div>
  </section>

</main>
<?php get_footer(); ?>