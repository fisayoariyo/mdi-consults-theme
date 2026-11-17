<?php
/**
 * Front page — PAGE 1 HOME from approved brief.
 *
 * @package MDI_Consults
 */

get_header();

$hero_img  = mdi_consults_hero_image_url();
$about_img = mdi_consults_about_image_url();
$hero_tags = array_filter( array_map( 'trim', explode( "\n", mdi_mod( 'mdi_hero_tags', "Strategy\nBranding\nDigital" ) ) ) );
$projects  = mdi_consults_query_items( 'mdi_project', 6, true );
if ( ! $projects ) {
	$projects = mdi_consults_query_items( 'mdi_project', 6 );
}
$services = mdi_consults_query_items( 'mdi_service', 4, true );
if ( ! $services ) {
	$services = mdi_consults_query_items( 'mdi_service', 4 );
}
$gtv_pkgs = mdi_consults_query_items( 'mdi_gtv', 3, true );
if ( ! $gtv_pkgs ) {
	$gtv_pkgs = mdi_consults_query_items( 'mdi_gtv', 3 );
}
$faqs = mdi_consults_query_items( 'mdi_faq', 4 );

$who = array(
	'Founders and entrepreneurs',
	'Startups and SMEs',
	'Creatives and artists',
	'Personal brands',
	'Digital businesses',
	'Professionals seeking global opportunities',
	'Nonprofits and social impact organisations',
	'Organisations improving brand, digital presence, and strategy',
);

$why = array(
	array( '5+ Years of Experience', 'We bring years of hands-on consulting, brand, digital, and strategy experience into every project.' ),
	array( 'Research-Driven Approach', 'We do not guess. We listen, ask the right questions, study the market, and build solutions around real needs.' ),
	array( 'Tailored Solutions', 'Every client is different. We build strategies around your goals, audience, industry, and growth stage.' ),
	array( 'Global Perspective', 'We work with a cross-border mindset, helping brands and talents position themselves for opportunities beyond their immediate environment.' ),
	array( 'Digital-Age Execution', 'We understand the modern online world and help clients build solutions that are responsive, relevant, and practical.' ),
);

$process = array(
	array( 'Discover', 'We begin by understanding your story, goals, challenges, audience, market, and current position.' ),
	array( 'Clarify', 'We help you organise your ideas, define the right direction, and identify what needs to be done.' ),
	array( 'Strategise', 'We create a tailored plan that aligns with your brand, business, digital, or global talent goals.' ),
	array( 'Build', 'We develop the required brand assets, digital systems, content, documentation, or strategic materials.' ),
	array( 'Launch', 'We support execution, implementation, review, and public readiness.' ),
	array( 'Optimise', 'Where required, we track performance, review results, and refine the strategy for better outcomes.' ),
);

$testimonials = array(
	array( 'Olabisi Dele Michael', 'Working with MDI Consults brought clarity to our brand direction and digital presence. Their strategy-first approach made execution feel structured and achievable.' ),
	array( 'Abimbola Alaka', 'MDI Consults helped us move from scattered ideas to a clear plan. Professional, research-driven, and genuinely invested in the outcome.' ),
);
?>

