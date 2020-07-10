<?php get_header(); ?>

<section id="category-archive" class="section">
  <div class="sec-inner">
    <div class="content-width">
      <div class="content-inner">
        <?php if( have_posts() ): ?>
        <ul class="news-list">
          <?php while( have_posts() ): the_post(); ?>
          <?php get_template_part( 'template_parts/list-news' ); ?>
          <?php endwhile; ?>
        </ul>
        <?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
        <?php else: ?>
        <p>このカテゴリーの投稿はございません。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>