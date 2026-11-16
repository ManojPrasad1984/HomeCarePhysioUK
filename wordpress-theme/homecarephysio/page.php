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
);

$homecare_page_notes = array(
	'pricing' => __( 'Appointment fees and travel arrangements are being confirmed. Ask the team for current details.', 'homecarephysio' ),
	'faqs'    => __( 'Still have a question? The Contact page is the place to start.', 'homecarephysio' ),
);
$homecare_no_cta = array( 'contact', 'terms', 'privacy', 'our-physios' );
?>
<main id="main" class="page-main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
		$page_slug = get_post_field( 'post_name', get_the_ID() );
		$visual    = isset( $homecare_page_visuals[ $page_slug ] ) ? $homecare_page_visuals[ $page_slug ] : null;
		$note      = isset( $homecare_page_notes[ $page_slug ] ) ? $homecare_page_notes[ $page_slug ] : '';
		?>
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
		<article <?php post_class( 'entry-content content-wrap' ); ?>>
			<?php the_content(); ?>
		</article>
		<?php if ( ! in_array( $page_slug, $homecare_no_cta, true ) ) : ?>
			<section class="inner-page-cta content-wrap"><div><p class="eyebrow"><?php esc_html_e( 'Start with a conversation', 'homecarephysio' ); ?></p><h2><?php esc_html_e( 'Would you like to know more?', 'homecarephysio' ); ?></h2><p><?php esc_html_e( 'Get in touch to ask about the service and discuss your next step.', 'homecarephysio' ); ?></p></div><a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact us', 'homecarephysio' ); ?><span aria-hidden="true">→</span></a></section>
		<?php endif; ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>

