<?php

/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Write
 */

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
					the_archive_title('<h1 class="page-title">', '</h1>');
					the_archive_description('<div class="taxonomy-description">', '</div>');
					?>
			</header><!-- .page-header -->

			<div class="row">
				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('content', get_post_format()); ?>

				<?php endwhile; ?>
			</div>

			<?php
				the_posts_pagination(array(
					'prev_text' => esc_html__('&laquo; Previous', 'write'),
					'next_text' => esc_html__('Next &raquo;', 'write'),
				));
				?>

		<?php else : ?>

			<?php get_template_part('content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>