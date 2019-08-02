<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
			</header>

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content'); ?>

			<?php endwhile; ?>

			<?php the_posts_pagination(array(
				'mid_size' => 2,
				'prev_text' => __('← Previous', 'textdomain'),
				'next_text' => __('Next →', 'textdomain'),
			)); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main>
</div><!-- #primary -->

<?php get_footer(); ?>