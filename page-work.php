<?php
/**
 * Template Name: Work Page
 *
 * @package MDI_Consults
 */

get_header();

$projects = mdi_consults_query_items( 'mdi_project' );

$industries = array(
	'Digital business',
	'Entertainment',
	'Beauty and lifestyle',
	'Education',
	'Nonprofit and social impact',
	'Creative industries',
	'Professional services',
	'Personal brands',
	'Global talent advisory',
	'Brand and digital consulting',
);

$process = array(
	array( 'Discovery', 'We listen to the client’s story, goals, challenges, and expectations.' ),
	array( 'Diagnosis', 'We identify what is unclear, missing, weak, or underdeveloped.' ),
	array( 'Strategy', 'We create a tailored direction based on the client’s needs and market reality.' ),
	array( 'Execution', 'We deliver the required digital, brand, content, advisory, or documentation support.' ),
	array( 'Review', 'We assess the outcome and recommend next steps where needed.' ),
);
?>
<main>
	<section class="page-hero">
		<div class="container reveal">
			<?php mdi_consults_section_meta( '04', 'Work' ); ?>
			<h1><?php the_title(); ?></h1>
			<p class="hero-lead" style="margin-top:16px;">Strategy, Digital and Brand Solutions in Action</p>
			<p style="margin-top:12px;color:var(--ink-soft);max-width:70ch;">At MDI Consults, our work reflects our core belief: every idea needs structure, clarity, visibility, and the right strategy to grow.</p>
			<p style="margin-top:12px;color:var(--ink-soft);max-width:70ch;">Over the years, we have supported brands, founders, creatives, organisations, and initiatives across digital development, brand strategy, visibility, documentation, creative direction, business advisory, and global talent positioning.</p>
			<p style="margin-top:12px;color:var(--ink-soft);max-width:70ch;">Our projects show how we help clients move from ideas to execution, from unclear positioning to stronger identity, and from scattered needs to structured solutions.</p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-gold" style="margin-top:20px;">Start Your Project With Us</a>
		</div>
	</section>

	<section class="section">
		<div class="container about-split reveal">
			<div>
				<p class="meta"><span>Intro</span></p>
				<h2>Selected Work Across Brand, Digital, Strategy and Global Talent Advisory</h2>
				<p>MDI Consults has worked across different industries and client categories, including entertainment, education, beauty, nonprofit, digital business, creative development, and professional advisory.</p>
			</div>
			<div>
				<p>Our role varies depending on the client’s need. For some clients, we provide brand and digital strategy. For others, we support website development, campaign planning, business documentation, visibility, digital audits, content direction, or global talent readiness.</p>
				<p>Each project is approached with the same standard: understand the client’s goal, ask the right questions, simplify the challenge, and deliver a tailored solution.</p>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Projects</span></p>
					<h2 style="color:#fff;">Recent and Selected Projects</h2>
				</div>
			</div>
			<div class="work-list" style="margin-top:24px;">
				<?php
				foreach ( $projects as $i => $p ) :
					$slug     = $p->post_name;
					$img      = mdi_consults_project_image_url( $p );
					$subtitle = get_post_meta( $p->ID, 'mdi_subtitle', true );
					$result   = get_post_meta( $p->ID, 'mdi_result', true );
					if ( ! $result ) {
						$result = get_post_meta( $p->ID, 'mdi_impact', true );
					}
					?>
				<article class="work-item reveal"<?php echo $img ? ' data-img="' . esc_url( $img ) . '"' : ''; ?>>
					<span class="num">(<?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?>)</span>
					<div>
						<h3><a href="#project-<?php echo esc_attr( $slug ); ?>" style="color:inherit;text-decoration:none;"><?php echo esc_html( get_the_title( $p ) ); ?></a></h3>
						<?php if ( $subtitle ) : ?>
						<p style="color:var(--muted);margin:8px 0 0;font-family:var(--mono);font-size:11px;text-transform:uppercase;"><?php echo esc_html( $subtitle ); ?></p>
						<?php endif; ?>
						<?php if ( $result ) : ?>
						<p class="tag" style="margin-top:8px;"><?php echo esc_html( wp_strip_all_tags( $result ) ); ?></p>
						<?php endif; ?>
						<a class="text-link" href="#project-<?php echo esc_attr( $slug ); ?>" style="margin-top:12px;display:inline-block;">View project ↗</a>
					</div>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<?php foreach ( $projects as $p ) :
				$slug       = $p->post_name;
				$type       = get_post_meta( $p->ID, 'mdi_project_type', true );
				$overview   = get_post_meta( $p->ID, 'mdi_overview', true );
				$role       = get_post_meta( $p->ID, 'mdi_role', true );
				$solutions  = get_post_meta( $p->ID, 'mdi_solutions', true );
				$result     = get_post_meta( $p->ID, 'mdi_result', true );
				$impact     = get_post_meta( $p->ID, 'mdi_impact', true );
				$subtitle   = get_post_meta( $p->ID, 'mdi_subtitle', true );
				$has_rich   = $type || $overview || $role || $solutions || $impact;
				$sol_lines  = $solutions ? array_filter( array_map( 'trim', explode( "\n", $solutions ) ) ) : array();
				?>
			<article id="project-<?php echo esc_attr( $slug ); ?>" class="reveal" style="margin-bottom:64px;padding-top:32px;border-top:1px solid var(--line);">
				<p class="meta"><span>Project</span></p>
				<h2><?php echo esc_html( get_the_title( $p ) ); ?></h2>
				<?php if ( $subtitle ) : ?>
				<h3 style="font-size:1.15rem;margin:12px 0 16px;color:var(--gold);"><?php echo esc_html( $subtitle ); ?></h3>
				<?php endif; ?>

				<?php if ( $has_rich ) : ?>
					<?php if ( $type ) : ?>
					<h4 style="font-size:0.85rem;text-transform:uppercase;letter-spacing:0.06em;margin:24px 0 8px;">Project Type</h4>
					<p style="color:var(--ink-soft);"><?php echo esc_html( $type ); ?></p>
					<?php endif; ?>

					<?php if ( $overview ) : ?>
					<h4 style="font-size:0.85rem;text-transform:uppercase;letter-spacing:0.06em;margin:24px 0 8px;">Overview</h4>
					<?php echo wp_kses_post( wpautop( $overview ) ); ?>
					<?php elseif ( $p->post_content ) : ?>
					<h4 style="font-size:0.85rem;text-transform:uppercase;letter-spacing:0.06em;margin:24px 0 8px;">Overview</h4>
					<?php echo wp_kses_post( wpautop( $p->post_content ) ); ?>
					<?php endif; ?>

					<?php if ( $role ) : ?>
					<h4 style="font-size:0.85rem;text-transform:uppercase;letter-spacing:0.06em;margin:24px 0 8px;">MDI’s Role</h4>
					<?php echo wp_kses_post( wpautop( $role ) ); ?>
					<?php endif; ?>

					<?php if ( $sol_lines ) : ?>
					<h4 style="font-size:0.85rem;text-transform:uppercase;letter-spacing:0.06em;margin:24px 0 8px;">Solutions Delivered</h4>
					<ul style="margin:0;padding-left:18px;color:var(--ink-soft);">
						<?php foreach ( $sol_lines as $line ) : ?>
						<li><?php echo esc_html( $line ); ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>

					<?php if ( $result || $impact ) : ?>
					<h4 style="font-size:0.85rem;text-transform:uppercase;letter-spacing:0.06em;margin:24px 0 8px;">Impact</h4>
					<?php echo wp_kses_post( wpautop( $result ? $result : $impact ) ); ?>
					<?php endif; ?>
				<?php else : ?>
					<?php if ( $subtitle ) : ?>
					<p style="color:var(--ink-soft);margin:12px 0;"><?php echo esc_html( $subtitle ); ?></p>
					<?php endif; ?>
					<?php if ( $p->post_content ) : ?>
					<div style="color:var(--ink-soft);"><?php echo wp_kses_post( wpautop( $p->post_content ) ); ?></div>
					<?php endif; ?>
					<?php if ( $result ) : ?>
					<h4 style="font-size:0.85rem;text-transform:uppercase;letter-spacing:0.06em;margin:24px 0 8px;">Result</h4>
					<p style="color:var(--ink-soft);"><?php echo esc_html( wp_strip_all_tags( $result ) ); ?></p>
					<?php endif; ?>
				<?php endif; ?>
			</article>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Approach</span></p>
					<h2 style="color:#fff;">How We Approach Every Project</h2>
					<p class="section-lead" style="color:#aaa;">Strategy Before Execution</p>
				</div>
			</div>
			<p class="reveal" style="color:#aaa;margin-bottom:24px;">Every project begins with clarity. Before we recommend a solution, we seek to understand the client’s goals, audience, current challenges, and desired outcome. Our project approach includes:</p>
			<div class="process-grid">
				<?php foreach ( $process as $i => $step ) : ?>
				<article class="process-step reveal">
					<span class="num"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span>
					<h3><?php echo esc_html( $step[0] ); ?></h3>
					<p><?php echo esc_html( $step[1] ); ?></p>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>Industries</span></p>
					<h2>Industries We Have Worked Across</h2>
					<p class="section-lead">Cross-Sector Experience</p>
				</div>
			</div>
			<p class="reveal" style="color:var(--ink-soft);margin-bottom:20px;">MDI Consults has supported projects across:</p>
			<ul class="check-list reveal">
				<?php foreach ( $industries as $industry ) : ?>
				<li><?php echo esc_html( $industry ); ?></li>
				<?php endforeach; ?>
			</ul>
			<p class="reveal" style="margin-top:20px;color:var(--ink-soft);">This cross-sector experience allows us to bring flexible thinking, research-driven strategy, and practical execution to every project.</p>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container reveal" style="text-align:center;">
			<h2 style="color:#fff;">Let’s Turn Your Idea Into a Structured Solution</h2>
			<p style="color:#aaa;max-width:55ch;margin:16px auto 28px;">Your idea deserves clarity, strategy, and execution. MDI Consults helps brands, founders, creatives, professionals, and organisations build stronger solutions for today’s digital and global world.</p>
			<div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-gold">Start a Project</a>
				<a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>" class="btn btn-outline">Book a Consultation</a>
			</div>
			<p style="margin-top:32px;color:#888;">You do not need to have everything figured out before speaking with us. Bring the idea, challenge, or goal. We will help you clarify the path.</p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline" style="margin-top:20px;">Make an Enquiry</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>
