<?php

/**
 * The template used for displaying single post.
 *
 * @package Write
 */
?>

<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>

<?php if (function_exists("get_field") && get_field("redirect_url")) : ?>
	<script type="text/javascript">
		Object.assign(document.createElement('a'), {
			target: '_blank',
			href: '<?php the_field("redirect_url"); ?>'
		}).click();
	</script>
	<div class="post-full post-full-summary">
		<a class="link" href="<?php the_field("redirect_url"); ?>" target="_blank">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			Здесь должна была быть переадресация на статью на внешнем сайте (<?php the_field("redirect_url"); ?>)
		</a>
	</div>
<?php else : ?>

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
				<?php /* if (function_exists("get_field") && get_field("samag")) : ?>
				<div id="vk_subscribe_1" style="margin-top:10px;"></div>
			<?php else : */ ?>
				<!-- VK Widget -->
				<?php // endif; 
				?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php the_content(); ?>

				<div class="subscribe-buttons">
					<div>
						<div id="vk_subscribe"></div>
					</div>
					<div>
						<a href="https://twitter.com/SneakBug8?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-lang="ru" data-show-count="false">
							Читать @SneakBug8
						</a>
					</div>
					<div>
						<a style="font-size:16px;font-weight:500;text-align:center;border-radius:8px;padding:5px;background:#389ce9;text-decoration:none;color:#fff;" href="https://tele.gs/sb8blog" target="_blank">
							<i class="fa fa-paper-plane"></i> Подписаться в Telegram
						</a>
					</div>
				</div>
			</div>

			<?php wp_link_pages(array('before' => '<div class="page-links">' . esc_html__('Pages:', 'write'), 'after'  => '</div>', 'pagelink' => '<span class="page-numbers">%</span>',)); ?>
	</div><!-- .entry-content -->

	<?php /* if (function_exists("get_field") && get_field("samag")) : ?>
			<div class="bottom-block">
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
		<?php else : */ ?>

	<?php /*
			<div style="margin-top:30px;margin-bottom:90px;">
				Вступай в <a href="https://vk.com/sb8blog">группу ВК</a><br>
				Подписывайся на канал Telegram: <a href="https://tele.gs/sb8blog">@sb8blog</a>
			</div>
			*/ ?>

	<!-- <div id="vk_subscribe"></div> -->

	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	<?php // endif;
	?>

	<?php // write_author_profile(); 

	?>

	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	/*if (comments_open() || get_comments_number()) :
		comments_template();
	endif; */
	?>

	</article><!-- #post-## -->

	<!-- Put this script tag to the <head> of your page -->
	<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>

	<script type="text/javascript">
		VK.init({
			apiId: 7003744,
			onlyWidgets: true
		});
		VK.Widgets.Subscribe("vk_subscribe", {
			soft: 1
		}, -124057313);
	</script>

	</div><!-- .post-full -->

<?php endif; ?>

<?php write_post_nav(); ?>

<?php if (class_exists('Jetpack_RelatedPosts')) : ?>
	<?php echo do_shortcode('[jetpack-related-posts]'); ?>
<?php endif; ?>