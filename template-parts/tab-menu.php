<?php
  $the_query = new WP_Query( array('category_name' => $args['category']) );
  if( $the_query->have_posts() ):
    $i = 0;
    echo '<ul class="tab-panel" data-panel="' . $args['panel'] . '">';
    while( $the_query->have_posts() &&  $i < $args['number']):
      $the_query->the_post();
?>
  <li class="tab-panel-item panel-item-<?php echo $i + 1; ?>">
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