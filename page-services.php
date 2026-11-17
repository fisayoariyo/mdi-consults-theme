<?php
/**
 * Template Name: Services Page
 *
 * @package MDI_Consults
 */

get_header();

$services = array(
	array(
		'title'       => 'Brand & Business Strategy',
		'subtitle'    => 'Build with Clarity, Direction and Confidence',
		'description' => array(
			'A strong brand needs more than a logo. It needs a clear identity, a defined audience, strong positioning, and a strategy that explains why it matters.',
			'We help businesses, founders, creatives, and organisations define their direction and build brands that are credible, memorable, and ready for growth.',
		),
		'includes'    => array(
			'Brand strategy',
			'Brand identity development',
			'Brand positioning',
			'Brand messaging',
			'Business strategy',
			'Strategic planning',
			'Business development support',
			'Market entry support',
			'Customer and audience profiling',
			'Offer development',
			'Business model review',
			'Pitch and proposal support',
		),
		'best_for'    => array(
			'New businesses',
			'Startups',
			'SMEs',
			'Founders',
			'Personal brands',
			'Agencies',
			'Organisations repositioning their brand',
			'Businesses preparing for growth, funding, or expansion',
		),
		'cta'         => 'Build My Brand Strategy',
		'cta_url'     => '/contact/',
	),
	array(
		'title'       => 'Website Development & UI/UX Design',
		'subtitle'    => 'Modern Websites That Communicate Clearly and Convert',
		'description' => array(
			'Your website should do more than exist. It should explain your brand, showcase your services, build trust, and make it easy for people to contact you.',
			'We design and develop responsive, modern, and user-friendly websites that are aligned with your brand goals and built for the way users interact online today.',
		),
		'includes'    => array(
			'Website design',
			'Website development',
			'Website redesign',
			'Landing page design',
			'UI/UX design',
			'Website content structure',
			'Website copy guidance',
			'Contact and enquiry form setup',
			'Basic SEO setup',
			'Website maintenance support',
			'Digital audits',
			'Website improvement recommendations',
		),
		'best_for'    => array(
			'Businesses without a website',
			'Brands with outdated websites',
			'Consultants and professionals',
			'SMEs',
			'Creative businesses',
			'Nonprofits',
			'Campaign launches',
			'Product or service launches',
		),
		'cta'         => 'Start My Website Project',
		'cta_url'     => '/contact/',
	),
	array(
		'title'       => 'Social Media Management & Digital Marketing',
		'subtitle'    => 'Build Visibility Where Your Audience Already Is',
		'description' => array(
			'Social media is one of the most important ways modern brands communicate, build trust, and stay visible.',
			'We help clients create a clear and consistent digital presence through content planning, campaign strategy, brand storytelling, audience engagement, and digital marketing support.',
		),
		'includes'    => array(
			'Social media strategy',
			'Content planning',
			'Content calendar development',
			'Caption writing',
			'Campaign planning',
			'Community engagement guidance',
			'Social media audits',
			'Digital marketing strategy',
			'Paid campaign advisory',
			'Brand storytelling',
			'Creative direction for posts and campaigns',
			'Digital visibility planning',
		),
		'best_for'    => array(
			'Brands looking to grow online',
			'SMEs',
			'Creatives',
			'Founders',
			'Personal brands',
			'Lifestyle businesses',
			'Entertainment brands',
			'Education and service-based businesses',
		),
		'cta'         => 'Improve My Online Presence',
		'cta_url'     => '/contact/',
	),
	array(
		'title'       => 'PR & Online Reputation Management',
		'subtitle'    => 'Build Credibility, Visibility and Trust',
		'description' => array(
			'How people perceive your brand matters. MDI Consults supports clients with public positioning, reputation building, strategic communication, and visibility planning.',
			'We help brands and individuals present themselves professionally, communicate with confidence, and build credibility across digital and public platforms.',
		),
		'includes'    => array(
			'PR strategy',
			'Online reputation management',
			'Media positioning',
			'Press release support',
			'Brand communication',
			'Public profile development',
			'Thought leadership positioning',
			'Crisis communication guidance',
			'Visibility strategy',
			'Stakeholder communication',
			'Announcement and launch communication',
		),
		'best_for'    => array(
			'Founders',
			'Public-facing professionals',
			'Creatives and artists',
			'SMEs',
			'Personal brands',
			'Organisations needing stronger credibility',
			'Brands preparing for public campaigns, launches, or announcements',
		),
		'cta'         => 'Strengthen My Public Image',
		'cta_url'     => '/contact/',
	),
	array(
		'title'       => 'Content Marketing & SEO',
		'subtitle'    => 'Create Content That Builds Authority and Helps People Find You',
		'description' => array(
			'Content is one of the strongest tools for building trust, educating your audience, and improving your digital visibility.',
			'We help clients plan, structure, and optimise content that supports long-term brand growth.',
		),
		'includes'    => array(
			'Content strategy',
			'Website content planning',
			'SEO content writing',
			'Blog strategy',
			'Keyword research support',
			'Search engine optimisation setup',
			'Brand storytelling',
			'Email content planning',
			'Campaign messaging',
			'Content audits',
			'Thought leadership content',
			'Copywriting support',
		),
		'best_for'    => array(
			'Brands that want to rank better online',
			'SMEs',
			'Consultants',
			'Founders',
			'Service-based businesses',
			'Digital platforms',
			'Organisations with weak or inconsistent content',
		),
		'cta'         => 'Build My Content Strategy',
		'cta_url'     => '/contact/',
	),
	array(
		'title'       => 'Research, Data Analytics & Strategy Optimisation',
		'subtitle'    => 'Make Better Decisions with Better Insight',
		'description' => array(
			'Growth becomes easier when decisions are based on insight, not guesswork.',
			'We help clients review performance, understand audience behaviour, track results, conduct research, and optimise strategies for better outcomes.',
		),
		'includes'    => array(
			'Market research',
			'Brand audits',
			'Customer insight review',
			'Brand performance review',
			'Campaign reporting',
			'Website performance analysis',
			'Social media reporting',
			'Data interpretation',
			'Strategy optimisation',
			'Business review reports',
			'Growth recommendations',
		),
		'best_for'    => array(
			'Businesses running campaigns',
			'Brands with existing digital platforms',
			'Organisations that need better reporting',
			'SMEs preparing for growth',
			'Founders who want clearer performance insight',
			'Agencies seeking research-backed support',
		),
		'cta'         => 'Review My Strategy',
		'cta_url'     => '/contact/',
	),
	array(
		'title'       => 'Strategic Planning & Business Development',
		'subtitle'    => 'Turn Ambition into a Practical Growth Plan',
		'description' => array(
			'MDI Consults helps businesses and organisations create clearer structures for growth, expansion, partnerships, and long-term development.',
			'We support clients with planning, opportunity mapping, business positioning, and practical growth strategy.',
		),
		'includes'    => array(
			'Business development strategy',
			'Partnership strategy',
			'Growth planning',
			'Offer structuring',
			'Market positioning',
			'Pitch deck support',
			'Proposal development',
			'Operational planning',
			'Expansion strategy',
			'Strategic advisory',
			'Stakeholder communication support',
		),
		'best_for'    => array(
			'Startups',
			'SMEs',
			'Founders',
			'Digital businesses',
			'Organisations seeking partnerships',
			'Businesses preparing to scale',
			'Agencies needing strategic support',
		),
		'cta'         => 'Plan My Growth',
		'cta_url'     => '/contact/',
	),
	array(
		'title'       => 'MDI Consults GTV',
		'subtitle'    => 'Global Talent Pathway Advisory for Exceptional and Emerging Talents',
		'description' => array(
			'MDI Consults GTV is our specialised advisory service for creatives, digital professionals, founders, academics, researchers, and exceptional talents seeking stronger global positioning.',
			'We support clients across Arts & Culture, Tech, and Academia with strategic guidance that helps them understand their eligibility, identify evidence gaps, strengthen their profile, and prepare more confidently for global talent pathways.',
			'This service is not just about application support. It is about building the case from the ground up.',
		),
		'includes'    => array(
			'Eligibility assessment',
			'Profile review',
			'Evidence audit',
			'Evidence mapping',
			'Personal brand positioning',
			'CV optimisation',
			'Portfolio structure',
			'Recommendation letter guidance',
			'Documentation strategy',
			'Case narrative development',
			'Application-readiness support',
			'Global talent pathway advisory',
		),
		'best_for'    => array(
			'Artists',
			'Creatives',
			'Founders',
			'Digital professionals',
			'Tech professionals',
			'Media professionals',
			'Cultural workers',
			'Academics',
			'Researchers',
			'Industry professionals with notable achievements',
			'Emerging talents who need a clear preparation pathway',
		),
		'routes'      => array( 'Arts & Culture', 'Tech', 'Academia and Research' ),
		'disclaimer'  => 'MDI Consults provides strategic advisory, profile positioning, documentation support, evidence organisation, and application-readiness guidance. We do not guarantee visa approval and we do not replace regulated immigration or legal advice where such advice is required.',
		'cta'         => 'Explore MDI Consults GTV',
		'cta_url'     => '/gtv/',
	),
);

