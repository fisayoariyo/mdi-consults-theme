<?php
/**
 * Form handlers — contact, booking, newsletter.
 *
 * @package MDI_Consults
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Primary notification email from Customizer.
 *
 * @return string
 */
function mdi_consults_form_email() {
	return sanitize_email( mdi_mod( 'mdi_email', 'Contact@mdiconsults.com' ) );
}

/**
 * Verify form nonce or redirect home.
 *
 * @param string $action Nonce action name.
 * @param string $field  POST field name.
 */
function mdi_consults_verify_nonce( $action, $field ) {
	if ( ! isset( $_POST[ $field ] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST[ $field ] ) ), $action ) ) {
		wp_safe_redirect( home_url( '/' ) );
		exit;
	}
}

/**
 * Handle contact form submission.
 */
function mdi_consults_handle_contact() {
	mdi_consults_verify_nonce( 'mdi_contact', 'mdi_contact_nonce' );

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$country = isset( $_POST['country'] ) ? sanitize_text_field( wp_unslash( $_POST['country'] ) ) : '';
	$company = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
	$website = isset( $_POST['website'] ) ? esc_url_raw( wp_unslash( $_POST['website'] ) ) : '';
	$service = isset( $_POST['service'] ) ? sanitize_text_field( wp_unslash( $_POST['service'] ) ) : '';
	$stage   = isset( $_POST['project_stage'] ) ? sanitize_text_field( wp_unslash( $_POST['project_stage'] ) ) : '';
	$budget  = isset( $_POST['budget'] ) ? sanitize_text_field( wp_unslash( $_POST['budget'] ) ) : '';
	$timeline = isset( $_POST['timeline'] ) ? sanitize_text_field( wp_unslash( $_POST['timeline'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';
	$consent = ! empty( $_POST['consent'] );

	if ( ! $name || ! is_email( $email ) || ! $message || ! $consent ) {
		wp_safe_redirect( home_url( '/contact/?error=1' ) );
		exit;
	}

	$body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nCountry: {$country}\nCompany: {$company}\nWebsite: {$website}\nService: {$service}\nProject stage: {$stage}\nBudget: {$budget}\nTimeline: {$timeline}\n\nMessage:\n{$message}";

	$attachments = array();
	if ( ! empty( $_FILES['file']['tmp_name'] ) && empty( $_FILES['file']['error'] ) ) {
		$upload = wp_handle_upload(
			$_FILES['file'],
			array(
				'test_form' => false,
				'mimes'     => array(
					'pdf'  => 'application/pdf',
					'doc'  => 'application/msword',
					'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
					'jpg'  => 'image/jpeg',
					'jpeg' => 'image/jpeg',
					'png'  => 'image/png',
				),
			)
		);
		if ( empty( $upload['error'] ) && ! empty( $upload['file'] ) ) {
			$attachments[] = $upload['file'];
			$body         .= "\n\nAttachment: " . basename( $upload['file'] );
		}
	}

	$to      = mdi_consults_form_email();
	$subject = sprintf( '[MDI Consults] Enquiry from %s', $name );
	$headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>' );

	wp_mail( $to, $subject, $body, $headers, $attachments );

	wp_safe_redirect( home_url( '/thank-you/' ) );
	exit;
}
add_action( 'admin_post_nopriv_mdi_contact', 'mdi_consults_handle_contact' );
add_action( 'admin_post_mdi_contact', 'mdi_consults_handle_contact' );

/**
 * Handle consultation booking form submission.
 */
function mdi_consults_handle_book() {
	mdi_consults_verify_nonce( 'mdi_book', 'mdi_book_nonce' );

	$name              = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email             = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$phone             = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$consultation_type = isset( $_POST['consultation_type'] ) ? sanitize_text_field( wp_unslash( $_POST['consultation_type'] ) ) : '';
	$preferred_date    = isset( $_POST['preferred_date'] ) ? sanitize_text_field( wp_unslash( $_POST['preferred_date'] ) ) : '';
	$preferred_time    = isset( $_POST['preferred_time'] ) ? sanitize_text_field( wp_unslash( $_POST['preferred_time'] ) ) : '';
	$message           = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	$allowed_types = array(
		'Brand Strategy Consultation',
		'Website & Digital Presence Consultation',
		'Social Media & Marketing Consultation',
		'PR & Visibility Consultation',
		'Business Development & Strategy Consultation',
		'MDI Consults GTV Consultation',
	);

	if ( ! $name || ! is_email( $email ) || ! in_array( $consultation_type, $allowed_types, true ) ) {
		wp_safe_redirect( home_url( '/book-consultation/?error=1' ) );
		exit;
	}

	$to      = mdi_consults_form_email();
	$subject = sprintf( '[MDI Consults] Consultation booking — %s', $consultation_type );
	$body    = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nConsultation type: {$consultation_type}\nPreferred date: {$preferred_date}\nPreferred time: {$preferred_time}\n\nMessage:\n{$message}";
	$headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>' );

	wp_mail( $to, $subject, $body, $headers );

	wp_safe_redirect( home_url( '/thank-you/' ) );
	exit;
}
add_action( 'admin_post_nopriv_mdi_book', 'mdi_consults_handle_book' );
add_action( 'admin_post_mdi_book', 'mdi_consults_handle_book' );

/**
 * Handle newsletter subscription form submission.
 */
function mdi_consults_handle_newsletter() {
	mdi_consults_verify_nonce( 'mdi_newsletter', 'mdi_newsletter_nonce' );

	$email = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';

	if ( ! is_email( $email ) ) {
		wp_safe_redirect( home_url( '/' ) );
		exit;
	}

	$to       = array( mdi_consults_form_email(), 'mdiconsultsltd@gmail.com' );
	$subject  = '[MDI Consults] Newsletter subscription';
	$body     = "New newsletter subscription:\n\nEmail: {$email}";
	$headers  = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $email );

	wp_mail( $to, $subject, $body, $headers );

	wp_safe_redirect( home_url( '/?newsletter=1' ) );
	exit;
}
add_action( 'admin_post_nopriv_mdi_newsletter', 'mdi_consults_handle_newsletter' );
add_action( 'admin_post_mdi_newsletter', 'mdi_consults_handle_newsletter' );
