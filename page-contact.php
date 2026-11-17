<?php
/**
 * Template Name: Contact Page
 *
 * @package MDI_Consults
 */

get_header();

$c = mdi_consults_contact();

$service_options = array(
	'Brand Strategy & Identity Development',
	'Website Development & UI/UX Design',
	'Social Media Management & Marketing',
	'PR & Online Reputation Management',
	'Content Marketing & SEO',
	'Strategic Planning & Business Development',
	'Research, Data Analytics & Strategy Optimisation',
	'MDI Consults GTV',
	'General Consultation',
	'Not Sure Yet',
);

$stage_options = array(
	'I have an idea but need clarity',
	'I am starting a new brand or business',
	'I already have a brand but need improvement',
	'I need a website or website redesign',
	'I need digital visibility or marketing support',
	'I need business strategy or growth support',
	'I need GTV eligibility or profile review',
	'I need documentation or advisory support',
	'I am not sure yet',
);

$budget_options = array(
	'Under £250 / ₦500,000',
	'£250–£500 / ₦500,000–₦1,000,000',
	'£500–£1,500 / ₦1,000,000–₦3,000,000',
	'£1,500–£5,000 / ₦3,000,000–₦10,000,000',
	'Above £5,000 / Above ₦10,000,000',
	'I need guidance on pricing',
);

$timeline_options = array(
	'Immediately',
	'Within 1–2 weeks',
	'Within 1 month',
	'Within 3 months',
	'I am planning ahead',
	'Not sure yet',
);

$contact_faq = array(
	'Do I need to know exactly what service I need before contacting MDI Consults?' => 'No. You can contact us even if you are unsure. We will review your enquiry and help you identify the most suitable next step.',
	'Can MDI Consults work with clients outside the UK or Nigeria?' => 'Yes. MDI Consults is building as a global consulting brand and works with clients across nations through digital communication, virtual consultations, and remote project delivery.',
	'Can I book a consultation before choosing a package?' => 'Yes. A consultation is often the best first step if you need clarity before choosing a service.',
	'Do you offer custom packages?' => 'Yes. Many of our services are tailored based on the client’s goals, project stage, timeline, and budget.',
	'Can I enquire about MDI Consults GTV through this page?' => 'Yes. Select MDI Consults GTV in the service dropdown and provide information about your route, profile, achievements, and current stage.',
	'Do you guarantee Global Talent Visa approval?' => 'No. MDI Consults GTV provides advisory, profile positioning, documentation strategy, evidence organisation, and application-readiness support. We do not guarantee visa approval or replace regulated immigration or legal advice.',
);

