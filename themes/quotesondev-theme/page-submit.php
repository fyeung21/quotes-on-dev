<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (is_user_logged_in()) { ?>

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'submit'); ?>

			<?php endwhile; ?>

		<?php } else { ?>

		<p>Sorry, you must be to logged in to submit a quote! </p>;
		<a href='<?php echo wp_login_url()?>'>Click here to log in.</a>;

		<?php } ?>

	</main>
</div>

<?php get_footer(); ?>