<?php get_header(); ?>

<?php if( have_posts() ): ?>
<?php while( have_posts() ): the_post(); ?>
<section id="post-<?php the_ID(); ?>" class="section">
  <div class="sec-inner">
    <div class="content-width">
      <div class="content-inner">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>