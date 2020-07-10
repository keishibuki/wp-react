<li class="card-item">
  <div class="card-thumb img-box">
    <a href="<?php the_permalink(); ?>">
      <?php $src_thumb = has_post_thumbnail( $post->ID ) ? get_the_post_thumbnail_url( $post->ID ) : "http://placehold.jp/cccccc/999999/280x200.png?text=NoImage%0A280%20x%20200"; ?>
      <img src="<?php echo esc_attr($src_thumb); ?>" alt="<?php the_title(); ?>">
    </a>
  </div>
  <div class="card-meta flex-f">
    <div class="date">
      <time datetime="<?php echo get_the_date(); ?>">
        <?php echo get_the_date(); ?>
      </time>
    </div>
    <div class="cats flex-f">
      <?php foreach( get_the_category( $post->ID ) as $cat ): ?>
      <a class="cat" href="<?php echo esc_attr( get_category_link( $cat->term_id ) ); ?>">
        <?php echo esc_html( $cat->name ); ?>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
  <h3 class="card-ttl">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h3>
</li>