<main id="primary">
	<div class="hero-pin-system" id="hero-pin-system">
		<section class="hero-stage" id="hero-stage" aria-label="Introduction">
			<div class="hero-stage__media" data-hero-src="<?php echo esc_url( $hero_img ); ?>">
				<canvas class="hero-ripple-canvas" id="hero-ripple-canvas" aria-hidden="true"></canvas>
				<div class="hero-stage__overlay"></div>
				<div class="hero-stage__grain" aria-hidden="true"></div>
			</div>

			<div class="hero-stage__body">
				<div class="hero-stage__intro-wrap">
					<div class="hero-stage__intro">
						<p class="hero-tagline hero-stagger"><?php echo esc_html( mdi_mod( 'mdi_hero_tagline' ) ); ?></p>
						<h1 class="hero-headline hero-stagger"><?php echo esc_html( mdi_mod( 'mdi_hero_headline' ) ); ?></h1>
						<p class="hero-intro hero-stagger"><?php echo esc_html( mdi_mod( 'mdi_hero_text' ) ); ?></p>
						<div class="hero-cta-row hero-stagger">
							<a href="<?php echo esc_url( mdi_consults_url( mdi_mod( 'mdi_hero_cta_url' ) ) ); ?>" class="hero-cta hero-cta--light">
								<span><?php echo esc_html( mdi_mod( 'mdi_hero_cta' ) ); ?></span>
								<span class="hero-cta__arrow" aria-hidden="true">↗</span>
							</a>
							<a href="<?php echo esc_url( mdi_consults_url( mdi_mod( 'mdi_hero_cta_2_url', '/services/' ) ) ); ?>" class="hero-cta hero-cta--ghost">
								<span><?php echo esc_html( mdi_mod( 'mdi_hero_cta_2', 'Explore Our Services' ) ); ?></span>
							</a>
						</div>
					</div>
				</div>

				<div class="hero-stage__anchors" aria-hidden="true">
					<span>+</span><span>+</span><span>+</span><span>+</span>
				</div>

				<div class="hero-stage__footer">
					<div class="hero-stage__services hero-stagger">
						<?php foreach ( $hero_tags as $tag ) : ?>
							<span><?php echo esc_html( $tag ); ?></span>
						<?php endforeach; ?>
					</div>
					<div class="hero-stage__wordmark hero-stagger" aria-hidden="true">
						<span class="hero-word"><?php echo esc_html( mdi_mod( 'mdi_hero_wordmark', 'MDIC' ) ); ?></span>
					</div>
					<div class="hero-stage__meta hero-stagger">
						<span>© <?php echo esc_html( gmdate( 'Y' ) ); ?></span>
						<span class="hero-ruler" aria-hidden="true"></span>
						<span>5+</span>
					</div>
				</div>
			</div>
		</section>
		<div class="hero-scroll-track" id="hero-scroll-track" aria-hidden="true"></div>
	</div>

	<section class="about-bridge climb-over" id="about-bridge">
		<div class="container about-bridge__grid">
			<div class="about-bridge__meta reveal"></div>
			<div class="about-visual-wrap">
				<figure class="about-visual reveal">
					<img src="<?php echo esc_url( $about_img ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="900" height="900" loading="lazy">
				</figure>
			</div>
			<div class="about-copy">
				<p class="scrub-label">Credibility</p>
				<h2 class="scrub-heading"><?php echo esc_html( '5+ Years of Strategy, Digital and Brand Consulting' ); ?></h2>
				<p class="scrub-text" data-scrub><?php echo esc_html( mdi_mod( 'mdi_about_pre' ) ); ?></p>
				<p class="scrub-text" data-scrub><?php echo esc_html( mdi_mod( 'mdi_about_post' ) ); ?></p>
			</div>
		</div>
		<div class="container results-band reveal">
			<p class="meta"><span>Results</span></p>
			<div class="results-band__grid">
				<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
				<div>
					<p class="results-label"><?php echo esc_html( mdi_mod( "mdi_stat_{$i}_label" ) ); ?></p>
					<p class="results-num"><span data-count="<?php echo esc_attr( mdi_mod( "mdi_stat_{$i}_number" ) ); ?>" data-suffix="<?php echo esc_attr( mdi_mod( "mdi_stat_{$i}_suffix" ) ); ?>">0</span></p>
				</div>
				<?php endfor; ?>
			</div>
			<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="hero-cta hero-cta--dark">Explore Services <span aria-hidden="true">↗</span></a>
		</div>
	</section>

	<section class="section" id="who-we-work-with">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Clients</span></p>
					<h2>Who we work with</h2>
					<p class="section-lead">Built for ambitious people and organisations across sectors, markets, and stages of growth.</p>
				</div>
			</div>
			<ul class="pill-grid reveal">
				<?php foreach ( $who as $item ) : ?>
				<li><?php echo esc_html( $item ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="section section-dark" id="why-choose">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Why MDI</span></p>
					<h2>Strategy first. Execution always.</h2>
					<p class="section-lead" style="color:#aaa;">We do not just create websites, campaigns, or brand assets. We help clients understand the bigger picture behind what they are building.</p>
				</div>
			</div>
			<div class="why-grid">
				<?php foreach ( $why as $i => $row ) : ?>
				<article class="why-card reveal">
					<span class="num"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span>
					<h3><?php echo esc_html( $row[0] ); ?></h3>
					<p><?php echo esc_html( $row[1] ); ?></p>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section" id="our-process">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Process</span></p>
					<h2>How we work</h2>
					<p class="section-lead">Discover → Clarify → Strategise → Build → Launch → Optimise</p>
				</div>
			</div>
			<div class="process-grid">
				<?php foreach ( $process as $i => $step ) : ?>
				<article class="process-step reveal">
					<span class="num"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span>
					<h3><?php echo esc_html( $step[0] ); ?></h3>
					<p><?php echo esc_html( $step[1] ); ?></p>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Portfolio</span></p>
					<h2><?php echo esc_html( mdi_mod( 'mdi_portfolio_title', 'Selected work across brand, digital & strategy.' ) ); ?></h2>
				</div>
				<a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="btn btn-outline">See all</a>
			</div>
			<div class="work-list">
				<?php
				foreach ( $projects as $i => $p ) :
					$sub  = get_post_meta( $p->ID, 'mdi_subtitle', true );
					$year = get_post_meta( $p->ID, 'mdi_year', true ) ?: gmdate( 'Y' );
					$img  = mdi_consults_project_image_url( $p );
					?>
				<a href="<?php echo esc_url( get_permalink( $p ) ?: home_url( '/work/' ) ); ?>" class="work-item reveal"<?php echo $img ? ' data-img="' . esc_url( $img ) . '"' : ''; ?> style="color:inherit;">
					<span class="num">(<?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?>)</span>
					<h3><?php echo esc_html( get_the_title( $p ) ); ?></h3>
					<span class="tag"><?php echo esc_html( $sub ); ?> © <?php echo esc_html( $year ); ?></span>
				</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Services</span></p>
					<h2><?php echo esc_html( mdi_mod( 'mdi_services_title', 'Strategic solutions for the modern digital age.' ) ); ?></h2>
				</div>
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline">Explore More</a>
			</div>
			<div class="services-grid">
				<?php foreach ( $services as $i => $s ) : ?>
				<article class="service-card reveal">
					<div class="num"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></div>
					<h3><?php echo esc_html( get_the_title( $s ) ); ?></h3>
					<p class="sub"><?php echo esc_html( get_post_meta( $s->ID, 'mdi_subtitle', true ) ); ?></p>
					<p><?php echo esc_html( wp_strip_all_tags( $s->post_content ) ); ?></p>
					<a class="text-link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Learn more ↗</a>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section" id="pricing">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>GTV</span></p>
					<h2><?php echo esc_html( mdi_mod( 'mdi_gtv_title', 'Global talent pathway advisory tiers.' ) ); ?></h2>
				</div>
				<a href="<?php echo esc_url( home_url( '/gtv/' ) ); ?>" class="btn btn-outline">View GTV</a>
			</div>
			<div class="pricing-grid">
				<?php
				foreach ( $gtv_pkgs as $pkg ) :
					$featured = get_post_meta( $pkg->ID, 'mdi_featured', true );
					$features = array_filter( array_map( 'trim', explode( "\n", get_post_meta( $pkg->ID, 'mdi_features', true ) ) ) );
					$price    = get_post_meta( $pkg->ID, 'mdi_price', true );
					$price_ng = get_post_meta( $pkg->ID, 'mdi_price_ngn', true );
					?>
				<div class="price-card<?php echo $featured ? ' featured' : ''; ?> reveal">
					<p class="meta"><?php echo esc_html( get_post_meta( $pkg->ID, 'mdi_tier_label', true ) ); ?></p>
					<h3><?php echo esc_html( get_the_title( $pkg ) ); ?></h3>
					<p><?php echo esc_html( wp_strip_all_tags( $pkg->post_content ) ); ?></p>
					<div class="amount"><?php echo esc_html( $price ); ?><?php echo $price_ng ? ' <span class="amount-ngn">| ' . esc_html( $price_ng ) . '</span>' : ''; ?></div>
					<?php if ( $features ) : ?>
					<ul>
						<?php foreach ( $features as $f ) : ?>
						<li><?php echo esc_html( $f ); ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
					<a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>" class="btn<?php echo $featured ? ' btn-gold' : ' btn-outline'; ?>">Book Consultation</a>
				</div>
				<?php endforeach; ?>
			</div>
			<p class="meta reveal" style="margin-top:20px;">Advisory only — MDI Consults does not guarantee visa approval. <a href="<?php echo esc_url( home_url( '/gtv-disclaimer/' ) ); ?>">Read disclaimer</a></p>
		</div>
	</section>

	<section class="section section-dark" id="testimonials">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Testimonials</span></p>
					<h2>Client voices</h2>
				</div>
			</div>
			<div class="testimonial-grid">
				<?php foreach ( $testimonials as $t ) : ?>
				<blockquote class="testimonial-card reveal">
					<p>“<?php echo esc_html( $t[1] ); ?>”</p>
					<footer>— <?php echo esc_html( $t[0] ); ?></footer>
				</blockquote>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section marquee-section" aria-hidden="true">
		<div class="marquee marquee--large">
			<div class="marquee__track">
				<?php
				$marquee = mdi_mod( 'mdi_marquee_text', 'We Are Strategic, Bold And Global' );
				for ( $i = 0; $i < 4; $i++ ) :
					?>
				<span><?php echo esc_html( $marquee ); ?></span>
				<?php endfor; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>FAQ</span></p>
					<h2><?php echo esc_html( mdi_mod( 'mdi_faq_title', 'Common questions.' ) ); ?></h2>
				</div>
				<a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="btn btn-outline">All FAQs</a>
			</div>
			<div class="faq-list">
				<?php foreach ( $faqs as $faq ) : ?>
				<details class="faq-item reveal">
					<summary><?php echo esc_html( get_the_title( $faq ) ); ?> <span>+</span></summary>
					<p><?php echo esc_html( wp_strip_all_tags( $faq->post_content ) ); ?></p>
				</details>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container reveal" style="text-align:center;">
			<h2 style="font-size:clamp(2rem,5vw,3.5rem);margin:16px 0 24px;">Ready to define your idea, strengthen your brand, or go global?</h2>
			<p style="color:#aaa;max-width:50ch;margin:0 auto 28px;">Let us help you turn your vision into a structured, visible, and globally competitive brand.</p>
			<div class="hero-cta-row" style="justify-content:center;">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-gold">Start an Enquiry</a>
				<a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>" class="btn btn-outline">Book a Consultation</a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
