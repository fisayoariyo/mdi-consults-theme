<?php
/**
 * Index fallback.
 *
 * @package MDI_Consults
 */

get_header();
?>
<main class="section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'reveal' ); ?>>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<p>No posts found.</p>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();
