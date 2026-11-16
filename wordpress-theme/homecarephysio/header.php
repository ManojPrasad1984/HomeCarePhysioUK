<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#f7f8f4">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'homecarephysio' ); ?></a>
<header class="site-header">
	<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'HomeCarePhysioUK home', 'homecarephysio' ); ?>">
		<span class="brand-mark" aria-hidden="true">＋</span>
		<span>HomeCare<span class="brand-light">PhysioUK</span></span>
	</a>
	<button class="menu-toggle" type="button" aria-controls="primary-nav" aria-expanded="false">
		<span><?php esc_html_e( 'Menu', 'homecarephysio' ); ?></span>
		<span class="menu-icon" aria-hidden="true">☰</span>
	</button>
	<nav class="primary-nav" id="primary-nav" aria-label="<?php esc_attr_e( 'Main navigation', 'homecarephysio' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'menu',
				'fallback_cb'    => 'homecarephysio_menu_fallback',
			)
		);
		?>
	</nav>
</header>
