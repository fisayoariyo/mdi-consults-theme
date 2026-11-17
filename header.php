<?php
/**
 * Header template.
 *
 * @package MDI_Consults
 */

$chip_id  = absint( mdi_mod( 'mdi_chip_image', 0 ) );
$logo_url = $chip_id ? wp_get_attachment_image_url( $chip_id, 'thumbnail' ) : get_template_directory_uri() . '/assets/images/mdi-logo.png';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header" id="site-header">
	<div class="header-bar">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
			<span class="brand-text"><?php echo esc_html( mdi_mod( 'mdi_brand_text', 'MDIC®' ) ); ?></span>
		</a>

		<?php mdi_consults_header_nav(); ?>

		<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="header-chip">
			<img src="<?php echo esc_url( $logo_url ); ?>" alt="" class="header-chip__avatar" width="44" height="44">
			<span class="header-chip__body">
				<strong class="header-chip__title"><?php echo esc_html( mdi_mod( 'mdi_chip_title', 'Meet MDI' ) ); ?></strong>
				<span class="header-chip__name"><?php echo esc_html( mdi_mod( 'mdi_chip_name', 'MDI Consults' ) ); ?></span>
				<span class="header-chip__role"><?php echo esc_html( mdi_mod( 'mdi_chip_role', 'Strategic Advisory' ) ); ?></span>
			</span>
			<span class="header-chip__mark" aria-hidden="true"></span>
		</a>

		<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="Open menu">Menu</button>
	</div>
</header>
