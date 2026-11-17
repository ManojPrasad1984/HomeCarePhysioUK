<?php
/** Shared page layout with topic imagery and an enquiry path. @package HomeCarePhysio */
get_header();

$homecare_page_visuals = array(
	'how-we-help'    => array( 'image' => 'page-home-care.jpg', 'alt' => __( 'A physiotherapist and patient discussing movement during a home visit', 'homecarephysio' ), 'label' => __( 'How we help', 'homecarephysio' ) ),
	'services'       => array( 'image' => 'physio-consultation.jpg', 'alt' => __( 'A physiotherapist and patient discussing a treatment plan at home', 'homecarephysio' ), 'label' => __( 'Services', 'homecarephysio' ) ),
	'our-physios'    => array( 'image' => 'page-team.jpg', 'alt' => __( 'A small team of physiotherapists', 'homecarephysio' ), 'label' => __( 'Our team', 'homecarephysio' ) ),
	'about-us'       => array( 'image' => 'page-team.jpg', 'alt' => __( 'A team of physiotherapists in a bright studio', 'homecarephysio' ), 'label' => __( 'About us', 'homecarephysio' ) ),
	'conditions'     => array( 'image' => 'page-home-care.jpg', 'alt' => __( 'A physiotherapist discussing a patient’s movement goals', 'homecarephysio' ), 'label' => __( 'Areas to discuss', 'homecarephysio' ) ),
	'locations'      => array( 'image' => 'page-outdoor.jpg', 'alt' => __( 'A physiotherapist talking with an older adult on a park path', 'homecarephysio' ), 'label' => __( 'Locations', 'homecarephysio' ) ),
	'our-approach'   => array( 'image' => 'physio-consultation.jpg', 'alt' => __( 'A physiotherapist and patient discussing a home exercise plan', 'homecarephysio' ), 'label' => __( 'Our approach', 'homecarephysio' ) ),
	'join-our-team'  => array( 'image' => 'page-team.jpg', 'alt' => __( 'A team of physiotherapists together', 'homecarephysio' ), 'label' => __( 'Join our team', 'homecarephysio' ) ),
	'articles'       => array( 'image' => 'page-outdoor.jpg', 'alt' => __( 'A physiotherapist and older adult walking outdoors', 'homecarephysio' ), 'label' => __( 'Information and updates', 'homecarephysio' ) ),
	'pricing'        => array( 'image' => 'physio-consultation.jpg', 'alt' => __( 'A physiotherapist talking with a patient about care options', 'homecarephysio' ), 'label' => __( 'Pricing', 'homecarephysio' ) ),
	'faqs'           => array( 'image' => 'page-home-care.jpg', 'alt' => __( 'A physiotherapist listening to a patient at home', 'homecarephysio' ), 'label' => __( 'Common questions', 'homecarephysio' ) ),
	'testimonials'   => array( 'image' => 'page-home-care.jpg', 'alt' => __( 'A patient and physiotherapist sharing a friendly conversation', 'homecarephysio' ), 'label' => __( 'Patient experiences', 'homecarephysio' ) ),
	'contact'        => array( 'image' => 'physio-consultation.jpg', 'alt' => __( 'A patient speaking with a physiotherapist during a home visit', 'homecarephysio' ), 'label' => __( 'Contact', 'homecarephysio' ) ),
	'terms'          => array( 'image' => 'page-outdoor.jpg', 'alt' => __( 'A calm outdoor path surrounded by greenery', 'homecarephysio' ), 'label' => __( 'Terms and conditions', 'homecarephysio' ) ),
	'privacy'        => array( 'image' => 'page-outdoor.jpg', 'alt' => __( 'A calm outdoor path surrounded by greenery', 'homecarephysio' ), 'label' => __( 'Privacy', 'homecarephysio' ) ),
	'post-operative-rehabilitation' => array( 'image' => 'physio-mobility.jpg', 'alt' => __( 'A physiotherapist guiding a patient through a mobility exercise', 'homecarephysio' ), 'label' => __( 'Recovery after surgery', 'homecarephysio' ) ),
	'joint-muscle-pain' => array( 'image' => 'physio-consultation.jpg', 'alt' => __( 'A physiotherapist discussing a patient’s movement goals', 'homecarephysio' ), 'label' => __( 'Joint and muscle support', 'homecarephysio' ) ),
	'neurological-physiotherapy' => array( 'image' => 'physio-mobility.jpg', 'alt' => __( 'A physiotherapist supporting a patient with a guided exercise', 'homecarephysio' ), 'label' => __( 'Neurological physiotherapy', 'homecarephysio' ) ),
	'sports-injury-rehabilitation' => array( 'image' => 'page-outdoor.jpg', 'alt' => __( 'A physiotherapist supporting a patient during a walking exercise', 'homecarephysio' ), 'label' => __( 'Sports injury rehabilitation', 'homecarephysio' ) ),
	'occupational-health-physiotherapy' => array( 'image' => 'physio-consultation.jpg', 'alt' => __( 'A physiotherapist listening to a patient during a consultation', 'homecarephysio' ), 'label' => __( 'Workplace physiotherapy', 'homecarephysio' ) ),
	'falls-prevention-balance' => array( 'image' => 'page-outdoor.jpg', 'alt' => __( 'An older adult practising a supported walking exercise outdoors', 'homecarephysio' ), 'label' => __( 'Balance and confidence', 'homecarephysio' ) ),
	'mobility-walking-rehabilitation' => array( 'image' => 'physio-mobility.jpg', 'alt' => __( 'A physiotherapist guiding a patient through a mobility exercise', 'homecarephysio' ), 'label' => __( 'Mobility and walking', 'homecarephysio' ) ),
	'care-home-physiotherapy' => array( 'image' => 'page-home-care.jpg', 'alt' => __( 'A physiotherapist speaking with a patient in a home setting', 'homecarephysio' ), 'label' => __( 'Care home physiotherapy', 'homecarephysio' ) ),
	'home-visits-all-ages' => array( 'image' => 'page-home-care.jpg', 'alt' => __( 'A physiotherapist visiting a patient at home', 'homecarephysio' ), 'label' => __( 'Home visits', 'homecarephysio' ) ),
);

