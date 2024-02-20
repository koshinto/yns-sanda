<?php get_header(); ?>
<main class="home-page">
  <?php
    $args = array( 'category_name' => 'key-visual' );
    $key_visual_posts = get_posts( $args );
    if ( $key_visual_posts ):
  ?>
  <div class="key-visual">
    <ul>
  <?php
      foreach ( $key_visual_posts as $post ):
        setup_postdata( $post );
  ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'key-visual' ); ?></a></li>
  <?php endforeach; ?>
    </ul>
  </div>  <!-- key-visual -->
  <?php endif; ?>
  
  <section class="post-sec">
  <?php 
  // 新着の投稿を表示
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
  <?php
    endif;
    // 新着のお知らせを表示
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
    <?php endif; ?>
  </section>

  <section class="brands">
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
  </section>

  <section class="offices">
    <h2 id="office">店舗情報</h2>
    <ul class="office">
      <li>
        <h3>読売センター三田南<span>本社</span></h3>
        <address><span class="zip-code">〒669-1535</span>兵庫県三田市南が丘1-52-11</address>
        <dl class="phone-">
          <dt>電話番号</dt>
          <dd>079-563-2558</dd>
        </dl>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1511.1187593813827!2d135.2176259824886!3d34.88116651646679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60006404c8590407%3A0x456472a083ca8619!2z44CSNjY5LTE1MzUg5YW15bqr55yM5LiJ55Sw5biC5Y2X44GM5LiY77yR5LiB55uu77yV77yS4oiS77yR77yR!5e0!3m2!1sja!2sjp!4v1706247670482!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </li>
      <li>
        <h3>読売センター新三田<span>配達拠点</span></h3>
        <address><span class="zip-code">〒669-</span>兵庫県三田市すずかけ台4-14-1</address>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1635.9905383649066!2d135.20262153878028!3d34.906924392846534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600065b642ba62bd%3A0x7f4322df15c85055!2z6Kqt5aOy44K744Oz44K_44O8IOaWsOS4ieeUsA!5e0!3m2!1sja!2sjp!4v1706247761242!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </li>
    </ul>
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

<?php get_footer(); ?>