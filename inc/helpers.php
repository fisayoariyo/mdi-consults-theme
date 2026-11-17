<?php
/**
 * Theme helpers — get Customizer values with defaults.
 *
 * @package MDI_Consults
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default theme_mod values.
 *
 * @return array
 */
function mdi_consults_defaults() {
	static $defaults = null;
	if ( null !== $defaults ) {
		return $defaults;
	}
	$defaults = array(
		'mdi_brand_text'       => 'MDIC®',
		'mdi_chip_title'       => 'Meet MDI',
		'mdi_chip_name'        => 'MDI Consults',
		'mdi_chip_role'        => 'Strategic Advisory',
		'mdi_hero_wordmark'    => 'MDIC',
		'mdi_hero_tagline'     => 'Defining Your Ideas, Broadening Your Vision.',
		'mdi_hero_headline'    => 'From Idea Clarity to Global Visibility',
		'mdi_hero_text'        => 'MDI Consults is a global digital, brand, and strategic consulting firm helping founders, creatives, SMEs, professionals, and organisations clarify their ideas, strengthen their brands, build digital solutions, and access global opportunities.',
		'mdi_hero_cta'         => 'Book a Consultation',
		'mdi_hero_cta_url'     => '/book-consultation/',
		'mdi_hero_cta_2'       => 'Explore Our Services',
		'mdi_hero_cta_2_url'   => '/services/',
		'mdi_hero_tags'        => "Strategy\nBranding\nDigital",
		'mdi_about_pre'        => 'MDI Consults was built to help people and organisations move from scattered ideas to structured, visible, and market-ready solutions.',
		'mdi_about_post'       => 'We listen to your story, understand your goals, ask the right questions, simplify complex challenges, and develop tailored strategies that help you move forward with clarity.',
		'mdi_newsletter_email' => 'mdiconsultsltd@gmail.com',
		'mdi_stat_1_label'     => 'Years consulting',
		'mdi_stat_1_number'    => '5',
		'mdi_stat_1_suffix'    => '+',
		'mdi_stat_2_label'     => 'Brands impacted',
		'mdi_stat_2_number'    => '30',
		'mdi_stat_2_suffix'    => '+',
		'mdi_stat_3_label'     => 'Client retention',
		'mdi_stat_3_number'    => '85',
		'mdi_stat_3_suffix'    => '%',
		'mdi_stat_4_label'     => 'Success rate',
		'mdi_stat_4_number'    => '100',
		'mdi_stat_4_suffix'    => '%',
		'mdi_portfolio_title'  => 'Selected work across brand, digital & strategy.',
		'mdi_services_title'   => 'Strategic solutions for the modern digital age.',
		'mdi_gtv_title'        => 'Global talent pathway advisory tiers.',
		'mdi_faq_title'        => 'Common questions.',
		'mdi_cta_title'        => 'Ready to build with clarity?',
		'mdi_cta_text'         => 'Your vision, our strategy — let\'s make it happen.',
		'mdi_cta_btn'          => 'Contact Now',
		'mdi_marquee_text'     => 'We Are Strategic, Bold And Global',
		'mdi_email'            => 'Contact@mdiconsults.com',
		'mdi_phone'            => '+234 816 114 5570',
		'mdi_phone_tel'        => '+2348161145570',
		'mdi_address'          => '58 Olokonla Road, Off Lekki-Epe Expressway, Lekki, Lagos, Nigeria',
		'mdi_address_short'    => '58 Olokonla Road, Lekki, Lagos',
		'mdi_instagram'        => 'https://instagram.com/MDIConsults',
		'mdi_instagram_handle' => '@MDIConsults',
		'mdi_social_extra'     => 'LinkedIn · Facebook · TikTok @MDIConsultsltd',
		'mdi_response_time'    => 'Response within 24–48 hours on working days.',
		'mdi_fluentform_id'    => '1',
		'mdi_footer_tagline'   => "Defining Your Ideas.\nBroadening Your Horizons.",
		'mdi_footer_blurb'     => 'Global digital, brand & strategic consulting — Lagos · UK · Worldwide.',
		'mdi_footer_legal'     => 'MDI Consults · MillionDollar Ideas Ltd',
	);
	return $defaults;
}

/**
 * Get a theme_mod with theme default.
 *
 * @param string $key     Setting key.
 * @param mixed  $default Optional override default.
 * @return mixed
 */
function mdi_mod( $key, $default = null ) {
	$defaults = mdi_consults_defaults();
	if ( null === $default ) {
		$default = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
	}
	return get_theme_mod( $key, $default );
}

/**
 * Hero background URL (Customizer image or theme fallback).
 *
 * @return string
 */
function mdi_consults_hero_image_url() {
	$id = absint( mdi_mod( 'mdi_hero_image', 0 ) );
	if ( $id ) {
		$url = wp_get_attachment_image_url( $id, 'full' );
		if ( $url ) {
			return $url;
		}
	}
	return get_template_directory_uri() . '/assets/images/hero-africa.png';
}

/**
 * About bridge image (falls back to hero).
 *
 * @return string
 */
function mdi_consults_about_image_url() {
	$id = absint( mdi_mod( 'mdi_about_image', 0 ) );
	if ( $id ) {
		$url = wp_get_attachment_image_url( $id, 'large' );
		if ( $url ) {
			return $url;
		}
	}
	return mdi_consults_hero_image_url();
}

/**
 * Contact details used across site.
 *
 * @return array
 */
function mdi_consults_contact() {
	return array(
		'email'            => mdi_mod( 'mdi_email' ),
		'phone'            => mdi_mod( 'mdi_phone' ),
		'phone_t'          => mdi_mod( 'mdi_phone_tel' ),
		'address'          => mdi_mod( 'mdi_address' ),
		'address_short'    => mdi_mod( 'mdi_address_short' ),
		'instagram'        => mdi_mod( 'mdi_instagram' ),
		'instagram_handle' => mdi_mod( 'mdi_instagram_handle' ),
		'social_extra'     => mdi_mod( 'mdi_social_extra' ),
		'response'         => mdi_mod( 'mdi_response_time' ),
	);
}