$overview_help = array(
	'Clarify brand and business direction',
	'Build modern websites and digital platforms',
	'Improve online visibility and audience engagement',
	'Strengthen identity, messaging, and positioning',
	'Develop strategic growth and business development plans',
	'Improve public image, credibility, and reputation',
	'Create content that builds trust and search visibility',
	'Use research and data to make better decisions',
	'Prepare stronger professional profiles for global talent opportunities',
);

$core_areas = array(
	'Brand & Business Strategy',
	'Digital Solutions',
	'Marketing, PR & Visibility',
	'Research, Data & Optimisation',
	'MDI Consults GTV',
);
?>
<main>
	<section class="page-hero">
		<div class="container reveal">
			<?php mdi_consults_section_meta( '03', 'Services' ); ?>
			<h1><?php the_title(); ?></h1>
			<p class="hero-lead" style="margin-top:16px;">Strategic Digital, Brand and Global Talent Solutions</p>
			<p style="margin-top:12px;color:var(--ink-soft);max-width:70ch;">MDI Consults provides tailored consulting services for brands, founders, creatives, SMEs, professionals, agencies, and organisations seeking clarity, visibility, structure, and growth.</p>
			<p style="margin-top:12px;color:var(--ink-soft);max-width:70ch;">For over 5 years, we have helped clients define ideas, solve complex challenges, build digital solutions, strengthen their brands, and position themselves for wider opportunities.</p>
			<a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>" class="btn btn-gold" style="margin-top:20px;">Request a Consultation</a>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Overview</span></p>
					<h2>What We Help You Achieve</h2>
				</div>
			</div>
			<div class="about-split reveal">
				<p>Our services are designed to help you move from uncertainty to clarity, from ideas to execution, and from local visibility to global relevance.</p>
				<p>We help clients:</p>
			</div>
			<ul class="check-list reveal" style="margin-top:16px;">
				<?php foreach ( $overview_help as $item ) : ?>
				<li><?php echo esc_html( $item ); ?></li>
				<?php endforeach; ?>
			</ul>
			<p class="reveal" style="margin-top:24px;color:var(--ink-soft);">Our services are grouped into five core areas:</p>
			<ul class="check-list reveal" style="margin-top:12px;">
				<?php foreach ( $core_areas as $area ) : ?>
				<li><?php echo esc_html( $area ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container">
			<div class="services-grid">
				<?php foreach ( $services as $i => $service ) : ?>
				<article class="service-card reveal" id="service-<?php echo esc_attr( $i + 1 ); ?>">
					<div class="num"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></div>
					<h3><?php echo esc_html( $service['title'] ); ?></h3>
					<p class="sub"><?php echo esc_html( $service['subtitle'] ); ?></p>
					<?php foreach ( $service['description'] as $para ) : ?>
					<p><?php echo esc_html( $para ); ?></p>
					<?php endforeach; ?>
					<h4 style="font-size:0.85rem;text-transform:uppercase;letter-spacing:0.06em;margin:20px 0 10px;color:var(--gold);">Services Include</h4>
					<ul style="margin:0 0 16px;padding-left:18px;">
						<?php foreach ( $service['includes'] as $item ) : ?>
						<li><?php echo esc_html( $item ); ?></li>
						<?php endforeach; ?>
					</ul>
					<?php if ( ! empty( $service['routes'] ) ) : ?>
					<h4 style="font-size:0.85rem;text-transform:uppercase;letter-spacing:0.06em;margin:20px 0 10px;color:var(--gold);">Routes We Support</h4>
					<ul style="margin:0 0 16px;padding-left:18px;">
						<?php foreach ( $service['routes'] as $route ) : ?>
						<li><?php echo esc_html( $route ); ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
					<h4 style="font-size:0.85rem;text-transform:uppercase;letter-spacing:0.06em;margin:20px 0 10px;color:var(--gold);">Best For</h4>
					<ul style="margin:0 0 16px;padding-left:18px;">
						<?php foreach ( $service['best_for'] as $item ) : ?>
						<li><?php echo esc_html( $item ); ?></li>
						<?php endforeach; ?>
					</ul>
					<?php if ( ! empty( $service['disclaimer'] ) ) : ?>
					<p class="meta" style="margin-bottom:16px;"><?php echo esc_html( $service['disclaimer'] ); ?></p>
					<?php endif; ?>
					<a href="<?php echo esc_url( home_url( $service['cta_url'] ) ); ?>" class="btn btn-outline"><?php echo esc_html( $service['cta'] ); ?></a>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container reveal">
			<p class="meta"><span>Guidance</span></p>
			<h2>Not Sure Which Service You Need?</h2>
			<h3 style="font-size:1.15rem;margin:16px 0 12px;">Let’s Help You Find the Right Direction</h3>
			<div class="about-split">
				<p>You do not need to have everything figured out before reaching out.</p>
				<p>Many of our clients come to us with an idea, challenge, project, or opportunity, and we help them clarify the next step.</p>
			</div>
			<p style="margin-top:16px;color:var(--ink-soft);">Whether you need a website, brand strategy, marketing support, PR, business development, GTV advisory, or a full digital growth plan, we can help you identify the best solution.</p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-gold" style="margin-top:24px;">Make an Enquiry</a>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container reveal" style="text-align:center;">
			<h2 style="color:#fff;">Ready to Build with Clarity?</h2>
			<p style="color:#aaa;max-width:55ch;margin:16px auto 28px;">Let us help you define your idea, strengthen your brand, improve your digital presence, or position your talent for global opportunities.</p>
			<div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
				<a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>" class="btn btn-gold">Book a Consultation</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Contact MDI Consults</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
