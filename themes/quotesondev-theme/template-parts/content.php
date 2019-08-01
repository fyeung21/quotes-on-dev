<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="post-content">
			<?php the_excerpt(); ?>
		</div>
	</header>

	<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">- ', esc_url(get_permalink())), '</a></h2>'); ?>

	<?php $source = get_post_meta(get_the_id(), "_qod_quote_source", true);
	$source_url = get_post_meta(get_the_id(), "_qod_quote_source_url", true); ?>

	<?php if ($source && $source_url) : ?>

		<span class="quote-source"><a class="quote-source-url" href="<?php echo $source_url ?>"><?php echo $source ?></a></span>

	<?php elseif ($source) : ?>
		<span><?php echo $source ?></span>

	<?php else : ?>
		<span> </span>

	<?php endif; ?>

</article>