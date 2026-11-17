<?php
/**
 * Template Name: Thank You Page
 *
 * @package MDI_Consults
 */

get_header();
?>
<main>
	<section class="page-hero">
		<div class="container reveal">
			<?php mdi_consults_section_meta( '12', 'Thank You' ); ?>
			<h1>Thank You for Contacting MDI Consults</h1>
			<p class="hero-lead" style="margin-top:16px;">Your enquiry has been received. Thank you for reaching out — we appreciate your interest in working with us and taking the first step towards building with more clarity, structure, and confidence.</p>
			<p style="margin-top:12px;color:var(--ink-soft);">Our team will review your enquiry and respond with the most suitable next step based on the information you submitted.</p>
		</div>
	</section>

	<section class="section">
		<div class="container about-split">
			<div class="reveal">
				<h2>What Happens Next?</h2>
				<h3 style="font-size:1.1rem;margin:16px 0 12px;">We Will Review Your Enquiry</h3>
				<p>Once your enquiry is received, we will review the details you provided, including your service interest, project stage, goals, timeline, and any supporting information submitted.</p>
				<p>Depending on your enquiry, we may recommend:</p>
				<ul style="margin:12px 0;padding-left:20px;color:var(--ink-soft);">
					<li>A consultation</li>
					<li>A discovery call</li>
					<li>A service package</li>
					<li>A project quote</li>
					<li>A custom proposal</li>
					<li>A brand or digital audit</li>
					<li>A GTV eligibility review</li>
					<li>A documentation or evidence audit</li>
					<li>A longer advisory or project plan</li>
				</ul>
				<p>Our goal is to help you identify the best next step, even if you are not yet fully sure what service you need.</p>
			</div>
			<div class="reveal">
				<h2>If Your Enquiry Is About MDI Consults GTV</h2>
				<h3 style="font-size:1.1rem;margin:16px 0 12px;">Your GTV Request Will Be Reviewed Carefully</h3>
				<p>If you contacted us about MDI Consults GTV, we will review the details you submitted about your background, route of interest, achievements, evidence, and current level of readiness.</p>
				<p>We may recommend one of the following:</p>
				<ul style="margin:12px 0;padding-left:20px;color:var(--ink-soft);">
					<li>GTV eligibility review</li>
					<li>Evidence audit</li>
					<li>Profile positioning support</li>
					<li>Documentation strategy</li>
					<li>Portfolio review</li>
					<li>Recommendation letter guidance</li>
					<li>Full GTV advisory support</li>
					<li>GTV preparation roadmap if you are not yet ready</li>
				</ul>
				<p class="meta" style="margin-top:16px;">Please note that MDI Consults GTV provides advisory, profile positioning, documentation support, evidence organisation, and application-readiness guidance. We do not guarantee visa approval or replace regulated immigration/legal advice.</p>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container">
			<div class="about-split">
				<div class="reveal">
					<h2 style="color:#fff;">Want to Speak With Us Directly?</h2>
					<h3 style="font-size:1.1rem;margin:16px 0 12px;color:var(--gold);">Book a Consultation</h3>
					<p style="color:#aaa;">If your enquiry is urgent or you would prefer to discuss your needs directly, you can book a consultation with MDI Consults.</p>
					<p style="color:#aaa;">A consultation is useful if you need help with brand clarity, website or digital project direction, business growth strategy, social media or marketing direction, PR and visibility planning, content and SEO strategy, GTV eligibility or evidence review, or choosing the right service.</p>
					<a href="<?php echo esc_url( home_url( '/book/' ) ); ?>" class="btn btn-gold" style="margin-top:16px;">Book a Consultation</a>
				</div>
				<div class="reveal">
					<h2 style="color:#fff;">While You Wait</h2>
					<h3 style="font-size:1.1rem;margin:16px 0 12px;color:var(--gold);">Explore MDI Consults</h3>
					<p style="color:#aaa;">You can continue exploring our website to learn more about who we are, what we do, and how we support clients across brand, digital, business, and global talent solutions.</p>
					<ul style="margin:12px 0;padding-left:20px;color:#aaa;">
						<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" style="color:var(--gold);">About MDI Consults</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" style="color:var(--gold);">Our Services</a></li>
						<li><a href="<?php echo esc_url( home_url( '/gtv/' ) ); ?>" style="color:var(--gold);">MDI Consults GTV</a></li>
						<li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" style="color:var(--gold);">Work / Projects</a></li>
						<li><a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>" style="color:var(--gold);">Insights / Blog</a></li>
						<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" style="color:var(--gold);">Frequently Asked Questions</a></li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline" style="margin-top:16px;">Explore Our Services</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container reveal" style="text-align:center;max-width:640px;">
			<h2>Your Vision Deserves Structure</h2>
			<p style="color:var(--ink-soft);margin:16px 0 28px;">At MDI Consults, we believe every great idea deserves clarity, strategy, and the right support system. Thank you for trusting us with your enquiry. We look forward to learning more about your goals and helping you identify the right path forward.</p>
			<div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-gold">Return to Home</a>
				<a href="<?php echo esc_url( home_url( '/book/' ) ); ?>" class="btn btn-outline">Book a Consultation</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
