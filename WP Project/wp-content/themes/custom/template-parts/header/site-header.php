<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<header id="masthead" class="<?php echo esc_attr($wrapper_classes); ?>">
	<div class="container-3">
		<div class="h-wrap d-flex al-center jc-sb">
			<div class="logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<?php if (has_custom_logo()) : ?>
						<?php the_custom_logo(); ?>
					<? else : ?>
						<img src="<?= get_template_directory_uri() ?>/assets/images/logo/logo.svg" alt="logo" title="logo">
					<? endif; ?>
				</a>
			</div>
			<div class="menu menu-nav hidden-xs">
				<?php wp_nav_menu([
					'theme_location'  => '',
					'menu'            => 'Header menu',
					'container' => 'false',
					'menu_class'      => 'menu-list d-flex al-center',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
				]); ?>
			</div>
			<div class="header-icons socials d-flex jc-sb al-center">
				<a href="!#" class="social linkedIn" rel="nofollow" target="_blank">
				</a>
			</div>
		</div>
	</div>
</header>