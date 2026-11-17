<?php
/**
 * Template Name: Insights
 *
 * @package MDI_Consults
 */

get_header();

$placeholder_articles = array(
	array(
		'title' => 'Brand Strategy Fundamentals',
		'excerpt' => 'How founders and SMEs can define positioning, messaging, and audience clarity before scaling.',
		'category' => 'Brand Strategy',
	),
	array(
		'title' => 'Digital Presence That Converts',
		'excerpt' => 'Practical guidance on websites, UX, and enquiry journeys that turn visitors into leads.',
		'category' => 'Digital',
	),
	array(
		'title' => 'GTV Readiness: Where to Start',
		'excerpt' => 'An introduction to profile positioning, evidence mapping, and preparation for global talent pathways.',
		'category' => 'GTV Advisory',
	),
);
?>
<main>
	<section class="page-hero">
		<div class="container reveal">
			<?php mdi_consults_section_meta( '09', 'Insights' ); ?>
			<h1><?php the_title(); ?></h1>
			<p class="hero-lead" style="margin-top:16px;">Strategy notes, brand insights, digital growth tips, and MDI Consults GTV guidance.</p>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<?php
			$paged = max( 1, get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' ) );
			$query = new WP_Query(
				array(
					'post_type'      => 'post',
					'post_status'    => 'publish',
					'posts_per_page' => 9,
					'paged'          => $paged,
				)
			);

			if ( $query->have_posts() ) :
				?>
			<div class="services-grid">
				<?php
				while ( $query->have_posts() ) :
					$query->the_post();
					$cats = get_the_category();
					$cat  = $cats ? $cats[0]->name : 'Insights';
					?>
				<article <?php post_class( 'service-card reveal' ); ?>>
					<p class="meta"><?php echo esc_html( $cat ); ?></p>
					<h3 style="font-size:1.1rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="sub"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn btn-outline" style="margin-top:12px;">Read article</a>
				</article>
					<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
				<?php
				if ( $query->max_num_pages > 1 ) :
					echo '<div class="reveal" style="margin-top:40px;">';
					echo paginate_links(
						array(
							'total'   => $query->max_num_pages,
							'current' => $paged,
						)
					);
					echo '</div>';
				endif;
			else :
				?>
			<div class="services-grid">
				<?php foreach ( $placeholder_articles as $i => $article ) : ?>
				<article class="service-card reveal">
					<div class="num" style="font-size:1rem;color:var(--gold);"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></div>
					<p class="meta"><?php echo esc_html( $article['category'] ); ?> · Coming soon</p>
					<h3 style="font-size:1.1rem;"><?php echo esc_html( $article['title'] ); ?></h3>
					<p class="sub"><?php echo esc_html( $article['excerpt'] ); ?></p>
				</article>
				<?php endforeach; ?>
			</div>
			<p class="reveal meta" style="margin-top:32px;text-align:center;">Articles are on the way. Subscribe for updates or <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">contact us</a> to discuss your project.</p>
			<?php endif; ?>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container reveal" style="text-align:center;">
			<h2 style="color:#fff;">Ready to build with clarity?</h2>
			<p style="color:#aaa;max-width:50ch;margin:16px auto 28px;">Your next step starts with a conversation. Book a consultation or submit an enquiry.</p>
			<div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
				<a href="<?php echo esc_url( home_url( '/book/' ) ); ?>" class="btn btn-gold">Book a Consultation</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Contact Us</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
