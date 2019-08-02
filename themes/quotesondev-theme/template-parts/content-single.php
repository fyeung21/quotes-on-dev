<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</header>

	<div class="title-container">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

		<?php $source = get_post_meta(get_the_id(), "_qod_quote_source", true);
		$source_url = get_post_meta(get_the_id(), "_qod_quote_source_url", true); ?>

		<?php if ($source && $source_url) : ?>

			<span class="quote-source"><a class="quote-source-url" href="<?php echo $source_url ?>"><?php echo $source ?></a></span>

		<?php elseif ($source) : ?>
			<p><?php echo $source ?></p>

		<?php else : ?>
			<span> </span>

		<?php endif; ?>

	</div>

</article>