<?php
/**
 * HomeCare Physio theme setup.
 *
 * @package HomeCarePhysio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function homecarephysio_setup() {
	load_theme_textdomain( 'homecarephysio', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus(
		array(
			'primary' => __( 'Primary navigation', 'homecarephysio' ),
			'footer'  => __( 'Footer sitemap', 'homecarephysio' ),
		)
	);
}
add_action( 'after_setup_theme', 'homecarephysio_setup' );

function homecarephysio_enqueue_assets() {
	$theme = wp_get_theme();
	$version = $theme->get( 'Version' );
	wp_enqueue_style( 'homecarephysio-theme', get_stylesheet_uri(), array(), $version );
	wp_enqueue_style( 'homecarephysio-site', get_theme_file_uri( '/assets/css/site.css' ), array( 'homecarephysio-theme' ), $version );
	wp_enqueue_script( 'homecarephysio-site', get_theme_file_uri( '/assets/js/site.js' ), array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'homecarephysio_enqueue_assets' );

function homecarephysio_menu_fallback() {
	wp_page_menu(
		array(
			'menu_class' => 'menu',
			'show_home'  => true,
			'depth'      => 1,
		)
	);
}
