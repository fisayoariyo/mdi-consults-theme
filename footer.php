<?php
/**
 * Footer template.
 *
 * @package MDI_Consults
 */

$c = mdi_consults_contact();
$tagline = nl2br( esc_html( mdi_mod( 'mdi_footer_tagline', "Defining Your Ideas.\nBroadening Your Horizons." ) ) );
?>
<footer class="site-footer">
	<div class="container">
		<div class="footer-grid">
			<div>
				<p class="meta" style="margin-bottom:16px;"><span>(MDI)</span> © <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
				<h3 style="font-size:1.8rem;color:#fff;margin-bottom:12px;"><?php echo wp_kses_post( $tagline ); ?></h3>
				<p style="color:#888;"><?php echo esc_html( mdi_mod( 'mdi_footer_blurb', 'Global digital, brand & strategic consulting — Lagos · UK · Worldwide.' ) ); ?></p>
				<form class="newsletter-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
					<input type="hidden" name="action" value="mdi_newsletter">
					<?php wp_nonce_field( 'mdi_newsletter', 'mdi_newsletter_nonce' ); ?>
					<label class="meta" for="mdi-newsletter-email">Newsletter</label>
					<div class="newsletter-form__row">
						<input id="mdi-newsletter-email" type="email" name="email" required placeholder="Your email" autocomplete="email">
						<button type="submit" class="btn btn-gold">Subscribe</button>
					</div>
					<p class="newsletter-form__hint">Updates via Zoho Mail to mdiconsultsltd@gmail.com</p>
				</form>
			</div>
			<div>
				<p class="meta" style="margin-bottom:12px;">Navigate</p>
				<p><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></p>
				<p><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></p>
				<p><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">Work</a></p>
				<p><a href="<?php echo esc_url( home_url( '/gtv/' ) ); ?>">MDI Consults GTV</a></p>
				<p><a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>">Insights</a></p>
				<p><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></p>
				<p><a href="<?php echo esc_url( home_url( '/book-consultation/' ) ); ?>">Book a Consultation</a></p>
			</div>
			<div>
				<p class="meta" style="margin-bottom:12px;">Contact</p>
				<p><a href="mailto:<?php echo esc_attr( $c['email'] ); ?>"><?php echo esc_html( $c['email'] ); ?></a></p>
				<p><a href="tel:<?php echo esc_attr( $c['phone_t'] ); ?>"><?php echo esc_html( $c['phone'] ); ?></a></p>
				<p style="color:#888;"><?php echo esc_html( $c['address_short'] ); ?></p>
				<p style="margin-top:12px;"><a href="<?php echo esc_url( $c['instagram'] ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $c['instagram_handle'] ); ?></a></p>
			</div>
		</div>
		<div class="footer-bottom">
			<span><?php echo esc_html( mdi_mod( 'mdi_footer_legal', 'MDI Consults · MillionDollar Ideas Ltd' ) ); ?></span>
			<span>
				<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" style="color:#666;">Privacy</a>
				 ·
				<a href="<?php echo esc_url( home_url( '/terms-of-service/' ) ); ?>" style="color:#666;">Terms</a>
				 ·
				<a href="<?php echo esc_url( home_url( '/gtv-disclaimer/' ) ); ?>" style="color:#666;">GTV Disclaimer</a>
			</span>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
