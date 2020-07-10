<?php get_header(); ?>

<div id="entry-container">
  <div class="entry-inner">
    <div class="content-width">

      <article id="entry-article">
        <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?>

        <div class="date">
          <time datetime="<?php echo get_the_date(); ?>">
            <?php echo get_the_date(); ?>
          </time>
        </div>
        <h2 class="entry-ttl">
          <?php the_title(); ?>
        </h2>
        <div class="cats">
          <?php foreach( get_the_category( get_the_ID() ) as $cat ): ?>
          <a class="cat" href="<?php echo esc_attr( get_category_link( $cat->term_id ) ); ?>">
            <?php echo esc_html( $cat->name ); ?>
          </a>
          <?php endforeach; ?>
        </div>
        <?php if( has_post_thumbnail( get_the_ID() ) ): ?>
        <div class="entry-thumb img-box">
          <div class="img-box">
            <?php $src_thumb = get_the_post_thumbnail_url( get_the_ID() ); ?>
            <img src="<?php echo esc_attr( $src_thumb ); ?>" alt="<?php the_title(); ?>" class="ofi">
          </div>
        </div>
        <?php endif; ?>

        <section class="entry-content">
          <?php the_content(); ?>
        </section>

        <?php endwhile; ?>
        <?php endif; ?>

        <?php $prev_post = get_previous_post( true ); ?>
        <?php $next_post = get_next_post( true ); ?>
        <div id="adjacent-news-box">
          <div id="prev-news" class="adjacent-news">
            <?php if( $prev_post ): ?>
            <p class="adjacent-head">
              <span>
                前の記事
              </span>
            </p>
            <a href="<?php the_permalink( $prev_post->ID ); ?>" class="adjacent-news-inner">
              <div class="img-box">
                <?php $src_thumb = has_post_thumbnail( $prev_post->ID ) ? get_the_post_thumbnail_url( $prev_post->ID ) : "http://placehold.jp/cccccc/999999/280x200.png?text=NoImage%0A280%20x%20200"; ?>
                <img src="<?php echo esc_attr( $src_thumb ); ?>" alt="<?php echo esc_attr( $prev_post->post_title ); ?>">
              </div>
              <h2 class="ttl">
                <?php echo esc_html( $prev_post->post_title ); ?>
              </h2>
            </a>
            <?php endif; ?>
          </div>

          <div id="next-news" class="adjacent-news">
            <?php if( $next_post ): ?>
            <p class="adjacent-head">
              <span>
                次の記事
              </span>
            </p>
            <a href="<?php the_permalink( $next_post->ID ); ?>" class="adjacent-news-inner">
              <h2 class="ttl">
                <?php echo esc_html( $next_post->post_title ); ?>
              </h2>
              <div class="img-box">
                <?php $src_thumb = has_post_thumbnail( $next_post->ID ) ? get_the_post_thumbnail_url( $next_post->ID ) : "http://placehold.jp/cccccc/999999/280x200.png?text=NoImage%0A280%20x%20200"; ?>
                <img class="ofi" src="<?php echo esc_attr( $src_thumb ); ?>" alt="<?php echo esc_attr( $next_post->post_title ); ?>">
              </div>
            </a>
            <?php endif; ?>
          </div>
        </div>

      </article>
      <?php get_template_part( 'sidebar' ); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
