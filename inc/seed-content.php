<?php
/**
 * Seed default CPT content once (from PDF brief).
 *
 * @package MDI_Consults
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mdi_consults_maybe_seed_content() {
	if ( get_option( 'mdi_content_seeded_v1' ) ) {
		return;
	}

	$projects = array(
		array( 'Inclusive Education', 'Brand Identity & Strategy', '70% increase in partnership requests within 3 months.', '2025', true ),
		array( 'HafrikPlay', 'Web Design & Digital Growth', '300% organic traffic growth in 4 months post-launch.', '2024', true ),
		array( 'Urban Girl Beauty', 'E-Commerce & Branding', 'Stronger positioning and online presence.', '2025', true ),
		array( 'Stonecode Entertainment', 'PR & Digital Visibility', 'Featured in 6 major entertainment publications.', '2024', true ),
		array( 'Scarlet Night Club', 'Social media revamp & engagement', '3x Instagram engagement, 40% rise in mid-week attendance.', '2024', false ),
		array( 'Wealth Property Consultants', 'Market research & business strategy', 'Doubled client acquisition from UK and US markets.', '2024', false ),
		array( 'Adaba Initiatives', 'Website review & documentation', 'Improved structure and operational clarity.', '2025', false ),
	);
	foreach ( $projects as $i => $p ) {
		$id = wp_insert_post( array(
			'post_type'   => 'mdi_project',
			'post_title'  => $p[0],
			'post_status' => 'publish',
			'menu_order'  => $i + 1,
		) );
		if ( $id && ! is_wp_error( $id ) ) {
			update_post_meta( $id, 'mdi_subtitle', $p[1] );
			update_post_meta( $id, 'mdi_result', $p[2] );
			update_post_meta( $id, 'mdi_year', $p[3] );
			update_post_meta( $id, 'mdi_show_home', $p[4] ? '1' : '' );
		}
	}

	$services = array(
		array( 'Brand & Business Strategy', 'Identity & Positioning', 'Define purpose, voice, positioning, and visual direction so your brand communicates with clarity and confidence.', true ),
		array( 'Website Development & UI/UX', 'Digital Build', 'Responsive, modern WordPress websites designed to present value clearly and convert visitors into enquiries.', true ),
		array( 'MDI Consults GTV', 'Global Talent Advisory', 'Eligibility assessment, evidence mapping, and profile positioning across Arts, Tech, and Academia.', true ),
		array( 'Social Media & Marketing', 'Visibility', 'Build visibility where your audience already is — content, campaigns, community.', false ),
		array( 'PR & Reputation Management', 'Credibility', 'Build credibility, visibility and trust with PR strategy and media positioning.', false ),
		array( 'Content Marketing & SEO', 'Authority', 'Create content that builds authority — blogs, SEO, newsletters.', false ),
		array( 'Research & Data Analytics', 'Insight', 'Make better decisions with market research and performance reporting.', false ),
		array( 'Strategic Planning & Business Dev', 'Growth', 'Turn ambition into a practical growth plan and expansion strategy.', false ),
	);
	foreach ( $services as $i => $s ) {
		$id = wp_insert_post( array(
			'post_type'    => 'mdi_service',
			'post_title'   => $s[0],
			'post_content' => $s[2],
			'post_status'  => 'publish',
			'menu_order'   => $i + 1,
		) );
		if ( $id && ! is_wp_error( $id ) ) {
			update_post_meta( $id, 'mdi_subtitle', $s[1] );
			update_post_meta( $id, 'mdi_show_home', $s[3] ? '1' : '' );
		}
	}

	$team = array(
		array( 'Omobosola Karimat Alaka', 'Lead Creative Director' ),
		array( 'Abolaji Talib Alaka', 'Brand Research Expert' ),
		array( 'Oluwamayowa Fapohunda', 'Full Stack Developer' ),
		array( 'Destiny Ezenwata', 'Backend Developer' ),
		array( 'Moradeke Ayeni', 'Graphics Designer' ),
		array( 'Olasubomi Alaka', 'Content Creator' ),
	);
	foreach ( $team as $i => $m ) {
		$id = wp_insert_post( array(
			'post_type'   => 'mdi_team',
			'post_title'  => $m[0],
			'post_status' => 'publish',
			'menu_order'  => $i + 1,
		) );
		if ( $id && ! is_wp_error( $id ) ) {
			update_post_meta( $id, 'mdi_role', $m[1] );
		}
	}

	$faqs = array(
		array( 'Who is MDI Consults?', 'MDI Consults is a strategic solutions agency offering brand development, digital marketing, business analysis, and global talent advisory. A subsidiary of MillionDollar Ideas Ltd, headquartered in Lagos with global reach.' ),
		array( 'What industries do you serve?', 'Real estate, entertainment, technology, e-commerce, financial services, health, education, and personal brands seeking global opportunities.' ),
		array( 'Do you guarantee GTV approval?', 'No. MDI Consults GTV provides advisory, profile positioning, and application-readiness support. We do not replace regulated immigration or legal advice.' ),
		array( 'How do I get started?', 'Contact us via the enquiry form, email Contact@mdiconsults.com, or call +234 816 114 5570. We respond within 24–48 hours on working days.' ),
	);
	foreach ( $faqs as $i => $f ) {
		wp_insert_post( array(
			'post_type'    => 'mdi_faq',
			'post_title'   => $f[0],
			'post_content' => $f[1],
			'post_status'  => 'publish',
			'menu_order'   => $i + 1,
		) );
	}

	$gtv = array(
		array( 'From Home to Here', 'Tier 1 · Eligibility', '£250', "60-min eligibility consultation\nRoute overview (Arts, Tech, Academia)\nTimeline & next steps", false, true ),
		array( 'Abule to Abroad', 'Tier 2 · Roadmap', '£650', "Everything in Tier 1\nGTV-aligned CV restructure\n6–12 month roadmap\nReferee mapping", true, true ),
		array( 'Diaspora Connected', 'Tier 3 · Evidence', '£3,500', "Evidence support\nRecommendation letters\nMedia planning", false, false ),
		array( 'Heritage to Horizon', 'Tier 4 · Full execution', '£5,500', "Full evidence collation\nPortfolio & narrative build\nUp to 12 months support", false, true ),
	);
	foreach ( $gtv as $i => $g ) {
		$id = wp_insert_post( array(
			'post_type'    => 'mdi_gtv',
			'post_title'   => $g[0],
			'post_content' => 'Direction and support for your global talent pathway.',
			'post_status'  => 'publish',
			'menu_order'   => $i + 1,
		) );
		if ( $id && ! is_wp_error( $id ) ) {
			update_post_meta( $id, 'mdi_tier_label', $g[1] );
			update_post_meta( $id, 'mdi_price', $g[2] );
			update_post_meta( $id, 'mdi_features', $g[3] );
			update_post_meta( $id, 'mdi_featured', $g[4] ? '1' : '' );
			update_post_meta( $id, 'mdi_show_home', $g[5] ? '1' : '' );
		}
	}

	update_option( 'mdi_content_seeded_v1', 1 );
}
add_action( 'after_setup_theme', 'mdi_consults_maybe_seed_content', 20 );

/**
 * Brief v2 upgrades — team of 3 + dual-currency GTV.
 */
