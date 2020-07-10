<aside id="entry-sidebar">
  <div id="sidebar-cat-box">
    <h2 class="sidebar-head">
      <span>
        カテゴリー
      </span>
    </h2>
    <ul id="sidebar-cat-list">
      <?php
      $args = array(
        'type' => 'post',
        'hide_empty' => false,
        'pad_counts' => true,
      );
      ?>
      <?php foreach( get_categories( $args ) as $cat ): ?>
      <li class="sidebar-cat-item">
        <a href="<?php echo esc_attr( get_category_link( $cat->term_id ) ); ?>">
          <?php echo esc_html( $cat->cat_name ); ?> (<?php echo $cat->category_count; ?>)
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div id="sidebar-news-box">
    <h2 class="sidebar-head">
      <span>
        新着記事
      </span>
    </h2>
    <ul id="sidebar-news-list">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
      );
      $posts = get_posts( $args );
      ?>
      <?php if( $posts ): ?>
      <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
      <li class="sidebar-news-item">
        <div class="left thumb img-box">
          <a class="img-box" href="<?php the_permalink(); ?>">
            <?php $src_thumb = has_post_thumbnail( $post->ID ) ? get_the_post_thumbnail_url( $post->ID ) : "http://placehold.jp/cccccc/999999/280x200.png?text=NoImage%0A280%20x%20200"; ?>
            <img src="<?php echo esc_attr( $src_thumb ); ?>" alt="<?php the_title(); ?>" class="ofi">
          </a>
        </div>
        <div class="right sidebar-news-body">
          <h3 class="ttl">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <div class="date">
            <time datetime="<?php echo get_the_date(); ?>">
              <?php echo get_the_date(); ?>
            </time>
          </div>
        </div>
      </li>
      <?php endforeach; wp_reset_postdata(); ?>
      <?php endif; ?>
    </ul>
  </div>

</aside>