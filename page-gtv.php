<?php
/**
 * Template Name: GTV Page
 *
 * @package MDI_Consults
 */

get_header();

$gtv_tiers = mdi_consults_query_items( 'mdi_gtv' );

$gtv_fallback = array(
	array(
		'title'      => 'From Home to Here',
		'tier_label' => 'Tier 1',
		'price'      => '£250',
		'price_ngn'  => '₦550,000',
		'content'    => 'For clients who want to know whether their current profile appears suitable for a global talent pathway.',
		'features'   => array(
			'Initial profile review',
			'Route suitability check',
			'Strength and weakness overview',
			'Readiness feedback',
			'Recommended next steps',
		),
		'featured'   => false,
	),
	array(
		'title'      => 'Abule to Abroad',
		'tier_label' => 'Tier 2',
		'price'      => '£650',
		'price_ngn'  => '₦1,430,000',
		'content'    => 'For clients who already have documents and achievements but need help understanding whether their evidence is strong enough.',
		'features'   => array(
			'Evidence review',
			'Evidence categorisation',
			'Gap identification',
			'Route alignment check',
			'Improvement recommendations',
		),
		'featured'   => true,
	),
	array(
		'title'      => 'Diaspora Connected',
		'tier_label' => 'Tier 3',
		'price'      => '£3,500',
		'price_ngn'  => '₦7,700,000',
		'content'    => 'For clients who need to strengthen how they present themselves professionally.',
		'features'   => array(
			'Personal brand review',
			'Bio and profile direction',
			'CV positioning guidance',
			'Portfolio structure guidance',
			'Public profile improvement recommendations',
		),
		'featured'   => false,
	),
	array(
		'title'      => 'Heritage to Horizon',
		'tier_label' => 'Tier 4',
		'price'      => '£5,500',
		'price_ngn'  => '₦12,100,000',
		'content'    => 'For clients who need end-to-end strategic support from profile review to evidence organisation and readiness preparation.',
		'features'   => array(
			'Eligibility review',
			'Route strategy',
			'Evidence audit',
			'Gap analysis',
			'Profile positioning',
			'Portfolio structure',
			'Recommendation letter guidance',
			'Documentation strategy',
			'Narrative development',
			'Readiness review',
		),
		'featured'   => false,
	),
	array(
		'title'      => 'Creative Upgrade Package',
		'tier_label' => 'Add-on',
		'price'      => '£1,500',
		'price_ngn'  => '₦3,300,000',
		'content'    => 'For clients who need deeper support organising documents, story, and evidence for creative and digital profiles.',
		'features'   => array(
			'Document planning',
			'Evidence mapping',
			'Case narrative direction',
			'Recommendation letter guidance',
			'Portfolio and profile alignment',
			'Application-readiness support',
		),
		'featured'   => false,
	),
);

$who_for = array(
	'Artists',
	'Musicians',
	'Filmmakers',
	'Writers',
	'Designers',
	'Creative directors',
	'Cultural workers',
	'Media professionals',
	'Digital professionals',
	'Tech professionals',
	'Founders',
	'Entrepreneurs',
	'Product builders',
	'Academics',
	'Researchers',
	'Innovators',
	'Industry experts',
	'Professionals with notable achievements',
	'Emerging talents building towards eligibility',
);

$routes = array(
	array(
		'title' => 'Arts & Culture',
		'text'  => 'For creatives, artists, cultural professionals, performers, producers, writers, designers, filmmakers, and other creative talents building recognised work and industry impact. We help clients review creative achievements, media recognition, performances, exhibitions, releases, awards, collaborations, portfolio materials, and recommendation readiness.',
	),
	array(
		'title' => 'Tech',
		'text'  => 'For digital and technology professionals, founders, product builders, software professionals, digital innovators, startup leaders, and tech ecosystem contributors. We help clients assess their innovation, leadership, product impact, technical contribution, startup work, recognition, community contribution, and supporting evidence.',
	),
	array(
		'title' => 'Academia and Research',
		'text'  => 'For academics, researchers, scholars, and knowledge-based professionals with recognised research, publications, academic contribution, innovation, or institutional impact. We help clients organise academic achievements, research contributions, publications, references, awards, and professional recognition.',
	),
);

