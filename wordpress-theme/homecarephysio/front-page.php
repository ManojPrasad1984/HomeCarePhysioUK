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
	<section class="triage-promo content-wrap" aria-labelledby="triage-promo-title">
		<div class="triage-promo-copy"><p class="eyebrow"><?php esc_html_e( 'A helpful first step', 'homecarephysio' ); ?></p><h2 id="triage-promo-title"><?php esc_html_e( 'Start with a free 15-minute triage call.', 'homecarephysio' ); ?></h2><p><?php esc_html_e( 'Tell us how to reach you. A physiotherapist will call to understand what you are looking for; if you wish, you can then book an appointment.', 'homecarephysio' ); ?></p></div>
		<ol class="triage-steps"><li><span>01</span><?php esc_html_e( 'Send an enquiry', 'homecarephysio' ); ?></li><li><span>02</span><?php esc_html_e( 'Free 15-minute call with a physiotherapist', 'homecarephysio' ); ?></li><li><span>03</span><?php esc_html_e( 'Choose whether to book', 'homecarephysio' ); ?></li></ol>
		<a class="button" href="<?php echo esc_url( home_url( '/contact/#triage-form' ) ); ?>"><?php esc_html_e( 'Request your free triage call', 'homecarephysio' ); ?><span aria-hidden="true">→</span></a>
		<p class="satisfaction-promise"><?php esc_html_e( 'First visit satisfaction guarantee: if you or your family are not satisfied after the initial assessment, we will offer a different physiotherapist.', 'homecarephysio' ); ?></p>
	</section>
	<section class="home-video content-wrap" aria-labelledby="home-video-title">
		<div><p class="eyebrow"><?php esc_html_e( 'A sample physiotherapy session', 'homecarephysio' ); ?></p><h2 id="home-video-title"><?php esc_html_e( 'See movement support in action.', 'homecarephysio' ); ?></h2><p><?php esc_html_e( 'Illustrative sample video from the supplied website files. This is not a patient testimonial.', 'homecarephysio' ); ?></p></div>
		<figure class="home-video-frame"><video controls playsinline preload="metadata" poster="<?php echo esc_url( get_theme_file_uri( '/assets/images/physio-1-poster.jpg' ) ); ?>" aria-label="<?php esc_attr_e( 'Sample physiotherapy exercise session', 'homecarephysio' ); ?>"><source src="<?php echo esc_url( get_theme_file_uri( '/assets/videos/physio-1-sample.mp4' ) ); ?>" type="video/mp4"></video><figcaption><?php esc_html_e( 'Sample demonstration only; replace with an approved patient video when available.', 'homecarephysio' ); ?></figcaption></figure>
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
