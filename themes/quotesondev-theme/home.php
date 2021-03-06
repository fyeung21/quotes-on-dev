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

                <?php get_template_part('template-parts/content', 'home'); ?>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main>
</div>

<?php get_footer(); ?>