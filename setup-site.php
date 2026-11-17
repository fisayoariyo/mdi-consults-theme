<?php
/**
 * One-time MDI Consults site setup. Run: php setup-site.php
 *
 * @package MDI_Consults
 */

define( 'WP_USE_THEMES', false );
require_once dirname( __DIR__, 3 ) . '/wp-load.php';

if ( ! current_user_can( 'manage_options' ) && 'cli' !== php_sapi_name() ) {
	// Allow CLI without auth.
	if ( ! defined( 'WP_CLI' ) ) {
		wp_die( 'Run from CLI only.' );
	}
}

function mdi_setup_log( $msg ) {
	echo $msg . PHP_EOL;
}

switch_theme( 'mdi-consults' );
mdi_setup_log( 'Theme activated: mdi-consults' );

$pages = array(
	'home'               => array( 'Home', '' ),
	'about'              => array( 'About', 'page-about.php' ),
	'services'           => array( 'Services', 'page-services.php' ),
	'work'               => array( 'Work', 'page-work.php' ),
	'gtv'                => array( 'GTV', 'page-gtv.php' ),
	'contact'            => array( 'Contact', 'page-contact.php' ),
	'faq'                => array( 'FAQ', 'page-faq.php' ),
	'insights'           => array( 'Insights', 'page-insights.php' ),
	'thank-you'          => array( 'Thank You', 'page-thank-you.php' ),
	'book-consultation'  => array( 'Book a Consultation', 'page-book.php' ),
	'privacy-policy'     => array( 'Privacy Policy', 'page-privacy.php' ),
	'terms-of-service'   => array( 'Terms & Conditions', 'page-terms.php' ),
	'gtv-disclaimer'     => array( 'GTV Disclaimer', 'page-gtv-disclaimer.php' ),
);

$page_ids = array();

foreach ( $pages as $slug => $data ) {
	list( $title, $template ) = $data;
	$existing = get_page_by_path( $slug );
	if ( $existing ) {
		$page_ids[ $slug ] = $existing->ID;
		mdi_setup_log( "Page exists: {$title} (#{$existing->ID})" );
		continue;
	}

	$id = wp_insert_post(
		array(
			'post_title'   => $title,
			'post_name'    => $slug,
			'post_status'  => 'publish',
			'post_type'    => 'page',
			'post_content' => '',
		)
	);

	if ( $template && ! is_wp_error( $id ) ) {
		update_post_meta( $id, '_wp_page_template', $template );
	}

	$page_ids[ $slug ] = $id;
	mdi_setup_log( "Created page: {$title} (#{$id})" );
}

if ( ! empty( $page_ids['home'] ) ) {
	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $page_ids['home'] );
	update_option( 'page_for_posts', 0 );
	mdi_setup_log( 'Front page set to Home' );
}

// Ensure templates are assigned (including existing pages).
foreach ( $pages as $slug => $data ) {
	list( $title, $template ) = $data;
	if ( $template && ! empty( $page_ids[ $slug ] ) ) {
		update_post_meta( $page_ids[ $slug ], '_wp_page_template', $template );
		mdi_setup_log( "Template set: {$slug} → {$template}" );
	}
}

// Menu.
$menu_name = 'Primary';
$menu      = wp_get_nav_menu_object( $menu_name );
if ( ! $menu ) {
	$menu_id = wp_create_nav_menu( $menu_name );
} else {
	$menu_id = $menu->term_id;
}

$menu_order = array( 'home', 'about', 'services', 'work', 'gtv', 'contact' );
$pos        = 1;
foreach ( $menu_order as $slug ) {
	if ( empty( $page_ids[ $slug ] ) ) {
		continue;
	}
	$exists = false;
	$items  = wp_get_nav_menu_items( $menu_id );
	if ( $items ) {
		foreach ( $items as $item ) {
			if ( (int) $item->object_id === (int) $page_ids[ $slug ] ) {
				$exists = true;
				break;
			}
		}
	}
	if ( ! $exists ) {
		wp_update_nav_menu_item(
			$menu_id,
			0,
			array(
				'menu-item-title'     => $pages[ $slug ][0],
				'menu-item-object'    => 'page',
				'menu-item-object-id' => $page_ids[ $slug ],
				'menu-item-type'      => 'post_type',
				'menu-item-status'    => 'publish',
				'menu-item-position'  => $pos++,
			)
		);
	}
}

$locations           = get_theme_mod( 'nav_menu_locations', array() );
$locations['primary'] = $menu_id;
set_theme_mod( 'nav_menu_locations', $locations );
mdi_setup_log( 'Primary menu assigned' );

// Trash sample page.
$sample = get_page_by_path( 'sample-page' );
if ( $sample ) {
	wp_trash_post( $sample->ID );
	mdi_setup_log( 'Trashed sample page' );
}

// Permalinks.
global $wp_rewrite;
$wp_rewrite->set_permalink_structure( '/%postname%/' );
$wp_rewrite->flush_rules();
mdi_setup_log( 'Permalinks set to post name' );

mdi_setup_log( 'Done. Visit http://localhost/mdic/' );
