<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php wp_head(); ?>
<script>
(function($){
var pcView = 1000,
    spView = 480,
    useIPhone  = navigator.userAgent.indexOf('iPhone') > 0,
    useIPod    = navigator.userAgent.indexOf('iPod') > 0,
    useAndroid = navigator.userAgent.indexOf('Android') > 0,
    isMobile   = navigator.userAgent.indexOf('Mobile') > 0,
    view       = (useIPhone || useIPod || (useAndroid && isMobile)) ? spView : pcView;

$('meta[name="viewport"]').remove();
$('head')
  .prepend('<meta name="viewport" content="width=' + view + '">')
  .append('<style>@-ms-viewport { width: device-width; } /* windows pc (IE) - DO NOT FIX */@media screen and (max-width: ' + pcView + 'px) {@-ms-viewport { width: ' + pcView + 'px; } /* for windows tablet */}@media screen and (max-width: ' + spView + 'px) {@-ms-viewport { width: ' + pcView + 'px; } /* for windows phone */}</style>');
})(jQuery);
</script>
</head>

<body <?php body_class(); if( is_page() ) : ?> id="<?php echo esc_attr( $post->post_name ); ?>"<?php endif; ?>>

<?php $tag = is_home() || is_front_page() ? 'h1' : 'h2'; ?>

<div id="wrapper">

<div id="sp-menu">
	<ul>
		<?php
			$args = array(
				'container' => false,
				'theme_location' => 'mobile',
				'items_wrap' => '%3$s',
			);
			wp_nav_menu( $args );
			?>
	</ul>
  <div class="sp-contact-box">
    <a href="<?php echo esc_attr( home_url() . '/contact/' ); ?>">
      <span>
        お問い合わせ
      </span>
    </a>
  </div>
</div>

<header id="header" class="h-fixed">
  <div id="h-inner">
    <div id="h-site-logo">
      <<?php echo $tag; ?> class="img-box">
        <a href="<?php echo esc_attr( home_url() . '/' ); ?>">
          <img src="http://placehold.jp/200x40.png" alt="<?php echo esc_attr( bloginfo( 'name' ) ); ?>">
        </a>
      </<?php echo $tag; ?>>
    </div>
    <nav id="h-gnav-box">
      <?php
      $args = array(
        'container' => false,
        'theme_location' => 'header',
      );
      wp_nav_menu( $args );
      ?>
      <div id="h-gnav-contact">
        <a href="<?php echo esc_attr( home_url() . '/contact/' ); ?>">
          <span>
            お問い合わせ
          </span>
        </a>
      </div>
    </nav>
    <div id="btn-hamburger">
      <span class="border"></span>
      <span class="border"></span>
      <span class="border"></span>
    </div>
  </div>
</header>

<main id="main">

<?php get_template_part( 'template_parts/mainvisual' ); ?>

<?php get_template_part( 'template_parts/breadcrumb' ); ?>
