<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Write
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php if (have_posts()) : ?>

			
			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('content', get_post_format()); ?>

			<?php endwhile; ?>

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
</div><!-- #primary -->

<?php get_footer(); ?>