<?php get_header(); ?>

<section id="top-news" class="section">
  <div class="sec-inner">
    <div class="content-width">
      <div class="sec-ttl-box">
        <h2 class="sec-ttl">
          <span>
            パターン１
          </span>
        </h2>
      </div>
      <div class="content-inner">
        <?php
        $args = array(
          'post_type' => 'post',
          'orderby' => 'date',
          'posts_per_page' => 3,
        );
        $posts = get_posts( $args );
        ?>
        <?php if( $posts ): ?>
        <ul class="news-list">
          <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
          <?php get_template_part( 'template_parts/list', 'news' ); ?>
          <?php endforeach; wp_reset_postdata(); ?>
        </ul>
        <?php else: ?>
        <p>現在お知らせはございません。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section id="top-card" class="section">
  <div class="sec-inner">
    <div class="content-width">
      <div class="sec-ttl-box">
        <h2 class="sec-ttl">
          <span>
            パターン２
          </span>
        </h2>
      </div>
      <div class="content-inner">
        <?php
        $args = array(
          'post_type' => 'post',
          'orderby' => 'date',
          'posts_per_page' => 3,
        );
        $posts = get_posts( $args );
        ?>
        <?php if( $posts ): ?>
        <ul class="card-list flex-d">
          <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
          <?php get_template_part( 'template_parts/list', 'blog' ); ?>
          <?php endforeach; wp_reset_postdata(); ?>
        </ul>
        <?php else: ?>
        <p>現在お知らせはございません。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
