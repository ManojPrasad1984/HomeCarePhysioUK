<?php
/** Default page template. @package HomeCarePhysio */
get_header();
?>
<main id="main" class="page-main">
	<?php while ( have_posts() ) : the_post(); ?>
		<header class="page-hero content-wrap">
			<p class="eyebrow"><span></span><?php esc_html_e( 'HomeCarePhysioUK', 'homecarephysio' ); ?></p>
			<h1><?php the_title(); ?></h1>
			<?php if ( has_excerpt() ) : ?><p class="lead"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
		</header>
		<article <?php post_class( 'entry-content content-wrap' ); ?>>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
