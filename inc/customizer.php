<?php
/**
 * Theme Customizer — client-editable site content.
 *
 * @package MDI_Consults
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function mdi_consults_customize_register( $wp_customize ) {

	$wp_customize->add_panel(
		'mdi_panel',
		array(
			'title'       => __( 'MDI Site Content', 'mdi-consults' ),
			'description' => __( 'Edit hero, contact, homepage copy, and header without touching code.', 'mdi-consults' ),
			'priority'    => 30,
		)
	);

	/* ── Brand / Header ── */
	$wp_customize->add_section(
		'mdi_brand',
		array(
			'title' => __( 'Brand & Header', 'mdi-consults' ),
			'panel' => 'mdi_panel',
		)
	);

	$wp_customize->add_setting( 'mdi_brand_text', array( 'default' => 'MDIC®', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'mdi_brand_text', array(
		'label'   => __( 'Header logo text', 'mdi-consults' ),
		'section' => 'mdi_brand',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'mdi_chip_title', array( 'default' => 'Meet MDI', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'mdi_chip_title', array( 'label' => __( 'Header card title', 'mdi-consults' ), 'section' => 'mdi_brand', 'type' => 'text' ) );

	$wp_customize->add_setting( 'mdi_chip_name', array( 'default' => 'MDI Consults', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'mdi_chip_name', array( 'label' => __( 'Header card name', 'mdi-consults' ), 'section' => 'mdi_brand', 'type' => 'text' ) );

	$wp_customize->add_setting( 'mdi_chip_role', array( 'default' => 'Strategic Advisory', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'mdi_chip_role', array( 'label' => __( 'Header card role', 'mdi-consults' ), 'section' => 'mdi_brand', 'type' => 'text' ) );

	$wp_customize->add_setting( 'mdi_chip_image', array( 'default' => 0, 'sanitize_callback' => 'absint' ) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'mdi_chip_image', array(
		'label'     => __( 'Header card photo', 'mdi-consults' ),
		'section'   => 'mdi_brand',
		'mime_type' => 'image',
	) ) );

	$wp_customize->add_setting( 'mdi_hero_wordmark', array( 'default' => 'MDIC', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'mdi_hero_wordmark', array( 'label' => __( 'Hero big wordmark', 'mdi-consults' ), 'section' => 'mdi_brand', 'type' => 'text' ) );

	/* ── Hero ── */
	$wp_customize->add_section(
		'mdi_hero',
		array(
			'title' => __( 'Homepage Hero', 'mdi-consults' ),
			'panel' => 'mdi_panel',
		)
	);

	$wp_customize->add_setting( 'mdi_hero_image', array( 'default' => 0, 'sanitize_callback' => 'absint' ) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'mdi_hero_image', array(
		'label'       => __( 'Hero background image', 'mdi-consults' ),
		'description' => __( 'Upload a wide photo. The water-ripple effect uses this image.', 'mdi-consults' ),
		'section'     => 'mdi_hero',
		'mime_type'   => 'image',
	) ) );

	$wp_customize->add_setting( 'mdi_hero_text', array(
		'default'           => 'Book a consultation, share your vision, and your strategy roadmap kicks off within 48 hours.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'mdi_hero_text', array(
		'label'   => __( 'Hero intro text', 'mdi-consults' ),
		'section' => 'mdi_hero',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'mdi_hero_cta', array( 'default' => 'Explore Now', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'mdi_hero_cta', array( 'label' => __( 'Hero button text', 'mdi-consults' ), 'section' => 'mdi_hero', 'type' => 'text' ) );

	$wp_customize->add_setting( 'mdi_hero_cta_url', array( 'default' => '/contact/', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'mdi_hero_cta_url', array(
		'label'       => __( 'Hero button link', 'mdi-consults' ),
		'description' => __( 'Path like /contact/ or full URL', 'mdi-consults' ),
		'section'     => 'mdi_hero',
		'type'        => 'text',
	) );

	$wp_customize->add_setting( 'mdi_hero_tags', array( 'default' => "01/ Strategy\nBranding\nDigital", 'sanitize_callback' => 'sanitize_textarea_field' ) );
	$wp_customize->add_control( 'mdi_hero_tags', array(
		'label'       => __( 'Hero service tags', 'mdi-consults' ),
		'description' => __( 'One per line', 'mdi-consults' ),
		'section'     => 'mdi_hero',
		'type'        => 'textarea',
	) );

	/* ── About bridge ── */
	$wp_customize->add_section(
		'mdi_about_home',
		array(
			'title' => __( 'Homepage About Section', 'mdi-consults' ),
			'panel' => 'mdi_panel',
		)
	);

	$wp_customize->add_setting( 'mdi_about_image', array( 'default' => 0, 'sanitize_callback' => 'absint' ) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'mdi_about_image', array(
		'label'     => __( 'About section image', 'mdi-consults' ),
		'section'   => 'mdi_about_home',
		'mime_type' => 'image',
	) ) );

	$wp_customize->add_setting( 'mdi_about_pre', array(
		'default'           => 'MDI Consults, a subsidiary of MillionDollar Ideas Ltd, is a full-service strategic consulting firm dedicated to helping agencies, brands, and individuals break barriers and achieve sustainable success. We specialize in dissecting complex challenges, conducting extensive research, and delivering tailored solutions that elevate businesses in the digital age.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'mdi_about_pre', array( 'label' => __( '(Pre) text', 'mdi-consults' ), 'section' => 'mdi_about_home', 'type' => 'textarea' ) );

	$wp_customize->add_setting( 'mdi_about_post', array(
		'default'           => 'We love hearing your brand\'s story — your aspirations, fears, and long-term goals. Our job is to ask the right questions, simplify complexities, and conduct thorough research before delivering tailor-made strategies that help you move forward with clarity.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'mdi_about_post', array( 'label' => __( '(+Post) text', 'mdi-consults' ), 'section' => 'mdi_about_home', 'type' => 'textarea' ) );

	/* Stats */
	for ( $i = 1; $i <= 4; $i++ ) {
		$defaults = array(
			1 => array( 'Years consulting', '5', '+' ),
			2 => array( 'Brands impacted', '30', '+' ),
			3 => array( 'Client retention', '85', '%' ),
			4 => array( 'Success rate', '100', '%' ),
		);
		$wp_customize->add_setting( "mdi_stat_{$i}_label", array( 'default' => $defaults[ $i ][0], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( "mdi_stat_{$i}_label", array( 'label' => sprintf( __( 'Stat %d label', 'mdi-consults' ), $i ), 'section' => 'mdi_about_home', 'type' => 'text' ) );
		$wp_customize->add_setting( "mdi_stat_{$i}_number", array( 'default' => $defaults[ $i ][1], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( "mdi_stat_{$i}_number", array( 'label' => sprintf( __( 'Stat %d number', 'mdi-consults' ), $i ), 'section' => 'mdi_about_home', 'type' => 'text' ) );
		$wp_customize->add_setting( "mdi_stat_{$i}_suffix", array( 'default' => $defaults[ $i ][2], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( "mdi_stat_{$i}_suffix", array( 'label' => sprintf( __( 'Stat %d suffix (+ or %%)', 'mdi-consults' ), $i ), 'section' => 'mdi_about_home', 'type' => 'text' ) );
	}

	/* ── Section headlines ── */
	$wp_customize->add_section(
		'mdi_headlines',
		array(
			'title' => __( 'Homepage Headlines', 'mdi-consults' ),
			'panel' => 'mdi_panel',
		)
	);

	$headlines = array(
		'mdi_portfolio_title' => array( 'Portfolio headline', 'Selected work across brand, digital & strategy.' ),
		'mdi_services_title'  => array( 'Services headline', 'Strategic solutions for the modern digital age.' ),
		'mdi_gtv_title'       => array( 'GTV packages headline', 'Global talent pathway advisory tiers.' ),
		'mdi_faq_title'       => array( 'FAQ headline', 'Common questions.' ),
		'mdi_cta_title'       => array( 'Bottom CTA headline', 'Ready to build with clarity?' ),
		'mdi_cta_text'        => array( 'Bottom CTA text', 'Your vision, our strategy — let\'s make it happen.' ),
		'mdi_cta_btn'         => array( 'Bottom CTA button', 'Contact Now' ),
		'mdi_marquee_text'    => array( 'Marquee text', 'We Are Strategic, Bold And Global' ),
	);
	foreach ( $headlines as $id => $meta ) {
		$wp_customize->add_setting( $id, array( 'default' => $meta[1], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( $id, array( 'label' => $meta[0], 'section' => 'mdi_headlines', 'type' => 'text' ) );
	}

	/* ── Contact ── */
	$wp_customize->add_section(
		'mdi_contact',
		array(
			'title' => __( 'Contact & Social', 'mdi-consults' ),
			'panel' => 'mdi_panel',
		)
	);

	$contact_fields = array(
		'mdi_email'             => array( 'Email', 'Contact@mdiconsults.com', 'text' ),
		'mdi_phone'             => array( 'Phone display', '+234 816 114 5570', 'text' ),
		'mdi_phone_tel'         => array( 'Phone dial link (digits)', '+2348161145570', 'text' ),
		'mdi_address'           => array( 'Full address', '58 Olokonla Road, Off Lekki-Epe Expressway, Lekki, Lagos, Nigeria', 'textarea' ),
		'mdi_address_short'     => array( 'Short address (footer)', '58 Olokonla Road, Lekki, Lagos', 'text' ),
		'mdi_instagram'         => array( 'Instagram URL', 'https://instagram.com/MDIConsults', 'url' ),
		'mdi_instagram_handle'  => array( 'Instagram handle', '@MDIConsults', 'text' ),
		'mdi_social_extra'      => array( 'Other social line', 'LinkedIn · Facebook · TikTok @MDIConsultsltd', 'text' ),
		'mdi_response_time'     => array( 'Response note', 'Response within 24–48 hours on working days.', 'text' ),
		'mdi_fluentform_id'     => array( 'Fluent Form ID', '1', 'text' ),
	);
	foreach ( $contact_fields as $id => $meta ) {
		$sanitize = 'url' === $meta[2] ? 'esc_url_raw' : ( 'textarea' === $meta[2] ? 'sanitize_textarea_field' : 'sanitize_text_field' );
		$wp_customize->add_setting( $id, array( 'default' => $meta[1], 'sanitize_callback' => $sanitize ) );
		$wp_customize->add_control( $id, array(
			'label'   => $meta[0],
			'section' => 'mdi_contact',
			'type'    => 'url' === $meta[2] ? 'url' : ( 'textarea' === $meta[2] ? 'textarea' : 'text' ),
		) );
	}

	/* ── Footer ── */
	$wp_customize->add_section(
		'mdi_footer',
		array(
			'title' => __( 'Footer', 'mdi-consults' ),
			'panel' => 'mdi_panel',
		)
	);

	$wp_customize->add_setting( 'mdi_footer_tagline', array(
		'default'           => "Defining Your Ideas.\nBroadening Your Horizons.",
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'mdi_footer_tagline', array( 'label' => __( 'Footer headline', 'mdi-consults' ), 'section' => 'mdi_footer', 'type' => 'textarea' ) );

	$wp_customize->add_setting( 'mdi_footer_blurb', array(
		'default'           => 'Global digital, brand & strategic consulting — Lagos · UK · Worldwide.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'mdi_footer_blurb', array( 'label' => __( 'Footer blurb', 'mdi-consults' ), 'section' => 'mdi_footer', 'type' => 'text' ) );

	$wp_customize->add_setting( 'mdi_footer_legal', array(
		'default'           => 'MDI Consults · MillionDollar Ideas Ltd',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'mdi_footer_legal', array( 'label' => __( 'Footer legal line', 'mdi-consults' ), 'section' => 'mdi_footer', 'type' => 'text' ) );
}
add_action( 'customize_register', 'mdi_consults_customize_register' );
