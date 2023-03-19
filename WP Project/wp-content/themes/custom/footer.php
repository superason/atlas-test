<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<? /*php get_template_part('template-parts/footer/footer-widgets'); */ ?>

<footer>
	<div class="container">
		<div class="footer-wrap">
			<div class="f-logo d-flex al-center jc-center">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<?php if (has_custom_logo()) : ?>
						<?php the_custom_logo(); ?>
					<? else : ?>
						<img src="<?= get_template_directory_uri() ?>/assets/images/logo/logo.svg" alt="logo" title="logo">
					<? endif; ?>
				</a>
			</div>
			<div class="f-text">We’d love to hear from you!</div>
			<div class="form-section d-flex jc-center w-100">
				<div class="form-wrap">
					<div class="form-descr text text-xs"><?php echo get_option('site_form_text'); ?></div>
					<div class="callback-form col-100-xs">
						<?php echo do_shortcode('[contact-form-7 id="11" title="Callback form"]'); ?>
					</div>
				</div>
				<div class="f-contacts-wrap">
					<div class="phone-wrap theme-phone-wrap d-flex al-center">
						<div class="phone">
							<div class="phone-text"><?php echo get_option('site_phone_text'); ?>:</div>
							<div class="phone-link-wrap"><a href="tel:<?php echo get_option('site_phone'); ?>" class="phone-link"><?php echo get_option('site_phone'); ?></a>
							</div>
						</div>
					</div>
					<div class="f-social-item">
						<?php echo get_option('callback_text_footer'); ?>
					</div>
					<div class="location-item"><?php echo get_option('site_address_footer'); ?>
						<div><a href="tel:<?php echo get_option('site_phone_footer'); ?>"><?php echo get_option('site_phone_footer'); ?></a></div>
					</div>
				</div>
			</div>
			<div class="copyright-wrap">
				<div class="copyright t-center"><?php echo get_option('site_copyright'); ?></div>
			</div>
		</div>
	</div>
	<div class="f-logo-elem hidden-xs"></div>
</footer>

<?php wp_footer(); ?>

</body>

</html>