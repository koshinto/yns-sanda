<?php get_header(); ?>
<main id="page" class="home-page">
  <!-- キービジュアル -->
  <?php
    $args = array( 'category_name' => 'key-visual' );
    $key_visual_posts = get_posts( $args );
    if ( $key_visual_posts ):
  ?>
  <section id="key-visual">
    <div class="key-container">
      <ul class="key-card">
        <?php
            foreach ( $key_visual_posts as $post ):
              setup_postdata( $post );
        ?>
          <li class="key-item">
            <div class="key-image">
              <?php the_post_thumbnail( 'full' ); ?>
            </div>
            <h2 class="key-text"><?php the_title(); ?></h2>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
  <?php endif; ?>

  <!-- タブメニュー -->
  <section id="tab-menu">
    <div class="container">
      <?php echo insert_tab_panel( array( 'パーソナルメニュー', 'ビジネスメニュー' ) ); ?>
    </div>
  </section>
  
  <!-- お知らせ -->
  <section id="notice">
    <div class="container">
      <?php
        $the_query = new WP_Query( array( 'post_type' => 'post', 'category_name' => 'infomation,offers,release' ) );
        if ( $the_query->have_posts() ): 
      ?>
      <div class="infomation">
        <p class="headline-en">Infomation</p>
        <h2 class="headline">お知らせ</h2>
        <ul class="post">
          <?php
          while ( $the_query->have_posts() ): $the_query->the_post();
        ?>
          <li class="post-item">
            <a href="<?php the_permalink(); ?>">
              <p class="notice-category">
                <?php
                  $categories = get_the_category();
                  echo $categories[0]->name;
                ?>
              </p>
              <p class="notice-date"><?php echo get_the_date(); ?></p>
              <p class="notice-title"><?php the_title(); ?></p>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <section id="late-post">
    <div class="container">
      <?php
        // トピックス
        $the_query = new WP_Query( array( 'post_type' => 'post', 'category_name' => 'blog' ) );
        if ( $the_query->have_posts() ): 
      ?>
          <p class="headline-en">The New Contents</p>
          <h2 class="headline">新しい記事</h2>
          <ul class="post">
          <?php
            while ( $the_query->have_posts() ): $the_query->the_post();
          ?>
            <li class="post-item">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( '' ); ?>
                <div class="post-text">
                  <p class="post-date"><?php echo get_the_date(); ?></p>
                  <p class="post-title"><?php the_title(); ?></p>
                </div>
              </a>
            </li>
          <?php endwhile; ?>
          </ul>
      <?php endif; ?>
    </div>
  </section>

  <section id="brands" class="brands">
    <div class="container">
      <p class="headline-en headline-en-blue">The Brands</p>
      <h2 class="headline">取扱銘柄</h2>
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

  <section id="sustainability">
    <?php $image_uri = esc_url( get_template_directory_uri() ) . '/assets/images/'; ?>
    <div class="container">
      <h2 class="headline">紙資源を扱う企業としての取り組み</h2>
      <div class="recycle-flow">
        <div class="message-group">
          <img src="<?php echo $image_uri ?>recyclecar.webp" alt="" class="recycle-image">
          <p>お客様の新聞を回収</p>
        </div>
        <div class="message-group">
          <img src="<?php echo $image_uri ?>factory.webp" alt="" class="recycle-image">
          <p>提携業者が適切に処理</p>
        </div><div class="message-group">
          <img src="<?php echo $image_uri ?>kirakira.webp" alt="" class="recycle-image">
          <p>新しい製品へ</p>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>