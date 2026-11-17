<?php
/**
 * Creates or updates the 16 starter pages and navigation for HomeCarePhysioUK.
 * Run from the LocalWP site root with: wp eval-file path/to/seed-pages.php
 */

$pages = array(
	array(
		'slug' => 'home', 'title' => 'Home', 'excerpt' => 'Home-based physiotherapy, shaped around your goals and everyday surroundings.',
		'content' => '<section class="condition-strip"><div class="condition-intro"><p class="eyebrow">How we help</p><h2>Movement support for everyday life.</h2><p>Start with what you would like to do more comfortably. A conversation can help clarify the next step.</p></div><div class="condition-list"><a href="/conditions/">Aches and stiffness <span aria-hidden="true">↗</span></a><a href="/conditions/">Mobility and balance <span aria-hidden="true">↗</span></a><a href="/conditions/">Returning to daily activities <span aria-hidden="true">↗</span></a><a href="/conditions/">Support after a change in health <span aria-hidden="true">↗</span></a></div></section><section class="feature-split"><div class="feature-photo"><img src="/wp-content/themes/homecarephysio/assets/images/physio-mobility.jpg" alt="A physiotherapist guiding an adult through a gentle movement exercise at home" loading="lazy"></div><div class="feature-copy"><p class="eyebrow">Care around you</p><h2>Care that fits your everyday.</h2><p>Home-based physiotherapy brings the conversation into a familiar setting. Start with your priorities, then discuss which support and practical arrangements may suit you.</p><a class="text-link" href="/our-approach/">See how it works</a></div></section><section class="section-block process-section"><div class="section-heading"><p class="eyebrow">A personal approach</p><h2>A clear way to get started.</h2></div><ol class="process-steps"><li><span class="step-index">01</span><div><h3>Tell us what you are looking for</h3><p>Share the movement or daily activity you would like to discuss.</p></div></li><li><span class="step-index">02</span><div><h3>Explore suitable options</h3><p>Review the service scope, availability and practical details together.</p></div></li><li><span class="step-index">03</span><div><h3>Agree on next steps</h3><p>If the service is suitable, discuss goals and appointment arrangements.</p></div></li></ol></section><section class="feature-split feature-split-reverse"><div class="feature-photo"><img src="/wp-content/themes/homecarephysio/assets/images/physio-consultation.jpg" alt="A physiotherapist and patient discussing a home exercise plan together" loading="lazy"></div><div class="feature-copy"><p class="eyebrow">Meet the team</p><h2>People make the difference.</h2><p>Learn about the professionals, experience and service areas once verified team information is available.</p><a class="text-link" href="/our-physios/">Meet our physios</a></div></section><section class="careers-callout"><div><p class="eyebrow">Join our team</p><h2>Build a career in home physiotherapy.</h2><p>Explore the team information and opportunities as they are confirmed.</p></div><a class="text-link" href="/join-our-team/">Find out more <span aria-hidden="true">↗</span></a></section><section class="section-block home-faq"><div class="section-heading"><p class="eyebrow">Useful information</p><h2>Questions? We have answers.</h2></div><div class="faq-list"><details><summary>How do I request the free triage call?</summary><p>Send your contact details through the Contact page and a physiotherapist will call for a free 15-minute triage conversation.</p></details><details><summary>Do I have to book after the call?</summary><p>No. After the call, you can decide whether you would like to book an appointment.</p></details><details><summary>How much is the post-operative package?</summary><p>The six-session home physiotherapy package is £730. Other appointment prices are still being confirmed.</p></details><details><summary>What if I am not happy after the first assessment?</summary><p>If you or your family are not satisfied after the initial assessment, we will offer a different physiotherapist.</p></details></div><a class="text-link" href="/faqs/">View all FAQs <span aria-hidden="true">↗</span></a></section><section class="contact-banner"><div><p class="eyebrow">Ready to take the next step?</p><p>Request your free 15-minute triage call with a physiotherapist.</p></div><a class="button button-light" href="/contact/#triage-form">Request a call <span aria-hidden="true">→</span></a></section>'
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
		'slug' => 'pricing', 'title' => 'Pricing', 'excerpt' => 'A six-session home physiotherapy package for post-operative recovery is available for £730.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>Other appointment fees, travel costs, payment terms and insurance arrangements still need confirmation.</p></div><div class="pricing-feature"><p class="eyebrow">Post-operative orthopaedic package</p><h2>Six home physiotherapy sessions</h2><p>For recovery after knee, hip, ankle or shoulder joint replacement, spinal surgery, or other joint surgery.</p><p class="package-price">£730</p><a class="button" href="/contact/#triage-form">Ask about the package <span aria-hidden="true">→</span></a></div><div class="satisfaction-card"><h3>First visit satisfaction guarantee</h3><p>If you or your family are not satisfied after the initial assessment, we will offer a different physiotherapist.</p></div><div class="service-faq pricing-faq"><h2>Pricing questions</h2><details><summary>What does the £730 package include?</summary><p>It covers six home physiotherapy sessions for the surgery types listed above. Any additional terms should be confirmed with the team.</p></details><details><summary>Are other appointment prices available?</summary><p>Assessment and follow-up prices are being confirmed. Contact the team for the latest information.</p></details><details><summary>Does the package include travel or insurance?</summary><p>Travel charges and insurance arrangements have not been confirmed. Please ask before booking.</p></details><details><summary>What if I am not satisfied after the initial assessment?</summary><p>If you or your family are not satisfied, we will offer a different physiotherapist.</p></details></div><div class="card-grid"><article class="info-card"><h3>Other appointment fees</h3><p>Assessment and follow-up rates will be added once confirmed.</p></article><article class="info-card"><h3>Travel and location</h3><p>Travel charges and visit areas are being confirmed.</p></article><article class="info-card"><h3>Payment and insurance</h3><p>Payment methods, timing and insurance arrangements need confirmation.</p></article></div></section>'
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
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>Patient video testimonials are planned. Publish them only after each patient has given permission for the specific recording and its use. The sample video on the home page is a demonstration clip, not patient feedback.</p></div><div class="info-card"><h3>Video stories coming soon</h3><p>Up to five short patient videos are planned, subject to consent and availability.</p></div></section>'
	),
	array(
		'slug' => 'join-our-team', 'title' => 'Join Our Team', 'excerpt' => 'Information for professionals interested in working with HomeCarePhysioUK.',
		'content' => '<section class="section-block"><div class="notice"><span aria-hidden="true">i</span><p>No vacancies or recruitment contact details have been supplied.</p></div><div class="card-grid"><article class="info-card"><h3>Current opportunities</h3><p>Add open roles, contract type, location and application dates.</p></article><article class="info-card"><h3>Professional requirements</h3><p>List verified registration, experience and role-specific requirements.</p></article><article class="info-card"><h3>Working with us</h3><p>Describe confirmed supervision, development and team support.</p></article></div></section>'
	),
	array(
		'slug' => 'contact', 'title' => 'Contact', 'excerpt' => 'Request a free 15-minute triage call with a physiotherapist.',
		'content' => '<section class="section-block"><div class="card-grid"><article class="info-card"><h3>Telephone</h3><p><a href="tel:+919766627404">+91 97666 27404</a></p></article><article class="info-card"><h3>Email</h3><p><a href="mailto:manojprasad1984@gmail.com">manojprasad1984@gmail.com</a></p></article><article class="info-card"><h3>How the first step works</h3><p>Send a short enquiry, speak with a physiotherapist for a free 15-minute triage call, then decide whether you would like to book.</p></article></div></section>'
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

// These nine service pages match the supplied Home Care Physio page set.
$service_pages = array(
	array( 'slug' => 'care-home-physiotherapy', 'title' => 'Care Home Physiotherapy', 'excerpt' => 'Physiotherapy support in a care home setting.', 'intro' => 'Ask about physiotherapy in a care home setting, including support around movement, strength and everyday confidence. Availability and clinical scope should be confirmed for each enquiry.', 'focus' => 'care home physiotherapy' ),
	array( 'slug' => 'falls-prevention-balance', 'title' => 'Falls Prevention and Balance Rehabilitation', 'excerpt' => 'Discuss balance, falls concerns and movement confidence.', 'intro' => 'A physiotherapist can discuss balance, strength and confidence with everyday movement. This page is general information and does not replace an individual assessment.', 'focus' => 'balance and falls concerns' ),
	array( 'slug' => 'home-visits-all-ages', 'title' => 'Home Visits for All Ages', 'excerpt' => 'Ask about home visits and the needs of different age groups.', 'intro' => 'Home visits can make it easier to discuss movement goals in a familiar setting. Ask the team which age groups, needs and visit areas the service can currently support.', 'focus' => 'a home physiotherapy visit' ),
	array( 'slug' => 'joint-muscle-pain', 'title' => 'Joint and Muscle Pain', 'excerpt' => 'Discuss aches, stiffness and movement concerns.', 'intro' => 'Aches, stiffness and joint or muscle concerns can affect daily routines. A physiotherapist can discuss your goals and whether the service may be suitable.', 'focus' => 'joint or muscle concerns' ),
	array( 'slug' => 'mobility-walking-rehabilitation', 'title' => 'Mobility and Walking Rehabilitation', 'excerpt' => 'Discuss walking, mobility and everyday movement goals.', 'intro' => 'Talk about walking and mobility goals in the setting where you move each day. Support options depend on assessment and confirmed service availability.', 'focus' => 'walking and mobility goals' ),
	array( 'slug' => 'neurological-physiotherapy', 'title' => 'Neurological Physiotherapy', 'excerpt' => 'Ask about physiotherapy for neurological movement needs.', 'intro' => 'If you are looking for physiotherapy related to a neurological condition, contact the team to discuss clinical scope, clinician experience and suitability before booking.', 'focus' => 'neurological physiotherapy' ),
	array( 'slug' => 'occupational-health-physiotherapy', 'title' => 'Occupational Health Physiotherapy', 'excerpt' => 'Ask about workplace physiotherapy and movement support.', 'intro' => 'Workplace physiotherapy arrangements depend on the service and location. Contact the team to discuss the need, setting and whether an appointment can be arranged.', 'focus' => 'workplace physiotherapy' ),
	array( 'slug' => 'post-operative-rehabilitation', 'title' => 'Post-Operative Rehabilitation', 'excerpt' => 'A six-session home physiotherapy package for post-operative orthopaedic recovery.', 'intro' => 'Home physiotherapy after joint replacement or spinal surgery may help you work towards movement goals following an individual assessment. The six-session package is £730.', 'focus' => 'post-operative recovery' ),
	array( 'slug' => 'sports-injury-rehabilitation', 'title' => 'Sports Injury Rehabilitation', 'excerpt' => 'Discuss rehabilitation after a sports injury.', 'intro' => 'Ask about physiotherapy following a sports injury. A clinician can discuss your movement goals and whether the service is suitable for your needs.', 'focus' => 'a sports injury' ),
);

foreach ( $service_pages as $service_page ) {
	$faqs = array(
		array( 'Can a physiotherapist discuss ' . $service_page['focus'] . '?', 'Request a free 15-minute triage call. A physiotherapist can discuss your needs and confirm whether the service is appropriate.' ),
		array( 'What happens at the first appointment?', 'The first appointment begins with an individual assessment. Treatment and next steps should be agreed with the physiotherapist based on your needs.' ),
		array( 'How many appointments will I need?', 'This depends on your needs and goals. Discuss a suitable plan with the physiotherapist after assessment.' ),
		array( 'How do I ask about this service?', 'Send a request for a free 15-minute triage call using the Contact page, or call +91 97666 27404.' ),
	);
	$content = '<section class="section-block"><p>' . esc_html( $service_page['intro'] ) . '</p><div class="service-faq"><h2>Common questions</h2>';
	foreach ( $faqs as $faq ) {
		$content .= '<details><summary>' . esc_html( $faq[0] ) . '</summary><p>' . esc_html( $faq[1] ) . '</p></details>';
	}
	$content .= '</div></section>';
	if ( 'post-operative-rehabilitation' === $service_page['slug'] ) {
		$content = '<section class="section-block"><div class="pricing-feature"><p class="eyebrow">Post-operative orthopaedic package</p><h2>Six home physiotherapy sessions</h2><p>For knee, hip, ankle or shoulder joint replacement, spinal surgery, or other joint surgery.</p><p class="package-price">£730</p><a class="button" href="/contact/#triage-form">Ask about the package <span aria-hidden="true">→</span></a></div><div class="service-faq"><h2>Common questions</h2>';
		foreach ( $faqs as $faq ) {
			$content .= '<details><summary>' . esc_html( $faq[0] ) . '</summary><p>' . esc_html( $faq[1] ) . '</p></details>';
		}
		$content .= '</div></section>';
	}
	$pages[] = array( 'slug' => $service_page['slug'], 'title' => $service_page['title'], 'excerpt' => $service_page['excerpt'], 'content' => $content );
}

// The supplied FAQ dataset mentioned in the update note was not in the Documents folder.
// These 25 questions are rebuilt from the reference FAQ topics and confirmed HomeCarePhysioUK details.
$faq_items = array(
	array( 'How do I request the free triage call?', 'Send your name, email and phone number through the Contact page, or call +91 97666 27404.' ),
	array( 'What is the triage call?', 'It is a free 15-minute call with a physiotherapist to discuss what support you are looking for.' ),
	array( 'Do I have to book after the triage call?', 'No. After the call, you can decide whether you would like to book an appointment.' ),
	array( 'How can I contact HomeCarePhysioUK?', 'Call +91 97666 27404 or email manojprasad1984@gmail.com.' ),
	array( 'How long is the first treatment appointment?', 'The free triage call lasts 15 minutes. The length of a treatment appointment is still being confirmed.' ),
	array( 'What happens at the initial assessment?', 'A physiotherapist will discuss your needs and assess your movement. The treatment plan depends on the individual assessment.' ),
	array( 'How many treatment sessions will I need?', 'This depends on your needs and goals. A physiotherapist can discuss a suitable plan after assessment.' ),
	array( 'How much is the post-operative package?', 'The six-session home physiotherapy package is £730.' ),
	array( 'How many visits are included in the surgery package?', 'The package includes six home physiotherapy sessions.' ),
	array( 'Which surgeries are included in the package?', 'It is for recovery after knee, hip, ankle or shoulder joint replacement, spinal surgery, or other joint surgery.' ),
	array( 'Does the package include travel costs?', 'Travel arrangements have not been confirmed. Please ask the team before booking.' ),
	array( 'Can I use the package after another type of surgery?', 'Please describe the surgery during the triage call so a physiotherapist can discuss suitability.' ),
	array( 'Is the triage call a treatment appointment?', 'No. It is a short introductory call; a treatment appointment is booked separately.' ),
	array( 'What if I am not satisfied after the first assessment?', 'If you or your family are not satisfied after the initial assessment, we will offer a different physiotherapist.' ),
	array( 'Where can appointments take place?', 'The service is home-based. Ask the team to confirm whether another setting can be arranged for your enquiry.' ),
	array( 'Which areas do you cover?', 'Coverage is being confirmed. Contact us with your postcode and the team can check availability.' ),
	array( 'Which ages and needs can you support?', 'The right service depends on the person, clinical scope and availability. Ask the team to confirm suitability.' ),
	array( 'Do I need a referral?', 'Referral arrangements have not been confirmed. Please contact us before booking.' ),
	array( 'What should I wear to an appointment?', 'The appointment team can advise once the service and treatment area are discussed.' ),
	array( 'Which payment methods do you accept?', 'Payment methods and timing are still being confirmed. Please ask before booking.' ),
	array( 'Can I claim the cost through private medical insurance?', 'Insurance arrangements have not been confirmed. Check with the team and your insurer before booking.' ),
	array( 'What is the cancellation policy?', 'The cancellation policy is being confirmed. Please ask the team before booking.' ),
	array( 'What information should I provide when requesting a call?', 'Provide your contact details and postcode. Please do not include medical or other sensitive details in the website form.' ),
	array( 'Can a family member be involved?', 'Family members may contact the team about the first-visit satisfaction guarantee. Ask the team how best to support the patient during an enquiry.' ),
	array( 'How will my personal information be handled?', 'The privacy notice is being finalized. The website form asks only for contact details and postcode; do not send health details through it.' ),
);

$faq_content = '<section class="section-block faq-page"><div class="notice"><span aria-hidden="true">i</span><p>These answers use the supplied business details and public reference topics. Policies shown as being confirmed should be checked with the team before relying on them.</p></div><label class="faq-search-label">Search questions<input type="search" data-faq-search placeholder="Type a question or topic" aria-label="Search frequently asked questions"></label><p class="faq-result-count" data-faq-count role="status">25 questions</p><div class="faq-list" data-faq-list>';
foreach ( $faq_items as $faq ) {
	$faq_content .= '<details><summary>' . esc_html( $faq[0] ) . '</summary><p>' . esc_html( $faq[1] ) . '</p></details>';
}
$faq_content .= '</div></section>';
foreach ( $pages as &$page_data ) {
	if ( 'faqs' === $page_data['slug'] ) {
		$page_data['content'] = $faq_content;
	}
}
unset( $page_data );

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
