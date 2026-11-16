<?php
/**
 * Creates or updates the 16 starter pages and navigation for HomeCarePhysioUK.
 * Run from the LocalWP site root with: wp eval-file path/to/seed-pages.php
 */

$pages = array(
	array(
		'slug' => 'home', 'title' => 'Home', 'excerpt' => 'Home-based physiotherapy, shaped around your goals and everyday surroundings.',
		'content' => '<section class="condition-strip"><div class="condition-intro"><p class="eyebrow">How we help</p><h2>Movement support for everyday life.</h2><p>Start with what you would like to do more comfortably. A conversation can help clarify the next step.</p></div><div class="condition-list"><a href="/conditions/">Aches and stiffness <span aria-hidden="true">↗</span></a><a href="/conditions/">Mobility and balance <span aria-hidden="true">↗</span></a><a href="/conditions/">Returning to daily activities <span aria-hidden="true">↗</span></a><a href="/conditions/">Support after a change in health <span aria-hidden="true">↗</span></a></div></section><section class="feature-split"><div class="feature-photo"><img src="/wp-content/themes/homecarephysio/assets/images/physio-mobility.jpg" alt="A physiotherapist guiding an adult through a gentle movement exercise at home" loading="lazy"></div><div class="feature-copy"><p class="eyebrow">Care around you</p><h2>Care that fits your everyday.</h2><p>Home-based physiotherapy brings the conversation into a familiar setting. Start with your priorities, then discuss which support and practical arrangements may suit you.</p><a class="text-link" href="/our-approach/">See how it works</a></div></section><section class="section-block process-section"><div class="section-heading"><p class="eyebrow">A personal approach</p><h2>A clear way to get started.</h2></div><ol class="process-steps"><li><span class="step-index">01</span><div><h3>Tell us what you are looking for</h3><p>Share the movement or daily activity you would like to discuss.</p></div></li><li><span class="step-index">02</span><div><h3>Explore suitable options</h3><p>Review the service scope, availability and practical details together.</p></div></li><li><span class="step-index">03</span><div><h3>Agree on next steps</h3><p>If the service is suitable, discuss goals and appointment arrangements.</p></div></li></ol></section><section class="feature-split feature-split-reverse"><div class="feature-photo"><img src="/wp-content/themes/homecarephysio/assets/images/physio-consultation.jpg" alt="A physiotherapist and patient discussing a home exercise plan together" loading="lazy"></div><div class="feature-copy"><p class="eyebrow">Meet the team</p><h2>People make the difference.</h2><p>Learn about the professionals, experience and service areas once verified team information is available.</p><a class="text-link" href="/our-physios/">Meet our physios</a></div></section><section class="careers-callout"><div><p class="eyebrow">Join our team</p><h2>Build a career in home physiotherapy.</h2><p>Explore the team information and opportunities as they are confirmed.</p></div><a class="text-link" href="/join-our-team/">Find out more <span aria-hidden="true">↗</span></a></section><section class="contact-banner"><div><p class="eyebrow">Ready to take the next step?</p><p>Get in touch to ask about the service and discuss what you are looking for.</p></div><a class="button button-light" href="/contact/">Enquire now <span aria-hidden="true">→</span></a></section>'
	),
	array(
		'slug' => 'how-we-help', 'title' => 'How We Help', 'excerpt' => 'Explore broad areas where home physiotherapy may support movement and everyday goals.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>These are starting points for a conversation, not a diagnosis or a promise that every concern is treated.</p></div><div class="card-grid"><article class="info-card"><span class="card-number">01</span><h3>Moving more comfortably</h3><p>Discuss aches, stiffness or movement concerns that affect daily activities.</p></article><article class="info-card"><span class="card-number">02</span><h3>Building confidence</h3><p>Talk about balance, strength and moving around at home or outdoors.</p></article><article class="info-card"><span class="card-number">03</span><h3>Returning to routines</h3><p>Plan support around a change in health, an injury or a hospital stay.</p></article><article class="info-card"><span class="card-number">04</span><h3>Support at different ages</h3><p>Ask about options for adults, older people, children and young people.</p></article></div></section>'
	),
	array(
		'slug' => 'services', 'title' => 'Services', 'excerpt' => 'Explore potential home physiotherapy service areas. The final scope needs confirmation.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>Draft service categories informed by common home-physiotherapy pathways. Confirm each service, setting, age range, clinician expertise and eligibility before publishing.</p></div><div class="card-grid"><article class="info-card"><span class="card-number">01</span><h3>Muscle and joint care</h3><p>Potential support for aches, stiffness, injury and movement goals. Confirm the clinical scope.</p></article><article class="info-card"><span class="card-number">02</span><h3>Mobility and older adult care</h3><p>Potential support around strength, balance, confidence and everyday movement.</p></article><article class="info-card"><span class="card-number">03</span><h3>After surgery or hospital</h3><p>Confirm the post-operative scope, referral process and assessment arrangements.</p></article><article class="info-card"><span class="card-number">04</span><h3>Neurological rehabilitation</h3><p>Confirm the specialist scope, clinician experience and conditions supported.</p></article><article class="info-card"><span class="card-number">05</span><h3>Children and young people</h3><p>Confirm age range, practitioner credentials, safeguarding and referral arrangements.</p></article><article class="info-card"><span class="card-number">06</span><h3>Care homes and workplace visits</h3><p>Confirm whether visits or service partnerships are available in these settings.</p></article><article class="info-card"><span class="card-number">07</span><h3>Respiratory and women’s health</h3><p>Specialist areas to include only after clinical scope and practitioner expertise are verified.</p></article><article class="info-card"><span class="card-number">08</span><h3>Complex needs and case support</h3><p>Confirm assessment, referral and coordination arrangements before describing this service.</p></article></div></section>'
	),
	array(
		'slug' => 'our-physios', 'title' => 'Our Physios', 'excerpt' => 'Verified clinician biographies, registrations and service areas will be added here.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>No staff names or credentials have been supplied yet. Confirm every profile before publishing.</p></div><div class="card-grid"><article class="info-card"><h3>Professional registration</h3><p>Add each clinician’s verified professional registration and memberships.</p></article><article class="info-card"><h3>Experience and interests</h3><p>Add approved biographies and relevant areas of practice.</p></article><article class="info-card"><h3>Where they work</h3><p>List visit locations after availability and travel arrangements are confirmed.</p></article></div></section><section class="contact-banner"><div><p class="eyebrow">Interested in joining?</p><p>See the draft information for professionals.</p></div><a class="button button-light" href="/join-our-team/">Join our team <span aria-hidden="true">→</span></a></section>'
	),
	array(
		'slug' => 'pricing', 'title' => 'Pricing', 'excerpt' => 'Appointment fees and payment arrangements are being confirmed.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>Fees are not set on this draft page. Add verified prices and terms before accepting bookings.</p></div><div class="card-grid"><article class="info-card"><h3>Appointment fees</h3><p>Confirm assessment and follow-up prices, appointment lengths and packages.</p></article><article class="info-card"><h3>Travel and location</h3><p>Confirm whether travel costs vary by area and how they are calculated.</p></article><article class="info-card"><h3>Payment and insurance</h3><p>Confirm payment methods, insurance arrangements and when payment is due.</p></article></div></section>'
	),
	array(
		'slug' => 'about-us', 'title' => 'About Us', 'excerpt' => 'Learn about the people and principles behind HomeCarePhysioUK.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>Organisation details and service claims need confirmation before publication.</p></div><div class="card-grid"><article class="info-card"><h3>Personalised care</h3><p>Describe how the service listens and agrees goals together.</p></article><article class="info-card"><h3>Quality and safety</h3><p>Add verified clinical governance, safeguarding and quality information.</p></article><article class="info-card"><h3>Respect and communication</h3><p>Explain how the team works with individuals, families and professionals.</p></article></div></section>'
	),
	array(
		'slug' => 'conditions', 'title' => 'Conditions', 'excerpt' => 'Browse broad condition categories to discuss with a physiotherapist.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>This list is an initial outline, not a diagnosis. Have condition information reviewed by a qualified clinician before publication.</p></div><div class="card-grid"><article class="info-card"><h3>Muscle and joint</h3><p>Examples to review include back, neck, shoulder, hip and knee concerns.</p></article><article class="info-card"><h3>Neurological</h3><p>Confirm the conditions covered and clinician experience before listing them.</p></article><article class="info-card"><h3>Mobility and balance</h3><p>Discuss movement, walking confidence, falls concerns and individual goals.</p></article><article class="info-card"><h3>Orthopaedic recovery</h3><p>Confirm the scope for recovery from injury or orthopaedic procedures.</p></article><article class="info-card"><h3>Respiratory</h3><p>Confirm this specialist area with the clinical team before publication.</p></article><article class="info-card"><h3>Children and young people</h3><p>Confirm age range, scope and referral arrangements before listing conditions.</p></article></div></section>'
	),
	array(
		'slug' => 'locations', 'title' => 'Locations', 'excerpt' => 'Confirmed service locations, travel boundaries and visit settings will be listed here.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>Coverage has not been confirmed. Check availability directly before relying on a location listing.</p></div><div class="card-grid"><article class="info-card"><h3>Areas covered</h3><p>Add the towns or postcodes where visits can currently be arranged.</p></article><article class="info-card"><h3>Visit settings</h3><p>Confirm whether visits are available at home, in care settings or workplaces.</p></article><article class="info-card"><h3>Appointment availability</h3><p>Add verified days, hours and any regional differences.</p></article></div></section>'
	),
	array(
		'slug' => 'faqs', 'title' => 'FAQs', 'excerpt' => 'Answers to common questions about home physiotherapy.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>Answers marked for confirmation should be completed by the service owner.</p></div><div class="faq-list"><details><summary>Where do you provide visits?</summary><p>Service locations have not been confirmed. See the Locations page for the information to be added.</p></details><details><summary>How much does an appointment cost?</summary><p>Fees, appointment lengths and travel costs are still to be confirmed. See Pricing.</p></details><details><summary>Do I need a referral?</summary><p>Referral arrangements have not been confirmed. Add the service’s verified process.</p></details><details><summary>What happens at the first appointment?</summary><p>Add the confirmed assessment process and what information a person may want to have ready.</p></details><details><summary>Can I use private medical insurance?</summary><p>Insurance arrangements have not been confirmed. Check with the service before publishing an answer.</p></details><details><summary>How do I change or cancel an appointment?</summary><p>Add the confirmed cancellation policy and the correct contact route.</p></details></div></section>'
	),
	array(
		'slug' => 'our-approach', 'title' => 'Our Approach', 'excerpt' => 'A simple outline of how a home physiotherapy appointment may work.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>A suggested care journey based on the reference pattern. Confirm booking, referral, assessment, continuity, follow-up and discharge policies with the service team before publishing.</p></div><ol class="steps"><li><span>01</span><div><h3>Make an enquiry or referral</h3><p>Share the support you are looking for. Add direct booking and professional referral routes once verified.</p></div></li><li><span>02</span><div><h3>Arrange an initial assessment</h3><p>Discuss relevant history, daily activities, goals and whether a home visit may be suitable.</p></div></li><li><span>03</span><div><h3>Agree a personalised plan</h3><p>If the service is appropriate, agree goals and possible next steps together.</p></div></li><li><span>04</span><div><h3>Begin treatment and practice</h3><p>Describe the treatment and any exercises only after the clinical team confirms its approach.</p></div></li><li><span>05</span><div><h3>Review progress</h3><p>Confirm how progress is reviewed, follow-up is arranged and continuity is supported.</p></div></li><li><span>06</span><div><h3>Plan an appropriate next step</h3><p>Explain ongoing support or discharge arrangements only after the service policy is approved.</p></div></li></ol></section>'
	),
	array(
		'slug' => 'testimonials', 'title' => 'Testimonials', 'excerpt' => 'Patient feedback will be shared here only with clear permission.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>No testimonials have been supplied. Publish feedback only with clear permission and do not imply that one person’s outcome is typical or guaranteed.</p></div></section>'
	),
	array(
		'slug' => 'join-our-team', 'title' => 'Join Our Team', 'excerpt' => 'Information for professionals interested in working with HomeCarePhysioUK.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>No vacancies or recruitment contact details have been supplied.</p></div><div class="card-grid"><article class="info-card"><h3>Current opportunities</h3><p>Add open roles, contract type, location and application dates.</p></article><article class="info-card"><h3>Professional requirements</h3><p>List verified registration, experience and role-specific requirements.</p></article><article class="info-card"><h3>Working with us</h3><p>Describe confirmed supervision, development and team support.</p></article></div></section>'
	),
	array(
		'slug' => 'contact', 'title' => 'Contact', 'excerpt' => 'Verified contact routes will be added here.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>Add a monitored contact route before publishing. Do not collect health information through an unconfigured form.</p></div><div class="card-grid"><article class="info-card"><h3>Telephone</h3><p>Verified number to be added.</p></article><article class="info-card"><h3>Email</h3><p>Verified email address to be added.</p></article><article class="info-card"><h3>Bookings and referrals</h3><p>Confirmed booking or referral route to be added.</p></article></div></section>'
	),
	array(
		'slug' => 'articles', 'title' => 'Articles', 'excerpt' => 'Reviewed information about physiotherapy, movement and home-based care.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>No articles have been supplied. Health articles should be reviewed by a qualified clinician and kept current.</p></div><article class="info-card"><h3>Coming soon</h3><p>Reviewed article titles and content will appear here when ready.</p></article></section>'
	),
	array(
		'slug' => 'terms', 'title' => 'Terms and Conditions', 'excerpt' => 'Terms for the website and services are to be confirmed.',
		'content' => '<section class="text-sections"><div class="notice"><span aria-hidden="true">i</span><p>Placeholder only. This is not legal wording. Have the final terms reviewed and approved before publication.</p></div><section><h2>Website use</h2><p>Add the rules that apply to use of this website.</p></section><section><h2>Appointments and services</h2><p>Add confirmed booking, cancellation, payment and service terms.</p></section><section><h2>Questions</h2><p>Add the correct contact for questions about these terms.</p></section></section>'
	),
	array(
		'slug' => 'privacy', 'title' => 'Privacy Policy', 'excerpt' => 'Privacy information must reflect the organisation’s actual data practices.',
		'content' => '<section class="text-sections"><div class="notice"><span aria-hidden="true">i</span><p>Placeholder only. Confirm actual data practices and have the final notice reviewed before publication.</p></div><section><h2>Who is responsible</h2><p>Add the legal name and contact details of the data controller.</p></section><section><h2>Information and purpose</h2><p>Describe information collected, why it is used and the lawful basis for each purpose.</p></section><section><h2>Health information</h2><p>Explain any health information handled, who can access it, how it is protected and how long it is kept.</p></section><section><h2>Sharing and rights</h2><p>List recipients, retention periods, individual rights and how to raise a concern.</p></section></section>'
	),
);

