<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <?php $the_query = new WP_Query(array(
                'post_type'      => 'post',
                'orderby'        => 'rand',
                'posts_per_page' => 1,
            )); ?>

            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <?php $source = get_post_meta(get_the_id(), "_qod_quote_source", true);
                $source_url = get_post_meta(get_the_id(), "_qod_quote_source_url", true); ?>

                <div class="quote-content">
                    <?php the_content(); ?>
                </div>

                <div class="title-container">
                <?php the_title('<p class="quote-title">-- ', '</p>'); ?>


                <?php if ($source && $source_url) : ?>

                    <span class="quote-source"><a class="quote-source-url" href="<?php echo $source_url ?>"><?php echo $source ?></a></span>

                <?php elseif ($source) : ?>
                    <p><?php echo $source ?></p>

                <?php else : ?>
                    <span> </span>

                <?php endif; ?>

                </div>

                <br><button class="get_quote" type="button">Show Me Another!</button>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main>
</div>

<?php get_footer(); ?>