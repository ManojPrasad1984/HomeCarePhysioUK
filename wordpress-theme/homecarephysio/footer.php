<footer class="site-footer">
	<div class="footer-top">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span class="brand-mark" aria-hidden="true">＋</span>
			<span>HomeCare<span class="brand-light">PhysioUK</span></span>
		</a>
		<p><?php esc_html_e( 'Home-based physiotherapy, planned around everyday life.', 'homecarephysio' ); ?></p>
	</div>
	<div class="footer-columns">
		<nav aria-label="<?php esc_attr_e( 'Useful information', 'homecarephysio' ); ?>">
			<h2><?php esc_html_e( 'Useful information', 'homecarephysio' ); ?></h2>
			<a href="<?php echo esc_url( home_url( '/how-we-help/' ) ); ?>"><?php esc_html_e( 'How we help', 'homecarephysio' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'homecarephysio' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/conditions/' ) ); ?>"><?php esc_html_e( 'Conditions', 'homecarephysio' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/locations/' ) ); ?>"><?php esc_html_e( 'Locations', 'homecarephysio' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/faqs/' ) ); ?>"><?php esc_html_e( 'FAQs', 'homecarephysio' ); ?></a>
		</nav>
		<nav aria-label="<?php esc_attr_e( 'About HomeCarePhysioUK', 'homecarephysio' ); ?>">
			<h2><?php esc_html_e( 'HomeCarePhysioUK', 'homecarephysio' ); ?></h2>
			<a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"><?php esc_html_e( 'About us', 'homecarephysio' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/our-approach/' ) ); ?>"><?php esc_html_e( 'Our approach', 'homecarephysio' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/our-physios/' ) ); ?>"><?php esc_html_e( 'Our physios', 'homecarephysio' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>"><?php esc_html_e( 'Testimonials', 'homecarephysio' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/join-our-team/' ) ); ?>"><?php esc_html_e( 'Join our team', 'homecarephysio' ); ?></a>
		</nav>
		<nav aria-label="<?php esc_attr_e( 'Contact and updates', 'homecarephysio' ); ?>">
			<h2><?php esc_html_e( 'Contact', 'homecarephysio' ); ?></h2>
			<p><a href="tel:+919766627404">+91 97666 27404</a></p>
			<p><a href="mailto:manojprasad1984@gmail.com">manojprasad1984@gmail.com</a></p>
			<p><?php esc_html_e( 'Get in touch to ask about the service and practical arrangements.', 'homecarephysio' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact us', 'homecarephysio' ); ?> <span aria-hidden="true">→</span></a>
			<a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>"><?php esc_html_e( 'Articles and updates', 'homecarephysio' ); ?></a>
		</nav>
	</div>
	<div class="footer-bottom">
		<span><?php echo esc_html( sprintf( __( '© %s HomeCarePhysioUK', 'homecarephysio' ), wp_date( 'Y' ) ) ); ?></span>
		<span><?php esc_html_e( 'Service details are subject to confirmation.', 'homecarephysio' ); ?> <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php esc_html_e( 'Terms', 'homecarephysio' ); ?></a> · <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php esc_html_e( 'Privacy', 'homecarephysio' ); ?></a></span>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
