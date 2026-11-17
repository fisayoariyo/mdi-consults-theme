<?php
/**
 * Custom post types — Work, Services, Team, FAQ, GTV Packages.
 *
 * @package MDI_Consults
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mdi_consults_register_post_types() {
	$types = array(
		'mdi_project' => array(
			'label'   => 'Work / Projects',
			'singular'=> 'Project',
			'menu'    => 'dashicons-portfolio',
			'supports'=> array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		),
		'mdi_service' => array(
			'label'   => 'Services',
			'singular'=> 'Service',
			'menu'    => 'dashicons-hammer',
			'supports'=> array( 'title', 'editor', 'page-attributes' ),
		),
		'mdi_team' => array(
			'label'   => 'Team',
			'singular'=> 'Team Member',
			'menu'    => 'dashicons-groups',
			'supports'=> array( 'title', 'thumbnail', 'page-attributes' ),
		),
		'mdi_faq' => array(
			'label'   => 'FAQs',
			'singular'=> 'FAQ',
			'menu'    => 'dashicons-editor-help',
			'supports'=> array( 'title', 'editor', 'page-attributes' ),
		),
		'mdi_gtv' => array(
			'label'   => 'GTV Packages',
			'singular'=> 'GTV Package',
			'menu'    => 'dashicons-airplane',
			'supports'=> array( 'title', 'editor', 'page-attributes' ),
		),
	);

	foreach ( $types as $slug => $cfg ) {
		register_post_type(
			$slug,
			array(
				'labels' => array(
					'name'          => $cfg['label'],
					'singular_name' => $cfg['singular'],
					'add_new_item'  => 'Add New ' . $cfg['singular'],
					'edit_item'     => 'Edit ' . $cfg['singular'],
				),
				'public'       => false,
				'show_ui'      => true,
				'show_in_menu' => true,
				'menu_icon'    => $cfg['menu'],
				'menu_position'=> 25,
				'supports'     => $cfg['supports'],
				'has_archive'  => false,
			)
		);
	}
}
add_action( 'init', 'mdi_consults_register_post_types' );

function mdi_consults_meta_boxes() {
	add_meta_box( 'mdi_project_meta', 'Project Details', 'mdi_consults_project_meta_cb', 'mdi_project', 'normal', 'high' );
	add_meta_box( 'mdi_service_meta', 'Service Details', 'mdi_consults_service_meta_cb', 'mdi_service', 'normal', 'high' );
	add_meta_box( 'mdi_team_meta', 'Role', 'mdi_consults_team_meta_cb', 'mdi_team', 'normal', 'high' );
	add_meta_box( 'mdi_gtv_meta', 'Package Details', 'mdi_consults_gtv_meta_cb', 'mdi_gtv', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'mdi_consults_meta_boxes' );

function mdi_consults_field( $name, $label, $value, $type = 'text', $hint = '' ) {
	echo '<p><label><strong>' . esc_html( $label ) . '</strong><br>';
	if ( 'textarea' === $type ) {
		echo '<textarea name="' . esc_attr( $name ) . '" rows="4" style="width:100%;">' . esc_textarea( $value ) . '</textarea>';
	} elseif ( 'checkbox' === $type ) {
		echo '<input type="checkbox" name="' . esc_attr( $name ) . '" value="1" ' . checked( $value, '1', false ) . '> ' . esc_html( $hint );
	} else {
		echo '<input type="' . esc_attr( $type ) . '" name="' . esc_attr( $name ) . '" value="' . esc_attr( $value ) . '" style="width:100%;">';
	}
	if ( $hint && 'checkbox' !== $type ) {
		echo '<br><span style="color:#666;font-size:12px;">' . esc_html( $hint ) . '</span>';
	}
	echo '</label></p>';
}

function mdi_consults_project_meta_cb( $post ) {
	wp_nonce_field( 'mdi_save_meta', 'mdi_meta_nonce' );
	mdi_consults_field( 'mdi_subtitle', 'Category / subtitle', get_post_meta( $post->ID, 'mdi_subtitle', true ), 'text', 'e.g. Brand Identity & Strategy' );
	mdi_consults_field( 'mdi_project_type', 'Project type', get_post_meta( $post->ID, 'mdi_project_type', true ), 'textarea' );
	mdi_consults_field( 'mdi_overview', 'Overview', get_post_meta( $post->ID, 'mdi_overview', true ), 'textarea' );
	mdi_consults_field( 'mdi_role', 'Our role', get_post_meta( $post->ID, 'mdi_role', true ), 'textarea' );
	mdi_consults_field( 'mdi_solutions', 'Solutions delivered (one per line)', get_post_meta( $post->ID, 'mdi_solutions', true ), 'textarea' );
	mdi_consults_field( 'mdi_result', 'Outcomes / impact', get_post_meta( $post->ID, 'mdi_result', true ), 'textarea' );
	mdi_consults_field( 'mdi_year', 'Year', get_post_meta( $post->ID, 'mdi_year', true ) ?: gmdate( 'Y' ) );
	mdi_consults_field( 'mdi_show_home', 'Show on homepage', get_post_meta( $post->ID, 'mdi_show_home', true ), 'checkbox', 'Feature this project on the homepage list' );
}

function mdi_consults_service_meta_cb( $post ) {
	wp_nonce_field( 'mdi_save_meta', 'mdi_meta_nonce' );
	mdi_consults_field( 'mdi_subtitle', 'Short tagline', get_post_meta( $post->ID, 'mdi_subtitle', true ) );
	mdi_consults_field( 'mdi_show_home', 'Show on homepage', get_post_meta( $post->ID, 'mdi_show_home', true ), 'checkbox', 'Feature on homepage services grid' );
}

function mdi_consults_team_meta_cb( $post ) {
	wp_nonce_field( 'mdi_save_meta', 'mdi_meta_nonce' );
	mdi_consults_field( 'mdi_role', 'Job title / role', get_post_meta( $post->ID, 'mdi_role', true ) );
}

function mdi_consults_gtv_meta_cb( $post ) {
	wp_nonce_field( 'mdi_save_meta', 'mdi_meta_nonce' );
	mdi_consults_field( 'mdi_tier_label', 'Tier label', get_post_meta( $post->ID, 'mdi_tier_label', true ), 'text', 'e.g. Tier 1 · Eligibility' );
	mdi_consults_field( 'mdi_price', 'Price GBP', get_post_meta( $post->ID, 'mdi_price', true ), 'text', 'e.g. £250' );
	mdi_consults_field( 'mdi_price_ngn', 'Price NGN', get_post_meta( $post->ID, 'mdi_price_ngn', true ), 'text', 'e.g. ₦550,000' );
	mdi_consults_field( 'mdi_features', 'Features (one per line)', get_post_meta( $post->ID, 'mdi_features', true ), 'textarea' );
	mdi_consults_field( 'mdi_featured', 'Featured (highlight card)', get_post_meta( $post->ID, 'mdi_featured', true ), 'checkbox', 'Highlight this package' );
	mdi_consults_field( 'mdi_show_home', 'Show on homepage', get_post_meta( $post->ID, 'mdi_show_home', true ), 'checkbox', 'Show on homepage pricing' );
}

function mdi_consults_save_meta( $post_id ) {
	if ( ! isset( $_POST['mdi_meta_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['mdi_meta_nonce'] ) ), 'mdi_save_meta' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	$keys = array( 'mdi_subtitle', 'mdi_result', 'mdi_year', 'mdi_role', 'mdi_tier_label', 'mdi_price', 'mdi_price_ngn', 'mdi_features', 'mdi_project_type', 'mdi_overview', 'mdi_solutions' );
	foreach ( $keys as $key ) {
		if ( isset( $_POST[ $key ] ) ) {
			update_post_meta( $post_id, $key, sanitize_textarea_field( wp_unslash( $_POST[ $key ] ) ) );
		}
	}
	foreach ( array( 'mdi_show_home', 'mdi_featured' ) as $cb ) {
		update_post_meta( $post_id, $cb, isset( $_POST[ $cb ] ) ? '1' : '' );
	}
}
add_action( 'save_post', 'mdi_consults_save_meta' );

/**
 * Query helper for CPTs ordered by menu_order.
 *
 * @param string $type Post type.
 * @param int    $limit Max posts (-1 = all).
 * @param bool   $home_only Only items marked show on home.
 * @return WP_Post[]
 */
function mdi_consults_query_items( $type, $limit = -1, $home_only = false ) {
	$args = array(
		'post_type'      => $type,
		'posts_per_page' => $limit,
		'post_status'    => 'publish',
		'orderby'        => array( 'menu_order' => 'ASC', 'date' => 'DESC' ),
	);
	if ( $home_only ) {
		$args['meta_query'] = array(
			array(
				'key'   => 'mdi_show_home',
				'value' => '1',
			),
		);
	}
	return get_posts( $args );
}