function mdi_consults_maybe_seed_content_v2() {
	if ( get_option( 'mdi_content_seeded_v2' ) ) {
		return;
	}

	// Reset team to approved three.
	$old = get_posts(
		array(
			'post_type'      => 'mdi_team',
			'posts_per_page' => -1,
			'post_status'    => 'any',
			'fields'         => 'ids',
		)
	);
	foreach ( $old as $id ) {
		wp_delete_post( $id, true );
	}

	$team = array(
		array( 'Omobosola Karimat Alaka', 'CEO', 'omobosola-ceo.png' ),
		array( 'Abolaji Talib Alaka', 'COO', 'abolaji-coo.png' ),
		array( 'Shorinola Adekunle', 'Executive Operations Manager', 'shorinola-ops.jpeg' ),
	);
	$dir = get_template_directory() . '/assets/images/team/';
	foreach ( $team as $i => $m ) {
		$id = wp_insert_post(
			array(
				'post_type'   => 'mdi_team',
				'post_title'  => $m[0],
				'post_status' => 'publish',
				'menu_order'  => $i + 1,
			)
		);
		if ( $id && ! is_wp_error( $id ) ) {
			update_post_meta( $id, 'mdi_role', $m[1] );
			$path = $dir . $m[2];
			if ( file_exists( $path ) ) {
				// Featured image left for media library upload; theme template has file fallbacks.
			}
		}
	}

	$prices = array(
		'From Home to Here'   => array( '£250', '₦550,000' ),
		'Abule to Abroad'     => array( '£650', '₦1,430,000' ),
		'Diaspora Connected'  => array( '£3,500', '₦7,700,000' ),
		'Heritage to Horizon' => array( '£5,500', '₦12,100,000' ),
	);
	$pkgs = get_posts(
		array(
			'post_type'      => 'mdi_gtv',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
		)
	);
	foreach ( $pkgs as $pkg ) {
		$title = get_the_title( $pkg );
		if ( isset( $prices[ $title ] ) ) {
			update_post_meta( $pkg->ID, 'mdi_price', $prices[ $title ][0] );
			update_post_meta( $pkg->ID, 'mdi_price_ngn', $prices[ $title ][1] );
		}
	}

	update_option( 'mdi_content_seeded_v2', 1 );
}
add_action( 'after_setup_theme', 'mdi_consults_maybe_seed_content_v2', 25 );
