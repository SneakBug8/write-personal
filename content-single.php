<?php

/**
 * The template used for displaying single post.
 *
 * @package Write
 */
?>

<?php if (function_exists("get_field") && get_field("redirect_url")) : ?>
	<script>
		window.location = "<?php the_field("redirect_url"); ?>"
	</script>
	<noscript>
		Здесь должна была быть переадресация на
		<a href="<?php the_field("redirect_url"); ?>"><?php the_field("redirect_url"); ?></a>
	</noscript>
<?php endif; ?>

<div class="post-full post-full-summary">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div>
				<?php if (is_sticky() && is_home() && !is_paged()) : ?>
					<div class="featured"><?php esc_html_e('Featured', 'write'); ?></div>
				<?php endif; ?>
				<?php write_entry_meta(); ?>
				<?php write_footer_meta(); ?>
			</div><!-- .entry-float -->
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if (function_exists("get_field") && get_field("samag")) : ?>
				<div id="vk_subscribe_1" style="margin-top:10px;"></div>
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<div class="page-links">' . esc_html__('Pages:', 'write'), 'after'  => '</div>', 'pagelink' => '<span class="page-numbers">%</span>',)); ?>
		</div><!-- .entry-content -->

		<?php if (function_exists("get_field") && get_field("samag")) : ?>
			<div style="margin-top:30px;margin-bottom:90px;">
				<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>

				<script type="text/javascript">
					VK.Widgets.Subscribe("vk_subscribe_1", {}, -26064343);
				</script>

				<?php if (rand(0, 1) == 0) : ?>
					Понравилась статья? Подписывайся на <a href="https://vk.com/app5748831_-26064343">нашу рассылку ВКонтакте</a>.
					<div id="vk_allow_messages_from_community"></div>

					<script type="text/javascript">
						VK.Widgets.AllowMessagesFromCommunity("vk_allow_messages_from_community", {}, 26064343);
					</script>
				<?php else : ?>
					<script type="text/javascript">
						VK.Widgets.Subscribe("vk_subscribe", {}, -26064343);
					</script>

					Понравилась статья? Вступай в <a href="https://vk.com/samag">нашу группу ВКонтакте</a>
					<div id="vk_subscribe"></div>

				<?php endif; ?>
			</div>
		<?php else : ?>

			<div style="margin-top:30px;margin-bottom:90px;">
				Вступай в <a href="https://vk.com/sb8blog">группу ВК</a><br>
				Подписывайся на канал Telegram: <a href="https://tele.gs/sb8blog">@sb8blog</a>
			</div>

		<?php endif; ?>

		<?php // write_author_profile(); 
		?>

	</article><!-- #post-## -->
</div><!-- .post-full -->

<?php write_post_nav(); ?>

<?php if (class_exists('Jetpack_RelatedPosts')) : ?>
	<?php echo do_shortcode('[jetpack-related-posts]'); ?>
<?php endif; ?>