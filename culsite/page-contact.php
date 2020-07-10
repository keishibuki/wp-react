<?php get_header(); ?>

<section id="contact-outline" class="section">
  <div class="sec-inner">
    <div class="content-width">
      <div class="sec-ttl-box">
        <h2 class="sec-ttl">
          <span>
            お問い合わせ先
          </span>
        </h2>
      </div>
      <div class="content-inner">
        <p>TEL: 000-0000-0000</p>
        <p>受付時間 9:00～18:00（土日祝を除く）</p>
      </div>
    </div>
  </div>
</section>

<?php if( have_posts() ): ?>
<?php while( have_posts() ): the_post(); ?>
<section id="contact-form" class="section">
  <div class="sec-inner">
    <div class="content-width">
      <div class="sec-ttl-box">
        <h2 class="sec-ttl">
          <span>
            メールフォーム
          </span>
        </h2>
      </div>
      <div class="content-inner">
        <div class="contact-box">
          <?php the_content(); ?>
        </div>
        <script>
          document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = '<?php echo the_permalink(); ?>thanks/';
          }, false );
        </script>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>