<?php

/**
 * setup_theme
 *
 * @return void
 */
function setup_theme() {
	add_editor_style( array(
		'./assets/css/admin-editor-style.css',
	) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	register_nav_menus( array(
		'header' => 'header Navigation',
		'mobile' => 'Mobile Navigation',
	) );
}
add_action( 'after_setup_theme', 'setup_theme', 11 );

/**
 * my_wp_enqueue_scripts
 *
 * @return void
 */
function my_wp_enqueue_scripts() {
	$dir_path = get_stylesheet_directory_uri() . '/assets';

	$args = array(
		'handle' => 'theme-normalize',
		'src'    => $dir_path . '/css/sanitize.css',
		'deps'   => array(),
		'ver'    => false,
		'media'  => 'all'
	);
	extract($args);
	wp_enqueue_style( $handle, $src, $deps, $ver, $media );

	$args = array(
		'handle' => 'theme-common',
		'src'    => $dir_path . '/css/common.css',
		'deps'   => array(),
		'ver'    => false,
		'media'  => 'all'
	);
	extract($args);
	wp_enqueue_style( $handle, $src, $deps, $ver, $media );

	$args = array(
		'handle' => 'theme',
		'src'    => get_stylesheet_uri(),
		'deps'   => array(),
		'ver'    => false,
		'media'  => 'all'
	);
	extract($args);
	wp_enqueue_style( $handle, $src, $deps, $ver, $media );

	if( is_home() || is_front_page() ) {
		$args = array(
			'handle' => 'home',
			'src'    => $dir_path . '/css/home.css',
			'deps'   => array(),
			'ver'    => false,
			'media'  => 'all',
		);
		extract($args);
		wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	}

	if( is_page() && !is_front_page() ) {
		$args = array(
			'handle' => 'page-style',
			'src'    => $dir_path . '/css/page.css',
			'deps'   => array(),
			'ver'    => false,
			'media'  => 'all'
		);
		extract($args);
		wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	}

	if( is_single() || is_singular() && !is_front_page() ) {
		$args = array(
			'handle' => 'entry-style',
			'src'    => $dir_path . '/css/entry.css',
			'deps'   => array(),
			'ver'    => false,
			'media'  => 'all'
		);
		extract($args);
		wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	}

	$args = array(
		'handle' => 'jquery.matchHeight-min.js',
		'src'    => $dir_path . '/scripts/jquery.matchHeight-min.js',
		'deps'   => array('jquery'),
		'ver'    => false,
		'in_footer' => true,
	);
	extract($args);
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	$args = array(
		'handle' => 'ofi.min.js',
		'src'    => $dir_path . '/scripts/ofi.min.js',
		'deps'   => array('jquery'),
		'ver'    => false,
		'in_footer' => true,
	);
	extract($args);
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	$args = array(
		'handle' => 'myscripts.js',
		'src'    => $dir_path . '/scripts/myscripts.js',
		'deps'   => array('jquery'),
		'ver'    => false,
		'in_footer' => true,
	);
	extract($args);
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	if ( is_page( 'sample-page' ) ) {
		$args = array(
			'handle' => 'app.js',
			'src'    => get_theme_file_uri( '/dist/app.js' ),
			'deps'   => array('jquery'),
			'ver'    => false,
			'in_footer' => true,
		);
		extract($args);
		wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	}
}
add_action('wp_enqueue_scripts', 'my_wp_enqueue_scripts', 11);