$input_style = 'width:100%;padding:14px;border:1px solid var(--line);margin-bottom:12px;';
?>
<main>
	<section class="page-hero">
		<div class="container reveal">
			<?php mdi_consults_section_meta( '07', 'Contact' ); ?>
			<h1><?php the_title(); ?></h1>
			<p class="hero-lead" style="margin-top:16px;">Let’s Help You Find the Right Direction</p>
			<p style="margin-top:12px;color:var(--ink-soft);max-width:70ch;">Whether you need brand clarity, a modern website, digital visibility, business strategy, PR support, content marketing, or MDI Consults GTV advisory, we are ready to help you take the next step.</p>
			<p style="margin-top:12px;color:var(--ink-soft);max-width:70ch;">You do not need to have everything figured out before reaching out. Bring the idea, challenge, project, or opportunity. We will help you clarify the path.</p>
			<div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:24px;">
				<a href="#enquiry-form" class="btn btn-gold">Make an Enquiry</a>
				<a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>" class="btn btn-outline">Book a Consultation</a>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container about-split reveal">
			<div>
				<p class="meta"><span>Intro</span></p>
				<h2>Start a Conversation with MDI Consults</h2>
				<p>MDI Consults works with founders, creatives, SMEs, professionals, agencies, and organisations across nations to provide strategy-led digital, brand, business, and global talent solutions.</p>
			</div>
			<div>
				<p>If you are ready to build, reposition, improve, document, launch, or go global, our team can help you understand what you need and how best to move forward.</p>
				<p>Use the enquiry form below to tell us about your project, service interest, or consultation request.</p>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container contact-grid">
			<div class="contact-info reveal">
				<p class="meta"><span>Contact</span></p>
				<h2>How to Reach Us</h2>
				<p>You can contact MDI Consults through any of the following channels.</p>
				<p style="margin-top:24px;"><strong>Email</strong><br><a href="mailto:<?php echo esc_attr( $c['email'] ); ?>"><?php echo esc_html( $c['email'] ); ?></a></p>
				<p><strong>Phone / WhatsApp</strong><br><a href="tel:<?php echo esc_attr( $c['phone_t'] ); ?>"><?php echo esc_html( $c['phone'] ); ?></a></p>
				<p><strong>Location</strong><br><?php echo esc_html( $c['address'] ); ?><br><span style="color:#aaa;">United Kingdom / Nigeria · Available for clients across nations</span></p>
				<p><strong>Social Media</strong><br>
					<a href="<?php echo esc_url( $c['instagram'] ); ?>" target="_blank" rel="noopener">Instagram <?php echo esc_html( $c['instagram_handle'] ); ?></a><br>
					<?php echo esc_html( $c['social_extra'] ); ?>
				</p>
				<p class="meta" style="margin-top:24px;"><?php echo esc_html( $c['response'] ); ?></p>
			</div>
			<div class="reveal" id="enquiry-form">
				<h2>Tell Us What You Need</h2>
				<p style="color:var(--ink-soft);margin-bottom:24px;">Please complete the form below with as much detail as possible. This helps us understand your needs and recommend the most suitable next step.</p>
				<form class="contact-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" enctype="multipart/form-data">
					<input type="hidden" name="action" value="mdi_contact">
					<?php wp_nonce_field( 'mdi_contact', 'mdi_contact_nonce' ); ?>

					<p><input type="text" name="name" placeholder="Full Name" required style="<?php echo esc_attr( $input_style ); ?>"></p>
					<p><input type="email" name="email" placeholder="Email Address" required style="<?php echo esc_attr( $input_style ); ?>"></p>
					<p><input type="tel" name="phone" placeholder="Phone / WhatsApp Number" style="<?php echo esc_attr( $input_style ); ?>"></p>
					<p><input type="text" name="country" placeholder="Country / Location" style="<?php echo esc_attr( $input_style ); ?>"></p>
					<p><input type="text" name="company" placeholder="Company / Brand Name" style="<?php echo esc_attr( $input_style ); ?>"></p>
					<p><input type="url" name="website" placeholder="Website or Social Media Link, if available" style="<?php echo esc_attr( $input_style ); ?>"></p>

					<p>
						<select name="service" required style="<?php echo esc_attr( $input_style ); ?>">
							<option value="">What service are you interested in?</option>
							<?php foreach ( $service_options as $option ) : ?>
							<option value="<?php echo esc_attr( $option ); ?>"><?php echo esc_html( $option ); ?></option>
							<?php endforeach; ?>
						</select>
					</p>
					<p>
						<select name="project_stage" required style="<?php echo esc_attr( $input_style ); ?>">
							<option value="">What stage are you currently in?</option>
							<?php foreach ( $stage_options as $option ) : ?>
							<option value="<?php echo esc_attr( $option ); ?>"><?php echo esc_html( $option ); ?></option>
							<?php endforeach; ?>
						</select>
					</p>
					<p>
						<select name="budget" style="<?php echo esc_attr( $input_style ); ?>">
							<option value="">What is your estimated budget range?</option>
							<?php foreach ( $budget_options as $option ) : ?>
							<option value="<?php echo esc_attr( $option ); ?>"><?php echo esc_html( $option ); ?></option>
							<?php endforeach; ?>
						</select>
					</p>
					<p>
						<select name="timeline" style="<?php echo esc_attr( $input_style ); ?>">
							<option value="">When would you like to start?</option>
							<?php foreach ( $timeline_options as $option ) : ?>
							<option value="<?php echo esc_attr( $option ); ?>"><?php echo esc_html( $option ); ?></option>
							<?php endforeach; ?>
						</select>
					</p>
					<p><textarea name="message" rows="6" placeholder="Please tell us what you need support with, your current situation, your goals, and any specific outcome you are hoping to achieve." required style="<?php echo esc_attr( $input_style ); ?>"></textarea></p>
					<p><label style="display:block;color:var(--ink-soft);font-size:0.92rem;margin-bottom:8px;">Upload any relevant document, brief, portfolio, website link, brand guide, CV, or evidence file (optional)</label><input type="file" name="attachment" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.webp" style="<?php echo esc_attr( $input_style ); ?>"></p>
					<p style="margin-bottom:16px;">
						<label style="display:flex;gap:10px;align-items:flex-start;color:var(--ink-soft);font-size:0.92rem;">
							<input type="checkbox" name="consent" value="1" required style="margin-top:4px;">
							<span>By submitting this form, you agree that MDI Consults may contact you regarding your enquiry and process your information in line with our <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy Policy</a>.</span>
						</label>
					</p>
					<button type="submit" class="btn btn-gold">Submit Enquiry</button>
				</form>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container reveal">
			<p class="meta"><span>GTV</span></p>
			<h2>Enquiring About MDI Consults GTV?</h2>
			<h3 style="font-size:1.1rem;margin:16px 0 12px;">Help Us Understand Your Profile</h3>
			<p style="color:var(--ink-soft);">If your enquiry is related to MDI Consults GTV, please include details such as:</p>
			<ul class="check-list" style="margin-top:16px;">
				<li>Your route of interest: Arts & Culture, Tech, or Academia</li>
				<li>Your current profession or field</li>
				<li>Your key achievements</li>
				<li>Links to your portfolio, website, LinkedIn, or public profile</li>
				<li>Whether you have existing evidence or documents</li>
				<li>Whether you want eligibility review, evidence audit, or full advisory support</li>
			</ul>
			<p style="margin-top:16px;color:var(--ink-soft);">This helps us understand whether you need an initial eligibility review, profile positioning, evidence audit, documentation strategy, or a longer preparation roadmap.</p>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container about-split reveal">
			<div>
				<p class="meta"><span>Response</span></p>
				<h2 style="color:#fff;">What Happens After You Submit?</h2>
				<p style="color:#aaa;">Once we receive your enquiry, our team will review your message and respond with the most suitable next step.</p>
				<p style="color:#aaa;margin-top:12px;">Depending on your request, we may recommend:</p>
			</div>
			<ul class="check-list">
				<li>A consultation</li>
				<li>A project quote</li>
				<li>A service package</li>
				<li>A discovery call</li>
				<li>A GTV eligibility review</li>
				<li>A documentation or strategy audit</li>
				<li>A custom proposal</li>
			</ul>
			<p style="color:#aaa;margin-top:20px;grid-column:1/-1;">We aim to respond as soon as possible during working days.</p>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<div>
					<p class="meta"><span>FAQ</span></p>
					<h2>Frequently Asked Questions</h2>
				</div>
			</div>
			<div class="faq-list">
				<?php foreach ( $contact_faq as $question => $answer ) : ?>
				<details class="faq-item reveal">
					<summary><?php echo esc_html( $question ); ?> <span>+</span></summary>
					<p><?php echo esc_html( $answer ); ?></p>
				</details>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container about-split reveal">
			<div>
				<p class="meta"><span>Booking</span></p>
				<h2>Prefer to Speak Directly?</h2>
				<p style="color:var(--ink-soft);">If you would like to speak with us directly, you can book a consultation with MDI Consults.</p>
				<p style="color:var(--ink-soft);margin-top:12px;">A consultation is ideal if you need brand clarity, website or digital project direction, business growth advice, PR or visibility guidance, social media or content strategy, GTV eligibility review, evidence or documentation guidance, or support choosing the right service.</p>
			</div>
			<div style="display:flex;align-items:center;">
				<a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>" class="btn btn-gold">Book a Consultation</a>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container reveal" style="text-align:center;">
			<h2 style="color:#fff;">Ready to Build with Clarity?</h2>
			<p style="color:#aaa;max-width:55ch;margin:16px auto 28px;">Your next step starts with a conversation. Tell us what you are trying to build, improve, launch, or prepare for, and we will help you find the right direction.</p>
			<div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
				<a href="#enquiry-form" class="btn btn-gold">Submit an Enquiry</a>
				<a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>" class="btn btn-outline">Book a Consultation</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
