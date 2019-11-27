<?php

/**
 * @package Write
 */
?>

<?php $post_type = get_post_format(); ?>

<div class="col-12 col-lg-6">
	<?php if ($post_type === "image") : ?>
		<div class="post-summary post-full-summary">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="clearfix">
						<?php if (is_sticky() && is_home() && !is_paged()) : ?>
							<div class="featured"><?php esc_html_e('Featured', 'write'); ?></div>
						<?php endif; ?>
						<?php write_entry_meta(); ?>
					</div>
					<div class="home-card">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail("post-thumbnail", ["class" => "main-thumbnail"]) ?>
							<a href="<?php the_permalink(); ?>" rel="bookmark">
								<div class="half-transparent"></div>
							<?php endif; ?>
							<div class="text-holder">
								<h2 class="entry-title image-card-title"><?php the_title(); ?></h2>
							</div>
							</a>
					</div>
				</header><!-- .entry-header -->
			</article><!-- #post-## -->
		</div><!-- . post-summary -->

	<?php elseif (($post_type === "aside" || $post_type === "link") &&
		function_exists("get_field") && get_field("redirect_url")
	) : ?>

		<div class=" post-summary post-full-summary">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="clearfix">
						<h3 class="entry-subtitle">Редирект</h3>
						<?php if (is_sticky() && is_home() && !is_paged()) : ?>
							<div class="featured"><?php esc_html_e('Featured', 'write'); ?></div>
						<?php endif; ?>
						<?php write_entry_meta(); ?>
					</div>
					<h2 class="entry-title"><a href="<?php the_field("redirect_url"); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</header><!-- .entry-header -->
			</article><!-- #post-## -->
		</div><!-- . post-summary -->

	<?php elseif ($post_type === "aside" || $post_type === "link") : ?>

		<div class=" post-summary post-full-summary">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="clearfix">
						<h3 class="entry-subtitle">Шорты</h3>
						<?php if (is_sticky() && is_home() && !is_paged()) : ?>
							<div class="featured"><?php esc_html_e('Featured', 'write'); ?></div>
						<?php endif; ?>
						<?php write_entry_meta(); ?>
					</div>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</header><!-- .entry-header -->
			</article><!-- #post-## -->
		</div><!-- . post-summary -->

	<?php elseif ($post_type === "gallery") : ?>

		<div class=" post-summary post-full-summary">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="clearfix">
						<h3 class="entry-subtitle">Карточки</h3>
						<?php if (is_sticky() && is_home() && !is_paged()) : ?>
							<div class="featured"><?php esc_html_e('Featured', 'write'); ?></div>
						<?php endif; ?>
						<?php write_entry_meta(); ?>
					</div>
					<?php if (has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail() ?></a>
					<?php endif; ?>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</header><!-- .entry-header -->
			</article><!-- #post-## -->
		</div><!-- . post-summary -->

	<?php else : ?>

		<div class=" post-summary post-full-summary">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="clearfix">
						<?php if (is_sticky() && is_home() && !is_paged()) : ?>
							<div class="featured"><?php esc_html_e('Featured', 'write'); ?></div>
						<?php endif; ?>
						<?php write_entry_meta(); ?>
					</div>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</header><!-- .entry-header -->
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			</article><!-- #post-## -->
		</div><!-- . post-summary -->

	<? endif; ?>
</div>