$homecare_page_notes = array(
	'pricing' => __( 'Appointment fees and travel arrangements are being confirmed. Ask the team for current details.', 'homecarephysio' ),
	'faqs'    => __( 'Still have a question? The Contact page is the place to start.', 'homecarephysio' ),
);
$homecare_no_cta = array( 'contact', 'terms', 'privacy', 'our-physios' );
$homecare_service_slugs = array( 'services', 'post-operative-rehabilitation', 'joint-muscle-pain', 'neurological-physiotherapy', 'sports-injury-rehabilitation', 'occupational-health-physiotherapy', 'falls-prevention-balance', 'mobility-walking-rehabilitation', 'care-home-physiotherapy', 'home-visits-all-ages' );
?>
<main id="main" class="page-main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
		$page_slug = get_post_field( 'post_name', get_the_ID() );
		$visual    = isset( $homecare_page_visuals[ $page_slug ] ) ? $homecare_page_visuals[ $page_slug ] : null;
		$note      = isset( $homecare_page_notes[ $page_slug ] ) ? $homecare_page_notes[ $page_slug ] : '';
		?>
		<?php if ( 'how-we-help' === $page_slug ) : ?>
			<header class="page-hero-how-we-help">
				<figure class="how-we-help-banner-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/page-home-care.jpg' ) ); ?>" alt="A physiotherapist helping a patient practise movement at home" fetchpriority="high"></figure>
				<div class="how-we-help-banner-copy">
					<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'homecarephysio' ); ?>"><ol><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'homecarephysio' ); ?></a></li><li aria-current="page"><?php the_title(); ?></li></ol></nav>
					<p class="eyebrow"><span></span><?php esc_html_e( 'How we help', 'homecarephysio' ); ?></p>
					<h1><?php esc_html_e( 'We offer support and solutions for numerous problems', 'homecarephysio' ); ?></h1>
				</div>
			</header>
		<?php else : ?>
		<header class="page-hero content-wrap <?php echo $visual ? 'has-page-visual' : 'is-text-only'; ?>">
			<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'homecarephysio' ); ?>">
				<ol><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'homecarephysio' ); ?></a></li><li aria-current="page"><?php the_title(); ?></li></ol>
			</nav>
			<div class="page-hero-grid">
				<div class="page-hero-copy">
					<p class="eyebrow"><span></span><?php echo esc_html( $visual ? $visual['label'] : __( 'HomeCarePhysioUK', 'homecarephysio' ) ); ?></p>
					<h1><?php the_title(); ?></h1>
					<?php if ( has_excerpt() ) : ?><p class="lead"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
				</div>
				<?php if ( $visual ) : ?>
					<figure class="page-hero-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $visual['image'] ) ); ?>" alt="<?php echo esc_attr( $visual['alt'] ); ?>" loading="eager"><span class="page-image-frame" aria-hidden="true"></span></figure>
				<?php elseif ( $note ) : ?>
					<aside class="page-hero-note"><span class="page-note-mark" aria-hidden="true">＋</span><p><?php echo esc_html( $note ); ?></p><?php if ( 'faqs' === $page_slug ) : ?><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get in touch', 'homecarephysio' ); ?> <span aria-hidden="true">→</span></a><?php endif; ?></aside>
				<?php endif; ?>
			</div>
		</header>
		<?php endif; ?>
		<?php if ( in_array( $page_slug, $homecare_service_slugs, true ) || 'contact' === $page_slug ) : ?>
			<section class="triage-promo triage-promo-inner content-wrap" aria-labelledby="triage-page-title">
				<div class="triage-promo-copy"><p class="eyebrow"><?php esc_html_e( 'A helpful first step', 'homecarephysio' ); ?></p><h2 id="triage-page-title"><?php esc_html_e( 'Request a free 15-minute triage call.', 'homecarephysio' ); ?></h2><p><?php esc_html_e( 'Send your contact details. A physiotherapist will call for a short triage conversation; you can then decide whether to book.', 'homecarephysio' ); ?></p></div>
				<ol class="triage-steps"><li><span>01</span><?php esc_html_e( 'Send an enquiry', 'homecarephysio' ); ?></li><li><span>02</span><?php esc_html_e( 'Speak with a physiotherapist', 'homecarephysio' ); ?></li><li><span>03</span><?php esc_html_e( 'Choose whether to book', 'homecarephysio' ); ?></li></ol>
				<a class="button" href="<?php echo esc_url( home_url( '/contact/#triage-form' ) ); ?>"><?php esc_html_e( 'Request the free call', 'homecarephysio' ); ?><span aria-hidden="true">→</span></a>
				<p class="satisfaction-promise"><?php esc_html_e( 'First visit satisfaction guarantee: if you or your family are not satisfied after the initial assessment, we will offer a different physiotherapist.', 'homecarephysio' ); ?></p>
			</section>
		<?php endif; ?>
		<article <?php post_class( 'entry-content content-wrap' ); ?>>
			<?php the_content(); ?>
		</article>
		<?php if ( 'contact' === $page_slug ) : ?>
			<section class="triage-form-panel content-wrap" id="triage-form" aria-labelledby="triage-form-title">
				<div class="triage-contact-details"><p class="eyebrow"><?php esc_html_e( 'Get in touch', 'homecarephysio' ); ?></p><h2 id="triage-form-title"><?php esc_html_e( 'Request your free 15-minute call.', 'homecarephysio' ); ?></h2><p><?php esc_html_e( 'Share how to reach you. Please do not include medical or other sensitive details in this form.', 'homecarephysio' ); ?></p><p><a href="tel:+919766627404">+91 97666 27404</a></p><p><a href="mailto:manojprasad1984@gmail.com">manojprasad1984@gmail.com</a></p></div>
				<?php $triage_status = isset( $_GET['triage'] ) ? sanitize_key( wp_unslash( $_GET['triage'] ) ) : ''; ?>
				<?php if ( 'sent' === $triage_status ) : ?><p class="form-notice" role="status"><?php esc_html_e( 'Thank you. Your request has been sent.', 'homecarephysio' ); ?></p><?php elseif ( 'failed' === $triage_status ) : ?><p class="form-notice" role="alert"><?php esc_html_e( 'The request could not be sent just now. Please call or email us.', 'homecarephysio' ); ?></p><?php elseif ( 'invalid' === $triage_status ) : ?><p class="form-notice" role="alert"><?php esc_html_e( 'Please add your name, a valid email, phone number and consent.', 'homecarephysio' ); ?></p><?php endif; ?>
				<form class="triage-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
					<input type="hidden" name="action" value="homecarephysio_triage_request"><?php wp_nonce_field( 'homecare_triage_request', 'homecare_triage_nonce' ); ?>
					<label><?php esc_html_e( 'Name', 'homecarephysio' ); ?><input name="triage_name" autocomplete="name" required></label>
					<label><?php esc_html_e( 'Email', 'homecarephysio' ); ?><input type="email" name="triage_email" autocomplete="email" required></label>
					<label><?php esc_html_e( 'Phone', 'homecarephysio' ); ?><input type="tel" name="triage_phone" autocomplete="tel" required></label>
					<label><?php esc_html_e( 'Postcode (optional)', 'homecarephysio' ); ?><input name="triage_postcode" autocomplete="postal-code"></label>
					<label class="triage-consent"><input type="checkbox" name="triage_consent" value="1" required><span><?php esc_html_e( 'I agree to be contacted about this request. I will not include medical details.', 'homecarephysio' ); ?></span></label>
					<button class="button" type="submit"><?php esc_html_e( 'Send my request', 'homecarephysio' ); ?><span aria-hidden="true">→</span></button>
				</form>
			</section>
		<?php endif; ?>
		<?php if ( ! in_array( $page_slug, $homecare_no_cta, true ) ) : ?>
			<section class="inner-page-cta content-wrap"><div><p class="eyebrow"><?php esc_html_e( 'Start with a conversation', 'homecarephysio' ); ?></p><h2><?php esc_html_e( 'Would you like to know more?', 'homecarephysio' ); ?></h2><p><?php esc_html_e( 'Get in touch to ask about the service and discuss your next step.', 'homecarephysio' ); ?></p></div><a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact us', 'homecarephysio' ); ?><span aria-hidden="true">→</span></a></section>
		<?php endif; ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
