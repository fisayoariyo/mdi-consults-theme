<?php
/**
 * Default page template.
 *
 * @package MDI_Consults
 */

get_header();
?>
<main>
	<section class="page-hero">
		<div class="container reveal">
			<?php mdi_consults_section_meta( '00', get_the_title() ); ?>
			<h1><?php the_title(); ?></h1>
		</div>
	</section>
	<section class="section">
		<div class="container reveal" style="max-width:760px;">
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
			?>
		</div>
	</section>
</main>
<?php
get_footer();
