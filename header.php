<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Write
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div class="topmenu">
			<ul class="clearfix">
				<li><a href="https://twitter.com/SneakBug8">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x"></i>
						</span>
					</a></li>
				<li><a href="https://tele.gs/sb8blog">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-telegram fa-stack-1x"></i>
						</span>
					</a></li>
				<li><a href="https://vk.com/sb8blog">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-vk fa-stack-1x"></i>
						</span>
					</a></li>
			</ul>
		</div>
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'write'); ?></a>
		<?php // if (get_post_type() !== "post" || is_home() || is_archive()): 
		?>
		<header id="masthead" class="site-header">
			<div class="site-top">
				<div class="site-top-table">
					<div class="site-branding">
						<?php if (function_exists('the_custom_logo')) {
							the_custom_logo();
						} ?>
						<?php write_site_title(); ?>
						<div class="site-description"><?php bloginfo('description'); ?></div>
					</div><!-- .site-branding -->

					<?php if (!get_theme_mod('write_hide_navigation')) : ?>
						<nav id="site-navigation" class="main-navigation">
							<button class="drawer-toggle drawer-hamburger">
								<span class="screen-reader-text"><?php esc_html_e('Menu', 'write'); ?></span>
								<span class="drawer-hamburger-icon"></span>
							</button>
							<div class="drawer-nav">
								<div class="drawer-content">
									<div class="drawer-content-inner">
										<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
										<?php if (!get_theme_mod('write_hide_search')) : ?>
											<?php get_search_form(); ?>
										<?php endif; ?>
									</div><!-- .drawer-content-inner -->
								</div><!-- .drawer-content -->
							</div><!-- .drawer-nav -->
						</nav><!-- #site-navigation -->
					<?php endif; ?>
				</div><!-- .site-top-table -->
			</div><!-- .site-top -->

			<?php if ((get_header_image() && 'site' == get_theme_mod('write_header_display')) || (get_header_image() && 'page' == get_theme_mod('write_header_display') && is_page()) || (get_header_image() && 'page' != get_theme_mod('write_header_display') && is_home())
			) : ?>
				<div id="header-image" class="header-image">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="">
				</div><!-- #header-image -->
			<?php endif; ?>

			<?php if ((get_theme_mod('write_home_text') && 'site' == get_theme_mod('write_home_text_display')) || (get_theme_mod('write_home_text') && 'front' == get_theme_mod('write_home_text_display') && is_front_page() && !is_home()) || (get_theme_mod('write_home_text') && 'front' != get_theme_mod('write_home_text_display') && is_home() && !is_paged())
			) : ?>
				<div class="home-text">
					<?php echo wp_kses_post(get_theme_mod('write_home_text')); ?>
				</div><!-- .home-text -->
			<?php endif; ?>

		</header><!-- #masthead -->
		<?php /* else : ?>
			<div class="space"></div>
		<?php endif; */ ?>

		<div id="content" class="site-content">