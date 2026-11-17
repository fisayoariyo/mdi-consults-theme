<?php
/**
 * Template Name: FAQ Page
 *
 * @package MDI_Consults
 */

get_header();

$faq_sections = array(
	'About MDI Consults' => array(
		'What is MDI Consults?' => 'MDI Consults is a strategy-led consulting firm helping founders, businesses, organisations, creatives and professionals build stronger brands, improve digital presence and develop practical growth strategies. Our work combines research, strategy and execution to help clients move from ideas to measurable outcomes.',
		'What services does MDI Consults provide?' => "Our core services include:\n\n• Brand Strategy & Identity Development\n• Website Development & UI/UX Design\n• Social Media Management & Marketing\n• PR & Online Reputation Management\n• Content Marketing & SEO\n• Strategic Planning & Business Development\n• Research, Data Analytics & Strategy Optimisation\n• MDI Consults GTV\n\nSome projects combine multiple services depending on the client's objectives.",
		'Who do you work with?' => "We work with:\n\n• Startups\n• SMEs\n• Established businesses\n• Founders\n• Personal brands\n• Creatives\n• Artists\n• Professionals\n• Non-profit organisations\n• Educational institutions\n• Corporate organisations",
		'Do you only work with clients in the UK?' => 'No. MDI Consults supports clients across multiple countries through virtual consultations, remote collaboration and digital project delivery.',
		'Is MDI Consults part of MillionDollar Ideas Ltd?' => 'Yes. MDI Consults operates as a consulting division under MillionDollar Ideas Ltd.',
	),
	'Working With Us' => array(
		'How do I get started?' => "Simply submit an enquiry through our Contact page. After reviewing your enquiry, we may recommend:\n\n• a consultation\n• a discovery call\n• a proposal\n• a quotation\n• a strategic audit\n• or another suitable next step.",
		'Do I have to book a consultation first?' => 'Not necessarily. Some enquiries can proceed directly to a proposal or quotation. However, if your project requires strategic direction or further clarification, we may recommend scheduling a consultation before work begins.',
		'What happens during a consultation?' => "Consultations are structured strategy sessions designed to understand your goals, challenges and current position. Depending on your requirements, we may:\n\n• review your existing brand\n• assess your website\n• discuss business strategy\n• evaluate marketing challenges\n• review documentation\n• identify opportunities\n• recommend the most suitable service\n\nWhere appropriate, we may also outline the next steps for your project.",
		'How long are consultations?' => 'The duration and delivery timeline depend on the nature and scope of the client\'s requirements. The expected consultation or project timeline will be clearly stated in the proposal or service agreement issued to the client.',
		'Are consultations free?' => 'Consultation arrangements vary depending on the nature of the enquiry. Where a consultation fee applies, this will be communicated before the session is confirmed.',
	),
	'Brand & Digital Services' => array(
		'Can you build a website from scratch?' => 'Yes. We design and develop websites tailored to each client\'s objectives, audience and brand positioning.',
		'Can you redesign an existing website?' => 'Yes. We regularly review and improve existing websites by refining user experience, structure, messaging, design and performance.',
		'Will you write the website content?' => 'Yes. Where included within the agreed scope, we can develop website copy that aligns with your brand, audience and business objectives.',
		'Do you offer branding services?' => 'Yes. We support clients with brand positioning, messaging, identity development and strategic brand direction.',
		'Do you manage social media?' => 'Yes. Depending on the agreed scope, we provide strategy, content planning and social media management.',
		'Do you provide PR services?' => 'Yes. Our services include public relations strategy, reputation management and visibility planning.',
		'Can you help improve my online visibility?' => 'Yes. Through a combination of SEO, content marketing, PR, website optimisation and digital strategy, we help businesses strengthen their online presence.',
	),
	'Project Process' => array(
		'How long does a project take?' => 'Project timelines depend on the scope, complexity and responsiveness of all parties involved. Estimated timelines are discussed before work begins.',
		'Can I request revisions?' => 'Yes. Revision arrangements depend on the agreed project scope. Requests that fall outside the original scope may require a revised quotation.',
		'Do you provide ongoing support?' => 'Where appropriate, ongoing support and maintenance can be arranged separately. The availability and scope of ongoing support will be agreed before commencement.',
	),
	'Payments' => array(
		'How are projects priced?' => 'Every project is priced based on its objectives, complexity, scope and deliverables. Where appropriate, a tailored proposal or quotation will be provided.',
		'Do you require a deposit?' => 'Yes. An upfront, non-refundable commitment deposit is required to secure the client\'s project slot and commence work. The exact amount or percentage will depend on the service and will be stated in the proposal, invoice or service agreement. The outstanding balance will be payable according to the agreed payment schedule.',
		'What payment methods do you accept?' => 'Payments are accepted through bank transfer to the company\'s official account that will be shared in invoice at proposal and service agreement stage. All applicable payment terms and account details will also be included in the client\'s invoice, proposal or service agreement.',
	),
	'MDI Consults GTV' => array(
		'What is MDI Consults GTV?' => "MDI Consults GTV is our specialist advisory service supporting individuals pursuing Global Talent pathways. The service focuses on:\n\n• profile positioning\n• evidence strategy\n• documentation planning\n• portfolio structure\n• application readiness\n• strategic guidance",
		'Which Global Talent routes do you support?' => "We currently provide advisory support for:\n\n• Arts & Culture\n• Technology\n• Academia",
		'Do you submit applications on behalf of clients?' => 'No. MDI Consults GTV is an advisory service designed to help clients prepare stronger applications.',
		'Do you guarantee endorsement or visa approval?' => 'No. We do not guarantee endorsement, visa approval or any immigration outcome. All decisions remain with the relevant endorsing bodies and government authorities.',
		'Are you immigration advisers?' => 'No. MDI Consults GTV provides strategic advisory and documentation support. Where regulated immigration or legal advice is required, clients should consult an appropriately qualified professional.',
		'Can you tell me whether I am eligible?' => 'We can provide an informed professional assessment based on the information you provide. However, only the relevant endorsing body or government authority can determine official eligibility.',
		'What if I am not ready yet?' => 'Where appropriate, we may recommend a preparation roadmap to help strengthen your profile before pursuing a Global Talent application.',
	),
	'Privacy & Confidentiality' => array(
		'Will my information remain confidential?' => 'Yes. We treat client information with care and only use it for the purposes of delivering our services, communicating with you and managing your engagement in accordance with our Privacy Policy.',
		'Do you sign Non-Disclosure Agreements (NDAs)?' => 'Where appropriate, yes. If confidentiality arrangements are required before discussions begin, please let us know when making your enquiry.',
	),
	'General' => array(
		'How quickly will I receive a response?' => 'We reply to all new enquiries within 24 hours on business days. If your enquiry needs more detail, we will send a fuller response within 48 hours, and let you know upfront if it will take longer.',
		'Can I work with MDI Consults remotely?' => 'Yes. Many of our projects are delivered remotely through virtual meetings and digital collaboration.',
		"I can't find the answer to my question." => "We're here to help. If your question hasn't been answered above, please contact us and we'll be happy to discuss your enquiry.",
	),
);
?>
<main>
	<section class="page-hero">
		<div class="container reveal">
			<?php mdi_consults_section_meta( '08', 'FAQ' ); ?>
			<h1><?php the_title(); ?></h1>
			<p class="hero-lead" style="margin-top:16px;">We've answered some of the questions we are most commonly asked about MDI Consults, our services, consultations, and MDI Consults GTV.</p>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<?php foreach ( $faq_sections as $section_title => $items ) : ?>
			<div class="reveal" style="margin-bottom:48px;">
				<h2 style="margin-bottom:24px;"><?php echo esc_html( $section_title ); ?></h2>
				<div class="faq-list">
					<?php foreach ( $items as $question => $answer ) : ?>
					<details class="faq-item reveal">
						<summary><?php echo esc_html( $question ); ?> <span>+</span></summary>
						<p><?php echo nl2br( esc_html( $answer ) ); ?></p>
					</details>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container reveal" style="text-align:center;">
			<h2 style="margin-bottom:16px;">Ready to start?</h2>
			<p style="color:#aaa;max-width:60ch;margin:0 auto 28px;">Book a consultation or submit an enquiry, and let's explore how we can help you move your ideas forward with clarity, strategy and confidence.</p>
			<div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
				<a href="<?php echo esc_url( home_url( '/book/' ) ); ?>" class="btn btn-gold">Book a Consultation</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Contact Us</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
