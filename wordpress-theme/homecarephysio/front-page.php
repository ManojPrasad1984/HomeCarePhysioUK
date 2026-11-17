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
	<?php
	$google_reviews_embed = get_option( 'homecarephysio_google_reviews_embed', '' );
	if ( ! $google_reviews_embed ) {
		$google_reviews_embed = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.7247466806693!2d79.1011632!3d21.282360500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c3e390d32e9f%3A0x77c17081d78c4b0!2sHomeCareService!5e0!3m2!1sen!2sin!4v1794914773512!5m2!1sen!2sin';
	}
	?>
	<section class="trusted-patients content-wrap" aria-labelledby="trusted-patients-title">
		<div class="trusted-patients-heading"><p class="eyebrow"><?php esc_html_e( 'Patient feedback', 'homecarephysio' ); ?></p><h2 id="trusted-patients-title"><?php esc_html_e( 'Trusted by Our Patients', 'homecarephysio' ); ?></h2><p><?php esc_html_e( 'Reviews from our Google Business Profile.', 'homecarephysio' ); ?></p></div>
		<div class="google-review-content">
			<article class="google-review-card"><div class="google-review-summary"><span class="google-mark" aria-hidden="true">G</span><div><strong><?php esc_html_e( 'HomeCareService on Google', 'homecarephysio' ); ?></strong><p><b>4.0</b> / 5 · 1 review</p><span class="review-stars" aria-label="4 out of 5 stars">★★★★<span>★</span></span></div></div><blockquote><p>“This is test comment.”</p><footer>Manoj Prasad <span>· Development preview</span></footer></blockquote><a class="text-link" href="https://www.google.com/maps/place/HomeCareService/@21.2823605,79.1011632,17z/data=!3m1!4b1!4m6!3m5!1s0x3bd4c3e390d32e9f:0x77c17081d78c4b0!8m2!3d21.2823605!4d79.1011632!16s%2Fg%2F11z_jmnj4y" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'View on Google', 'homecarephysio' ); ?> <span aria-hidden="true">↗</span></a></article>
			<div class="google-reviews-frame"><iframe src="<?php echo esc_url( $google_reviews_embed ); ?>" title="<?php esc_attr_e( 'HomeCareService Google Maps listing in Khaperkheda, Maharashtra', 'homecarephysio' ); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe></div>
		</div>
	</section>
	<section class="trust-video content-wrap" aria-labelledby="trust-video-title">
		<div class="trust-video-copy"><p class="eyebrow"><?php esc_html_e( 'Professional standards', 'homecarephysio' ); ?></p><h2 id="trust-video-title"><?php esc_html_e( 'Physiotherapy you can trust.', 'homecarephysio' ); ?></h2><p><?php esc_html_e( 'An educational video from the Chartered Society of Physiotherapy explaining the value of professional chartered status. It does not describe or verify HomeCarePhysioUK staff credentials.', 'homecarephysio' ); ?></p></div>
		<div class="trust-video-frame"><iframe src="https://www.youtube-nocookie.com/embed/LKQ5HIEhfQ4" title="<?php esc_attr_e( 'The Chartered Society of Physiotherapy explains the value of chartered status', 'homecarephysio' ); ?>" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
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
