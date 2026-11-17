<?php
/**
 * Template Name: Book Consultation
 *
 * @package MDI_Consults
 */

get_header();

$consultation_areas = array(
	array(
		'title' => 'Brand Strategy Consultation',
		'desc'  => 'For founders, creatives, SMEs, and organisations that need clarity around brand identity, positioning, messaging, audience, offers, and growth direction.',
		'questions' => array(
			'What exactly is my brand?',
			'How should I position my business?',
			'Is my messaging clear?',
			'How do I communicate my value better?',
			'Do I need a brand audit or full brand strategy?',
		),
	),
	array(
		'title' => 'Website & Digital Presence Consultation',
		'desc'  => 'For clients who need a new website, website redesign, landing page, digital audit, UI/UX improvement, or clearer online presentation.',
		'questions' => array(
			'Does my website represent my brand properly?',
			'Do I need a redesign?',
			'What pages should my website have?',
			'How can I increase enquiries through my website?',
			'What digital systems do I need?',
		),
	),
	array(
		'title' => 'Social Media & Marketing Consultation',
		'desc'  => 'For brands that need support with visibility, content planning, campaign direction, social media strategy, digital marketing, or online engagement.',
		'questions' => array(
			'Why is my brand not visible online?',
			'What content should I be posting?',
			'How do I reach the right audience?',
			'Do I need a content calendar?',
			'How can I improve engagement and consistency?',
		),
	),
	array(
		'title' => 'PR & Visibility Consultation',
		'desc'  => 'For founders, creatives, professionals, and organisations that need stronger credibility, public positioning, media communication, reputation support, or visibility planning.',
		'questions' => array(
			'How can I build credibility?',
			'How should I tell my story publicly?',
			'Do I need PR support?',
			'How do I improve public perception?',
			'How do I position myself or my brand for media opportunities?',
		),
	),
	array(
		'title' => 'Business Development & Strategy Consultation',
		'desc'  => 'For founders, startups, SMEs, and organisations that need support with growth planning, partnerships, offers, proposals, market positioning, or strategic direction.',
		'questions' => array(
			'How do I grow this idea or business?',
			'What partnerships should I pursue?',
			'How do I structure my offers?',
			'Do I need a proposal or pitch deck?',
			'What is the best growth direction?',
		),
	),
	array(
		'title' => 'MDI Consults GTV Consultation',
		'desc'  => 'For creatives, digital professionals, founders, academics, researchers, and exceptional talents seeking clarity on Global Talent pathway readiness.',
		'questions' => array(
			'Am I ready for a Global Talent pathway?',
			'Which route may fit my profile?',
			'Is my evidence strong enough?',
			'What gaps do I need to address?',
			'How should I structure my portfolio?',
			'Do I need eligibility review, evidence audit, or full advisory support?',
		),
	),
);
?>
<main>
	<section class="page-hero">
		<div class="container reveal">
			<?php mdi_consults_section_meta( '13', 'Book' ); ?>
			<h1>Book a Consultation with MDI Consults</h1>
			<p class="hero-lead" style="margin-top:16px;">Get strategic guidance for your brand, business, website, digital presence, visibility, or global talent profile.</p>
			<p style="margin-top:12px;color:var(--ink-soft);">A consultation with MDI Consults helps you gain clarity on where you are, what you need, and the best next step to take. Whether you are building a new idea, repositioning an existing brand, planning a website, improving digital visibility, or preparing for MDI Consults GTV support, we are here to help you move with structure.</p>
			<a href="#booking-form" class="btn btn-gold" style="margin-top:20px;">Book Your Consultation</a>
		</div>
	</section>

	<section class="section">
		<div class="container about-split reveal">
			<div>
				<h2>Why Book a Consultation?</h2>
				<h3 style="font-size:1.1rem;margin:16px 0 12px;">Clarity Before Commitment</h3>
				<p>You do not always need a full project immediately. Sometimes, the first thing you need is a clear conversation.</p>
				<p>Our consultation sessions are designed to help you:</p>
				<ul style="margin:12px 0;padding-left:20px;color:var(--ink-soft);">
					<li>Understand your current position</li>
					<li>Identify what is unclear or missing</li>
					<li>Clarify your goals</li>
					<li>Explore the best service options</li>
					<li>Understand what support you may need</li>
					<li>Get professional recommendations</li>
					<li>Decide the right next step before committing to a project</li>
				</ul>
			</div>
			<div>
				<p>This is especially useful if you are unsure whether you need brand strategy, website development, marketing support, PR, business development, or GTV advisory.</p>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container">
			<?php mdi_consults_section_meta( '01', 'Areas' ); ?>
			<h2 style="margin-bottom:12px;">Consultation Areas</h2>
			<p class="meta" style="margin-bottom:32px;">Choose the consultation that matches your need</p>
			<div class="services-grid">
				<?php foreach ( $consultation_areas as $i => $area ) : ?>
				<article class="service-card reveal" style="background:#141414;color:#eee;border:none;">
					<div class="num" style="font-size:1.2rem;color:var(--gold);"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></div>
					<h3 style="color:#fff;font-size:1.05rem;"><?php echo esc_html( $area['title'] ); ?></h3>
					<p class="sub" style="color:#aaa;"><?php echo esc_html( $area['desc'] ); ?></p>
					<ul style="margin:12px 0 0;padding-left:18px;font-size:0.9rem;color:#999;">
						<?php foreach ( $area['questions'] as $q ) : ?>
						<li><?php echo esc_html( $q ); ?></li>
						<?php endforeach; ?>
					</ul>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container about-split">
			<div class="reveal">
				<h2>What to Expect During the Consultation</h2>
				<h3 style="font-size:1.1rem;margin:16px 0 12px;">A Focused Strategy Session</h3>
				<p>During the consultation, we will focus on understanding your current situation and helping you identify a practical next step.</p>
				<p>A typical consultation may include:</p>
				<ul style="margin:12px 0;padding-left:20px;color:var(--ink-soft);">
					<li>Review of your current goal or challenge</li>
					<li>Discussion of your brand, business, project, or profile</li>
					<li>Questions to clarify your needs</li>
					<li>Initial strategic recommendations</li>
					<li>Service or package recommendation where relevant</li>
					<li>Guidance on what documents, assets, or next steps may be required</li>
					<li>Honest feedback on readiness, gaps, or areas to improve</li>
				</ul>
				<p>The consultation is not a full project delivery session unless otherwise agreed. It is a clarity and advisory session designed to help you move forward strategically.</p>
			</div>
			<div class="reveal">
				<h2>What to Prepare Before Booking</h2>
				<h3 style="font-size:1.1rem;margin:16px 0 12px;">Help Us Understand Your Needs</h3>
				<p>To get the best from your consultation, please prepare any relevant information before the session.</p>
				<p>Depending on your consultation type, this may include:</p>
				<ul style="margin:12px 0;padding-left:20px;color:var(--ink-soft);">
					<li>Your website link</li>
					<li>Social media pages</li>
					<li>Brand name and short description</li>
					<li>Current business or project goals</li>
					<li>Challenges you are facing</li>
					<li>Examples of work you like</li>
					<li>Existing brand assets</li>
					<li>Campaign or project brief</li>
					<li>CV or portfolio for GTV-related support</li>
					<li>Public profile links</li>
					<li>Evidence documents, where relevant</li>
					<li>Questions you want answered</li>
				</ul>
				<p>Do not worry if you do not have everything. We can still help you clarify what is missing.</p>
			</div>
		</div>
	</section>

	<section class="section" id="booking-form">
		<div class="container reveal" style="max-width:640px;">
			<h2>Book Your Session</h2>
			<p style="color:var(--ink-soft);margin-bottom:24px;">Please complete the booking form with the correct details so we can prepare for your consultation.</p>
			<form class="book-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
				<input type="hidden" name="action" value="mdi_book">
				<?php wp_nonce_field( 'mdi_book', 'mdi_book_nonce' ); ?>
				<p><input type="text" name="name" placeholder="Full Name" required style="width:100%;padding:14px;border:1px solid var(--line);margin-bottom:12px;"></p>
				<p><input type="email" name="email" placeholder="Email Address" required style="width:100%;padding:14px;border:1px solid var(--line);margin-bottom:12px;"></p>
				<p><input type="tel" name="phone" placeholder="Phone / WhatsApp Number" style="width:100%;padding:14px;border:1px solid var(--line);margin-bottom:12px;"></p>
				<p>
					<select name="consultation_type" required style="width:100%;padding:14px;border:1px solid var(--line);margin-bottom:12px;">
						<option value="">Select consultation type</option>
						<?php foreach ( $consultation_areas as $area ) : ?>
						<option value="<?php echo esc_attr( $area['title'] ); ?>"><?php echo esc_html( $area['title'] ); ?></option>
						<?php endforeach; ?>
					</select>
				</p>
				<p><input type="date" name="preferred_date" placeholder="Preferred Date" style="width:100%;padding:14px;border:1px solid var(--line);margin-bottom:12px;"></p>
				<p><input type="text" name="preferred_time" placeholder="Preferred Time" style="width:100%;padding:14px;border:1px solid var(--line);margin-bottom:12px;"></p>
				<p><textarea name="message" rows="5" placeholder="What would you like to discuss? Please briefly explain your current situation, what you need clarity on, and what outcome you would like from the consultation." style="width:100%;padding:14px;border:1px solid var(--line);margin-bottom:12px;"></textarea></p>
				<p class="meta" style="margin-bottom:16px;">By submitting this booking form, you agree that MDI Consults may contact you regarding your consultation and process your information in line with our <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy Policy</a>.</p>
				<button type="submit" class="btn btn-gold">Request Consultation Booking</button>
			</form>
		</div>
	</section>

	<section class="section">
		<div class="container about-split reveal">
			<div>
				<h2>Consultation Fees</h2>
				<p>Consultation fees may vary depending on the consultation type, duration, and level of review required. Some consultations may be offered as standalone advisory sessions, while others may be deducted from a larger project fee if the client proceeds within a stated period.</p>
				<p class="meta">Contact us for current consultation fees.</p>
			</div>
			<div>
				<h2>After the Consultation</h2>
				<p>After your consultation, MDI Consults may recommend a service package, custom proposal, brand audit, website project, digital strategy plan, PR or visibility roadmap, content strategy, business development plan, GTV eligibility review, GTV evidence audit, full advisory engagement, or a preparation roadmap.</p>
				<p>You are not obligated to proceed with a full project after the consultation. The purpose is to help you gain clarity and decide the most suitable next step.</p>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container reveal">
			<h2 style="color:#fff;">Important Note for GTV Consultations</h2>
			<h3 style="font-size:1.1rem;margin:16px 0 12px;color:var(--gold);">Advisory Support Only</h3>
			<p style="color:#aaa;">MDI Consults GTV consultations are designed to help clients understand their profile readiness, evidence position, route suitability, and preparation needs. We do not guarantee visa approval, endorsement approval, or any immigration outcome. We also do not replace regulated immigration or legal advice where such advice is required.</p>
			<p style="color:#aaa;">Our role is to help you prepare, structure, organise, and position your profile as clearly and strategically as possible.</p>
		</div>
	</section>

	<section class="section">
		<div class="container reveal" style="text-align:center;">
			<h2>Ready to Get Clarity?</h2>
			<p style="color:var(--ink-soft);max-width:55ch;margin:16px auto 28px;">A clear conversation can help you avoid confusion, wasted time, and poor direction. Book a consultation with MDI Consults and let us help you understand the best next step for your brand, business, website, visibility, or global talent profile.</p>
			<div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
				<a href="#booking-form" class="btn btn-gold">Book Your Consultation</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Make an Enquiry</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