$page_ids = array();
foreach ( $pages as $page ) {
	$existing = get_page_by_path( $page['slug'], OBJECT, 'page' );
	$post_data = array(
		'post_type'    => 'page',
		'post_status'  => 'publish',
		'post_title'   => $page['title'],
		'post_name'    => $page['slug'],
		'post_excerpt' => $page['excerpt'],
		'post_content' => $page['content'],
	);
	if ( $existing ) {
		$post_data['ID'] = $existing->ID;
		$page_ids[ $page['slug'] ] = wp_update_post( $post_data, true );
	} else {
		$page_ids[ $page['slug'] ] = wp_insert_post( $post_data, true );
	}
	if ( is_wp_error( $page_ids[ $page['slug'] ] ) ) {
		WP_CLI::error( $page_ids[ $page['slug'] ]->get_error_message() );
	}
}

// Keep WordPress's starter page out of the published site without deleting it.
$sample_page = get_page_by_path( 'sample-page', OBJECT, 'page' );
if ( $sample_page && 'Sample Page' === $sample_page->post_title ) {
	wp_update_post(
		array(
			'ID'          => $sample_page->ID,
			'post_status' => 'draft',
		)
	);
}

update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $page_ids['home'] );
update_option( 'permalink_structure', '/%postname%/' );

