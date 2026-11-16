<?php
/** The front page template. @package HomeCarePhysio */
get_header();
?>
<main id="main">
	<section class="home-hero">
		<div class="hero-copy">
			<p class="eyebrow"><span></span><?php esc_html_e( 'Bringing physiotherapy to you', 'homecarephysio' ); ?></p>
			<h1><?php esc_html_e( 'Physiotherapy', 'homecarephysio' ); ?><br><em><?php esc_html_e( 'at home.', 'homecarephysio' ); ?></em></h1>
			<p class="lead"><?php esc_html_e( 'Explore home-based physiotherapy shaped around your goals, your routine and the place you feel most comfortable.', 'homecarephysio' ); ?></p>
			<div class="hero-actions">
				<a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Enquire now', 'homecarephysio' ); ?> <span aria-hidden="true">→</span></a>
				<a class="text-link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Explore services', 'homecarephysio' ); ?></a>
			</div>
			<p class="small-note"><?php esc_html_e( 'A personal conversation is a good place to start.', 'homecarephysio' ); ?></p>
		</div>
		<figure class="hero-photo">
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/home-visit-hero.jpg' ) ); ?>" alt="<?php esc_attr_e( 'A physiotherapist supporting an older adult with a balance exercise at home', 'homecarephysio' ); ?>" fetchpriority="high">
			<figcaption><?php esc_html_e( 'Care that meets you at home', 'homecarephysio' ); ?></figcaption>
		</figure>
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
