<?php
/**
 * MDI Consults theme functions.
 *
 * @package MDI_Consults
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MDI_CONSULTS_VERSION', '2.0.1' );
define( 'MDI_CONSULTS_DIR', get_template_directory() );

require_once MDI_CONSULTS_DIR . '/inc/helpers.php';
require_once MDI_CONSULTS_DIR . '/inc/customizer.php';
require_once MDI_CONSULTS_DIR . '/inc/post-types.php';
require_once MDI_CONSULTS_DIR . '/inc/seed-content.php';
require_once MDI_CONSULTS_DIR . '/inc/forms.php';

function mdi_consults_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'mdi-consults' ),
			'footer'  => __( 'Footer Menu', 'mdi-consults' ),
		)
	);
}
add_action( 'after_setup_theme', 'mdi_consults_setup' );

function mdi_consults_assets() {
	wp_enqueue_style(
		'mdi-google-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,700;1,9..40,400&family=IBM+Plex+Mono:wght@400;500&family=Syne:wght@600;700;800&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'mdi-consults-style', get_stylesheet_uri(), array( 'mdi-google-fonts' ), MDI_CONSULTS_VERSION );
	wp_enqueue_script( 'mdi-consults-main', get_template_directory_uri() . '/assets/js/main.js', array(), MDI_CONSULTS_VERSION, true );
	if ( is_front_page() ) {
		wp_enqueue_script( 'mdi-consults-hero-ripple', get_template_directory_uri() . '/assets/js/hero-ripple.js', array(), MDI_CONSULTS_VERSION, true );
	}
}
add_action( 'wp_enqueue_scripts', 'mdi_consults_assets' );

/**
 * Favicon — gold MDI on black (falls back when no Customizer site icon).
 */
function mdi_consults_favicon() {
	if ( function_exists( 'has_site_icon' ) && has_site_icon() ) {
		return;
	}
	$base = get_template_directory_uri() . '/assets/images';
	$ver  = MDI_CONSULTS_VERSION;
	echo '<link rel="icon" href="' . esc_url( $base . '/favicon.svg' ) . '?v=' . esc_attr( $ver ) . '" type="image/svg+xml">' . "\n";
	echo '<link rel="icon" href="' . esc_url( $base . '/favicon.png' ) . '?v=' . esc_attr( $ver ) . '" type="image/png" sizes="512x512">' . "\n";
	echo '<link rel="apple-touch-icon" href="' . esc_url( $base . '/favicon.png' ) . '?v=' . esc_attr( $ver ) . '">' . "\n";
}
add_action( 'wp_head', 'mdi_consults_favicon', 2 );

/**
 * Fuel-style header nav — always 4 horizontal links.
 */
function mdi_consults_header_nav() {
	$items = array(
		array( 'Home', home_url( '/' ) ),
		array( 'Work', home_url( '/work/' ) ),
		array( 'Services', home_url( '/services/' ) ),
		array( 'About', home_url( '/about/' ) ),
		array( 'Contact', home_url( '/contact/' ) ),
	);

	$current = trailingslashit( ( is_ssl() ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );

	echo '<nav class="nav" id="site-nav" aria-label="Primary"><ul class="nav__list">';
	foreach ( $items as $item ) {
		$active = trailingslashit( $item[1] ) === $current ? ' is-active' : '';
		printf(
			'<li class="nav__item"><a href="%s" class="nav__link%s">%s</a></li>',
			esc_url( $item[1] ),
			esc_attr( $active ),
			esc_html( $item[0] )
		);
	}
	echo '</ul></nav>';
}

function mdi_consults_nav_fallback() {
	mdi_consults_header_nav();
}

function mdi_consults_section_meta( $num, $label ) {
	/* Intentionally empty — Fuel-style (04) (Work) © year labels removed. */
}

/**
 * Resolve relative path or absolute URL.
 *
 * @param string $path Path or URL.
 * @return string
 */
function mdi_consults_url( $path ) {
	if ( ! $path ) {
		return home_url( '/' );
	}
	if ( preg_match( '#^https?://#i', $path ) ) {
		return $path;
	}
	return home_url( $path );
}

/**
 * Portfolio image for a project (featured image, or matched file in theme assets).
 *
 * @param int|WP_Post $post Project post.
 * @return string Image URL or empty.
 */
function mdi_consults_project_image_url( $post ) {
	$post = get_post( $post );
	if ( ! $post ) {
		return '';
	}

	$thumb = get_the_post_thumbnail_url( $post, 'large' );
	if ( $thumb ) {
		return $thumb;
	}

	$map = array(
		'inclusive-education'           => array( 'inclusive-education.jpg', 'inclusive-education.png' ),
		'hafrikplay'                    => array( 'hafrikplay.jpeg', 'hafrikplay.jpg', 'hafrikplay.png' ),
		'urban-girl-beauty'             => array( 'urban-girl-beauty.png', 'urban-girl-beauty.jpg' ),
		'stonecode-entertainment'       => array( 'stonecode-entertainment.png', 'stonecode-entertainment.jpg' ),
		'scarlet-night-club'            => array( 'scarlet-night-club.jpg', 'scarlet-night-club.png' ),
		'wealth-property-consultants'   => array( 'wealth-property-consultants.png', 'wealth-property-consultants.jpg' ),
		'adaba-initiatives'             => array( 'adaba-initiatives.jpg', 'adaba-initiatives.png' ),
	);

	$slug = sanitize_title( $post->post_title );
	$dir  = get_template_directory() . '/assets/images/work/';
	$uri  = get_template_directory_uri() . '/assets/images/work/';

	$candidates = isset( $map[ $slug ] ) ? $map[ $slug ] : array( $slug . '.jpg', $slug . '.jpeg', $slug . '.png', $slug . '.webp' );
	foreach ( $candidates as $file ) {
		if ( file_exists( $dir . $file ) ) {
			return $uri . $file;
		}
	}

	return '';
}

/**
 * Admin notice pointing clients to edit locations.
 */
function mdi_consults_admin_notice() {
	$screen = get_current_screen();
	if ( ! $screen || 'dashboard' !== $screen->id ) {
		return;
	}
	$url = admin_url( 'customize.php?autofocus[panel]=mdi_panel' );
	echo '<div class="notice notice-info"><p><strong>MDI Consults:</strong> Edit the hero image, contact details, and homepage text under <a href="' . esc_url( $url ) . '">Appearance → Customize → MDI Site Content</a>. Edit Work, Services, Team, FAQs, and GTV in the left menu.</p></div>';
}
add_action( 'admin_notices', 'mdi_consults_admin_notice' );
