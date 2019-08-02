<?php $source = get_post_meta(get_the_id(), "_qod_quote_source", true);
$source_url = get_post_meta(get_the_id(), "_qod_quote_source_url", true); ?>

<div class="quote-content">
    <?php the_content(); ?>
</div>

<div class="title-container">
    <?php the_title('<p class="quote-title">-- ', '</p>'); ?>

    <?php if ($source && $source_url) : ?>

        <span class="quote-source">,<a class="quote-source-url" href="<?php echo $source_url ?>"><?php echo $source ?></a></span>

    <?php elseif ($source) : ?>
        <p><?php echo $source ?></p>

    <?php else : ?>
        <span> </span>

    <?php endif; ?>

</div>

<br><button class="get_quote" type="button">Show Me Another!</button>