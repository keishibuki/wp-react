<li class="news-item">
  <div class="news-meta">
    <div class="date">
      <time datetime="<?php echo get_the_date(); ?>">
        <?php echo get_the_date(); ?>
      </time>
    </div>
    <div class="cats">
      <?php $cats = get_the_category( $post->ID ); ?>
      <?php foreach( $cats as $cat ): ?>
      <a class="cat" href="<?php echo esc_attr( get_category_link( $cat->term_id ) ); ?>">
        <?php echo esc_html( $cat->name ); ?>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
  <h3 class="news-ttl">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h3>
</li>