<?php
/** The front page template. @package HomeCarePhysio */
get_header();
?>
<main id="main">
	<section class="hero-banner" aria-labelledby="home-hero-title">
		<img class="hero-banner-image" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/home-banner-v2.jpg' ) ); ?>" alt="<?php esc_attr_e( 'A woman relaxing at home with a warm drink', 'homecarephysio' ); ?>" fetchpriority="high">
		<div class="hero-banner-shade" aria-hidden="true"></div>
		<div class="hero-banner-content">
			<h1 id="home-hero-title"><?php esc_html_e( 'Physiotherapy at home', 'homecarephysio' ); ?></h1>
			<p class="hero-rotating-line"><span><?php esc_html_e( 'Support for', 'homecarephysio' ); ?></span> <span class="hero-rotating-phrase" aria-live="polite"><?php esc_html_e( 'everyday movement', 'homecarephysio' ); ?></span></p>
		</div>
	</section>
	<section class="front-content content-wrap">
		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
		?>
	</section>
</main>
<?php get_footer(); ?>