$help_items = array(
	array( 'Eligibility Assessment', 'We review your current profile to understand whether you appear ready, nearly ready, or still need to build stronger evidence before moving forward.' ),
	array( 'Profile Review', 'We assess your professional background, achievements, recognition, career journey, and public visibility.' ),
	array( 'Evidence Audit', 'We help you identify what evidence you currently have and whether it supports the route you are considering.' ),
	array( 'Evidence Mapping', 'We organise your achievements and documents according to the relevant themes, criteria, and strength of proof.' ),
	array( 'Gap Identification', 'We help you understand what is missing, weak, unclear, or underdeveloped in your current profile.' ),
	array( 'Personal Brand Positioning', 'We help you clarify your professional identity, key achievements, impact, and public-facing narrative.' ),
	array( 'CV and Profile Optimisation', 'We support the structure and presentation of your CV, bio, portfolio, LinkedIn, website, or public profile where relevant.' ),
	array( 'Portfolio Structuring', 'We help creatives, professionals, and experts present their work in a clearer, stronger, and more credible way.' ),
	array( 'Recommendation Letter Guidance', 'We advise on the type of referees, endorsement support, and recommendation content direction that may strengthen your profile.' ),
	array( 'Documentation Strategy', 'We help you organise documents, evidence, profile materials, and supporting information into a clearer structure.' ),
	array( 'Case Narrative Development', 'We help you tell a stronger story around your achievements, influence, leadership, recognition, and future potential.' ),
	array( 'Application-Readiness Support', 'We help you prepare more confidently before moving forward with your global talent pathway.' ),
);

$process_steps = array(
	array( 'Initial Consultation', 'We begin with a conversation to understand your background, route of interest, achievements, goals, and current level of readiness.' ),
	array( 'Profile and Eligibility Review', 'We review your career history, achievements, public recognition, evidence, and professional positioning.' ),
	array( 'Evidence Audit', 'We examine the documents and proof you currently have, then identify what is strong, what is weak, and what may need improvement.' ),
	array( 'Route and Strategy Mapping', 'We help you understand which route appears most suitable and how your evidence can be organised strategically.' ),
	array( 'Gap Analysis', 'We identify missing areas and advise on what needs to be strengthened before submission or further preparation.' ),
	array( 'Documentation and Narrative Support', 'We support the structure of your documents, profile materials, portfolio, recommendation direction, and case narrative.' ),
	array( 'Readiness Review', 'Before you proceed, we help you review the overall strength, clarity, and organisation of your profile.' ),
);

$checklist = array(
	'Updated CV',
	'Professional bio',
	'Portfolio or website link',
	'LinkedIn profile',
	'Media features',
	'Awards or nominations',
	'Project links',
	'Evidence of leadership or impact',
	'Recommendation contacts',
	'Publications or research work',
	'Press coverage',
	'Proof of performances, exhibitions, products, or professional contribution',
	'Any previous application or draft documents, where available',
);

$gtv_faq = array(
	'Do you guarantee Global Talent Visa approval?' => 'No. We do not guarantee approval or endorsement. Our role is to provide strategic advisory, profile positioning, documentation support, evidence organisation, and application-readiness guidance.',
	'Can you help me know if I am eligible?' => 'Yes. We can review your profile and provide feedback on whether you appear ready, nearly ready, or still need to build stronger evidence.',
	'Do you only work with creatives?' => 'No. We support clients across Arts & Culture, Tech, and Academia.',
	'Can you help if I am not ready yet?' => 'Yes. We can help you create a preparation roadmap to strengthen your profile over time.',
	'Do you write recommendation letters?' => 'We provide recommendation letter guidance, structure, and direction. The actual recommendation must come from credible referees who know your work and can speak honestly about your achievements.',
	'Can you help with my portfolio?' => 'Yes. We can advise on portfolio structure, website presentation, CV positioning, professional bio, and public profile improvement.',
	'Is this legal immigration advice?' => 'No. MDI Consults provides advisory and documentation-readiness support. We do not replace regulated immigration or legal advice.',
);

$packages = array();

