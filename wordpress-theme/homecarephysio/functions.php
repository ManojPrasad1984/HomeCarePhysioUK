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

/** Send a short triage-call request without collecting clinical details. */
function homecarephysio_handle_triage_request() {
	if ( ! isset( $_POST['homecare_triage_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['homecare_triage_nonce'] ) ), 'homecare_triage_request' ) ) {
		wp_die( esc_html__( 'The request could not be verified. Please return to the contact page and try again.', 'homecarephysio' ) );
	}

	$name    = isset( $_POST['triage_name'] ) ? sanitize_text_field( wp_unslash( $_POST['triage_name'] ) ) : '';
	$email   = isset( $_POST['triage_email'] ) ? sanitize_email( wp_unslash( $_POST['triage_email'] ) ) : '';
	$phone   = isset( $_POST['triage_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['triage_phone'] ) ) : '';
	$postcode = isset( $_POST['triage_postcode'] ) ? sanitize_text_field( wp_unslash( $_POST['triage_postcode'] ) ) : '';
	$consent = isset( $_POST['triage_consent'] );
	$status  = 'invalid';

	if ( $name && is_email( $email ) && $phone && $consent ) {
		$recipient = 'manojprasad1984@gmail.com';
		$subject   = 'Free 15-minute triage call request';
		$message   = "A visitor requested a free 15-minute triage call.\n\nName: {$name}\nEmail: {$email}\nPhone: {$phone}\nPostcode: {$postcode}\n\nNo clinical details were requested.";
		$headers   = array( 'Reply-To: ' . $name . ' <' . $email . '>' );
		$status    = wp_mail( $recipient, $subject, $message, $headers ) ? 'sent' : 'failed';
	}

	wp_safe_redirect( add_query_arg( 'triage', $status, home_url( '/contact/#triage-form' ) ) );
	exit;
}
add_action( 'admin_post_nopriv_homecarephysio_triage_request', 'homecarephysio_handle_triage_request' );
add_action( 'admin_post_homecarephysio_triage_request', 'homecarephysio_handle_triage_request' );

function homecarephysio_menu_fallback() {
	wp_page_menu(
		array(
			'menu_class' => 'menu',
			'show_home'  => true,
			'depth'      => 1,
		)
	);
}