function homecarephysio_seed_menu( $name, $slugs, $page_ids ) {
	$menu = wp_get_nav_menu_object( $name );
	$menu_id = $menu ? (int) $menu->term_id : wp_create_nav_menu( $name );
	if ( is_wp_error( $menu_id ) ) {
		WP_CLI::error( $menu_id->get_error_message() );
	}
	foreach ( get_objects_in_term( $menu_id, 'nav_menu' ) ?: array() as $item_id ) {
		wp_delete_post( $item_id, true );
	}
	foreach ( $slugs as $slug ) {
		wp_update_nav_menu_item(
			$menu_id,
			0,
			array(
				'menu-item-title'     => get_the_title( $page_ids[ $slug ] ),
				'menu-item-object'    => 'page',
				'menu-item-object-id' => $page_ids[ $slug ],
				'menu-item-type'      => 'post_type',
				'menu-item-status'    => 'publish',
			)
		);
	}
	return (int) $menu_id;
}

$primary_menu_id = homecarephysio_seed_menu( 'HomeCare Primary', array( 'how-we-help', 'services', 'our-physios', 'pricing', 'about-us' ), $page_ids );
$footer_menu_id  = homecarephysio_seed_menu( 'HomeCare Sitemap', array_keys( $page_ids ), $page_ids );
set_theme_mod(
	'nav_menu_locations',
	array(
		'primary' => $primary_menu_id,
		'footer'  => $footer_menu_id,
	)
);
flush_rewrite_rules();
WP_CLI::success( 'HomeCarePhysioUK pages and navigation are ready.' );