if ( $gtv_tiers ) {
	foreach ( $gtv_tiers as $tier ) {
		$packages[] = array(
			'title'      => get_the_title( $tier ),
			'tier_label' => get_post_meta( $tier->ID, 'mdi_tier_label', true ),
			'price'      => get_post_meta( $tier->ID, 'mdi_price', true ),
			'price_ngn'  => get_post_meta( $tier->ID, 'mdi_price_ngn', true ),
			'content'    => wp_strip_all_tags( $tier->post_content ),
			'features'   => array_filter( array_map( 'trim', explode( "\n", get_post_meta( $tier->ID, 'mdi_features', true ) ) ) ),
			'featured'   => (bool) get_post_meta( $tier->ID, 'mdi_featured', true ),
		);
	}
} else {
	$packages = $gtv_fallback;
}
?>
<main>
	<section class="page-hero">
		<div class="container reveal">
			<?php mdi_consults_section_meta( '05', 'GTV' ); ?>
			<h1><?php the_title(); ?></h1>
			<p class="hero-lead" style="margin-top:16px;">Global Talent Pathway Advisory for Exceptional and Emerging Talents</p>
			<p style="margin-top:12px;color:var(--ink-soft);max-width:70ch;">MDI Consults GTV is a specialised advisory service helping creatives, digital professionals, founders, academics, researchers, and industry talents prepare for global talent opportunities with clarity, structure, and strategic positioning.</p>
			<p style="margin-top:12px;color:var(--ink-soft);max-width:70ch;">We support clients across Arts & Culture, Tech, and Academia by helping them assess eligibility, organise evidence, strengthen their professional profile, and build a stronger case narrative for global talent pathways.</p>
			<div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:24px;">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-gold">Check Your Eligibility</a>
				<a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>" class="btn btn-outline">Book a GTV Consultation</a>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container about-split reveal">
			<div>
				<p class="meta"><span>Intro</span></p>
				<h2>Global Recognition Requires More Than Achievements</h2>
				<p>Many talented people have strong achievements, but they struggle to present those achievements in a structured, credible, and globally recognisable way.</p>
				<p>A strong global talent profile is not just about what you have done. It is about how your work, impact, recognition, evidence, leadership, and future potential are documented and positioned.</p>
			</div>
			<div>
				<p>MDI Consults GTV helps clients move from scattered achievements to a clearer, stronger, and better-structured professional profile.</p>
				<p>We help you understand where you currently stand, what evidence you already have, what gaps need to be addressed, and how to position your journey more strategically.</p>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container reveal">
			<p class="meta"><span>About GTV</span></p>
			<h2 style="color:#fff;">What Is MDI Consults GTV?</h2>
			<h3 style="font-size:1.15rem;margin:16px 0 12px;color:var(--gold);">A Structured Advisory Service for Global Talent Readiness</h3>
			<div class="about-split">
				<p style="color:#ccc;">MDI Consults GTV is designed for individuals who want to understand, prepare, and strengthen their profile for global talent opportunities.</p>
				<p style="color:#ccc;">Our role is to help you build clarity around your eligibility, achievements, evidence, personal brand, professional story, and documentation strategy.</p>
			</div>
			<p style="color:#aaa;margin-top:16px;">We do not simply look at your documents. We help you understand the bigger picture behind your profile and how your work can be better presented.</p>
			<p style="color:#aaa;margin-top:12px;">Our service is especially useful for talents who have achievements but need help organising them, explaining their impact, identifying evidence gaps, and preparing a stronger professional narrative.</p>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Audience</span></p>
					<h2>Who This Service Is For</h2>
					<p class="section-lead">Built for Talents with Impact, Potential and Ambition</p>
				</div>
			</div>
			<p class="reveal" style="color:var(--ink-soft);margin-bottom:20px;">MDI Consults GTV supports exceptional and emerging talents across different sectors and career stages. This service is suitable for:</p>
			<ul class="check-list reveal">
				<?php foreach ( $who_for as $item ) : ?>
				<li><?php echo esc_html( $item ); ?></li>
				<?php endforeach; ?>
			</ul>
			<p class="reveal" style="margin-top:20px;color:var(--ink-soft);">Whether you are already highly accomplished or still building your profile, MDI Consults GTV helps you understand the right pathway and the level of preparation required.</p>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Routes</span></p>
					<h2 style="color:#fff;">Routes We Support</h2>
				</div>
			</div>
			<div class="why-grid">
				<?php foreach ( $routes as $i => $route ) : ?>
				<article class="why-card reveal">
					<span class="num"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span>
					<h3><?php echo esc_html( $route['title'] ); ?></h3>
					<p><?php echo esc_html( $route['text'] ); ?></p>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Support</span></p>
					<h2>What We Help With</h2>
					<p class="section-lead">From Eligibility to Evidence Strategy</p>
				</div>
			</div>
			<p class="reveal" style="color:var(--ink-soft);margin-bottom:24px;">MDI Consults GTV provides practical and strategic support across the preparation process.</p>
			<div class="why-grid">
				<?php foreach ( $help_items as $i => $item ) : ?>
				<article class="why-card reveal">
					<span class="num"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span>
					<h3><?php echo esc_html( $item[0] ); ?></h3>
					<p><?php echo esc_html( $item[1] ); ?></p>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Process</span></p>
					<h2 style="color:#fff;">Our GTV Process</h2>
					<p class="section-lead" style="color:#aaa;">A Clear Step-by-Step Advisory Approach</p>
				</div>
			</div>
			<div class="process-grid">
				<?php foreach ( $process_steps as $i => $step ) : ?>
				<article class="process-step reveal">
					<span class="num"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span>
					<h3><?php echo esc_html( $step[0] ); ?></h3>
					<p><?php echo esc_html( $step[1] ); ?></p>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section" id="gtv-packages">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Packages</span></p>
					<h2>Service Packages</h2>
					<p class="section-lead">Choose the Level of Support You Need</p>
				</div>
			</div>
			<div class="pricing-grid" style="margin-top:32px;">
				<?php foreach ( $packages as $pkg ) : ?>
				<div class="price-card<?php echo ! empty( $pkg['featured'] ) ? ' featured' : ''; ?> reveal">
					<?php if ( ! empty( $pkg['tier_label'] ) ) : ?>
					<p class="meta"><?php echo esc_html( $pkg['tier_label'] ); ?></p>
					<?php endif; ?>
					<h3><?php echo esc_html( $pkg['title'] ); ?></h3>
					<?php if ( ! empty( $pkg['content'] ) ) : ?>
					<p><?php echo esc_html( $pkg['content'] ); ?></p>
					<?php endif; ?>
					<?php if ( ! empty( $pkg['price'] ) ) : ?>
					<div class="amount">
						<?php echo esc_html( $pkg['price'] ); ?>
						<?php if ( ! empty( $pkg['price_ngn'] ) ) : ?>
						<span class="amount-ngn">| <?php echo esc_html( $pkg['price_ngn'] ); ?></span>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<?php if ( ! empty( $pkg['features'] ) ) : ?>
					<ul>
						<?php foreach ( $pkg['features'] as $feature ) : ?>
						<li><?php echo esc_html( $feature ); ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
					<a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>" class="btn<?php echo ! empty( $pkg['featured'] ) ? ' btn-gold' : ' btn-outline'; ?>">Book GTV Consultation</a>
				</div>
				<?php endforeach; ?>
			</div>
			<p class="meta reveal" style="margin-top:20px;">Advisory only — MDI Consults does not guarantee visa approval. <a href="<?php echo esc_url( home_url( '/gtv-disclaimer/' ) ); ?>">Read full GTV disclaimer</a></p>
		</div>
	</section>

	<section class="section">
		<div class="container about-split reveal">
			<div>
				<p class="meta"><span>Preparation</span></p>
				<h2>What You Need Before Starting</h2>
				<h3 style="font-size:1.1rem;margin:16px 0 12px;">Helpful Materials to Prepare</h3>
				<p>To get the best from your GTV consultation, you may prepare:</p>
			</div>
			<ul class="check-list">
				<?php foreach ( $checklist as $item ) : ?>
				<li><?php echo esc_html( $item ); ?></li>
				<?php endforeach; ?>
			</ul>
			<p style="margin-top:20px;color:var(--ink-soft);grid-column:1/-1;">Do not worry if you do not have everything. Part of our work is to help you identify what is missing and what needs to be built.</p>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container reveal">
			<p class="meta"><span>Disclaimer</span></p>
			<h2 style="color:#fff;">Important Disclaimer</h2>
			<h3 style="font-size:1.1rem;margin:16px 0 12px;color:var(--gold);">Advisory Support, Not a Visa Guarantee</h3>
			<p style="color:#aaa;">MDI Consults provides strategic advisory, profile positioning, evidence organisation, documentation support, and application-readiness guidance.</p>
			<p style="color:#aaa;margin-top:12px;">We do not guarantee visa approval, endorsement, or application success.</p>
			<p style="color:#aaa;margin-top:12px;">We do not replace regulated immigration or legal advice where such advice is required. Where clients require legal immigration advice, they should consult a qualified and regulated immigration adviser or legal professional.</p>
			<p style="color:#aaa;margin-top:12px;">Our role is to help you prepare, structure, position, and strengthen your profile as clearly and strategically as possible.</p>
			<a href="<?php echo esc_url( home_url( '/gtv-disclaimer/' ) ); ?>" class="btn btn-outline" style="margin-top:24px;">Read GTV Disclaimer</a>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>FAQ</span></p>
					<h2>Frequently Asked Questions</h2>
				</div>
			</div>
			<div class="faq-list">
				<?php foreach ( $gtv_faq as $question => $answer ) : ?>
				<details class="faq-item reveal">
					<summary><?php echo esc_html( $question ); ?> <span>+</span></summary>
					<p><?php echo esc_html( $answer ); ?></p>
				</details>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container reveal" style="text-align:center;">
			<h2 style="color:#fff;">Ready to Understand Your Global Talent Readiness?</h2>
			<p style="color:#aaa;max-width:60ch;margin:16px auto 28px;">Whether you are ready to proceed or still building your profile, MDI Consults GTV can help you gain clarity, structure your evidence, and position your achievements more strategically.</p>
			<div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-gold">Check Your Eligibility</a>
				<a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>" class="btn btn-outline">Book a GTV Consultation</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
