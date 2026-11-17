<?php
/**
 * Template Name: About Page
 *
 * @package MDI_Consults
 */

get_header();

$team_fallback = array(
	array(
		'name' => 'Omobosola Karimat Alaka',
		'role' => 'CEO',
		'img'  => get_template_directory_uri() . '/assets/images/team/omobosola-ceo.png',
	),
	array(
		'name' => 'Abolaji Talib Alaka',
		'role' => 'COO',
		'img'  => get_template_directory_uri() . '/assets/images/team/abolaji-coo.png',
	),
	array(
		'name' => 'Shorinola Adekunle',
		'role' => 'Executive Operations Manager',
		'img'  => get_template_directory_uri() . '/assets/images/team/shorinola-ops.jpeg',
	),
);

$team_posts = mdi_consults_query_items( 'mdi_team' );
$team       = array();
if ( $team_posts ) {
	foreach ( $team_posts as $member ) {
		$thumb = get_the_post_thumbnail_url( $member, 'large' );
		$team[] = array(
			'name' => get_the_title( $member ),
			'role' => get_post_meta( $member->ID, 'mdi_role', true ),
			'img'  => $thumb,
		);
	}
}
if ( count( $team ) < 3 ) {
	$team = $team_fallback;
}

$why = array(
	array( 'A Team That Cares', 'We are invested in your success, working alongside you every step of the way.' ),
	array( 'Tailored Solutions', 'No generic templates — only custom strategies that work.' ),
	array( 'Data-Driven Approach', 'We combine insights, creativity, and technology to deliver results.' ),
	array( 'Proven Track Record', 'We have worked with diverse brands across industries, elevating digital presence and business outcomes.' ),
);
?>
<main>
	<section class="page-hero">
		<div class="container reveal">
			<p class="meta"><span>About</span></p>
			<h1>About MDI Consults</h1>
			<p class="hero-lead" style="margin-top:16px;">Defining Your Ideas. Broadening Your Horizons.</p>
		</div>
	</section>

	<section class="section">
		<div class="container prose-block reveal">
			<p>At MDI Consults, we don’t just offer solutions — we define brands, solve complex challenges, and create sustainable strategies that drive real impact. As a subsidiary of MillionDollar Ideas Ltd, we specialise in business strategy, brand development, digital transformation, and market positioning.</p>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container about-split">
			<div class="reveal">
				<p class="meta"><span>Mission</span></p>
				<h2>Our mission</h2>
				<p>To provide innovative, research-driven solutions that empower brands, businesses, and individuals to achieve measurable growth and long-term success.</p>
			</div>
			<div class="reveal">
				<p class="meta"><span>Vision</span></p>
				<h2>Our vision</h2>
				<p>To be the leading strategic consulting firm that transforms businesses through insightful solutions, impactful strategies, and cutting-edge digital expertise.</p>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Who we are</span></p>
					<h2>Founded to transform brands for the digital age</h2>
				</div>
			</div>
			<div class="about-split reveal">
				<p>MDI Consults was built on the vision of transforming brands for the digital age. We are creative thinkers, strategic problem-solvers, and digital experts with a passion for helping businesses scale, evolve, and thrive.</p>
				<p>Our expertise spans industries, allowing us to bridge business strategy, digital innovation, and brand storytelling — with a practical consulting mindset.</p>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>What we do</span></p>
					<h2>Tailored solutions across brand, digital and strategy</h2>
				</div>
			</div>
			<ul class="check-list reveal">
				<li>Brand Strategy &amp; Identity Development</li>
				<li>Website Development &amp; UI/UX Design</li>
				<li>Social Media Management &amp; Digital Marketing</li>
				<li>Public Relations &amp; Online Reputation Management</li>
				<li>Content Marketing &amp; SEO</li>
				<li>Data Analytics &amp; Strategy Optimisation</li>
				<li>Strategic Planning &amp; Business Development</li>
				<li>MDI Consults GTV — Global Talent Pathway Advisory</li>
			</ul>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Approach</span></p>
					<h2>Our approach</h2>
					<p class="section-lead" style="color:#aaa;">Human-centred problem-solving.</p>
				</div>
			</div>
			<div class="process-grid">
				<article class="process-step reveal">
					<span class="num">01</span>
					<h3>Listen</h3>
					<p>Every brand has a unique story, challenges, and goals. We prioritise understanding your vision, concerns, and aspirations.</p>
				</article>
				<article class="process-step reveal">
					<span class="num">02</span>
					<h3>Analyse</h3>
					<p>We ask the right questions and conduct deep research to uncover opportunities and challenges before suggesting solutions.</p>
				</article>
				<article class="process-step reveal">
					<span class="num">03</span>
					<h3>Strategise</h3>
					<p>With insights in hand, we develop a customised plan of action — ensuring every strategy is tailored to your needs and long-term goals.</p>
				</article>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Why us</span></p>
					<h2>Why choose MDI Consults</h2>
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

	<section class="section section-dark">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Team</span></p>
					<h2>Meet the experts</h2>
				</div>
			</div>
			<div class="team-grid">
				<?php foreach ( $team as $member ) : ?>
				<article class="team-card reveal">
					<?php if ( ! empty( $member['img'] ) ) : ?>
					<img src="<?php echo esc_url( $member['img'] ); ?>" alt="<?php echo esc_attr( $member['name'] ); ?>" width="480" height="600" loading="lazy">
					<?php endif; ?>
					<h3><?php echo esc_html( $member['name'] ); ?></h3>
					<p class="sub"><?php echo esc_html( $member['role'] ); ?></p>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container reveal" style="text-align:center;">
			<h2>Let’s build something extraordinary together</h2>
			<p class="section-lead" style="margin:16px auto 28px;">Your ideas deserve expert execution, and your brand deserves strategic direction.</p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-gold">Get in Touch</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>
