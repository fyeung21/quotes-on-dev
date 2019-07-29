<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php the_content('<div class="entry-content"><p>', '</p></div>'); ?>
            <?php the_title('<div class="entry-title"><p>', '</p></div>'); ?>

            <button class="get_quote" type="button">Show Me Another!</button>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>


        <!-- <?php function get_random()
                {
                    return get_posts(array('orderby' => 'rand', 'posts_per_page' => 1));
                } ?> -->

            <!-- <?php
            $args = array('numberposts' => 1, 'orderby' => 'rand');
            $rand_posts = get_posts($args);
            foreach ($rand_posts as $post) : ?>
                <p><?php the_content(); ?><?php the_title(); ?></p>
            <?php endforeach; ?> -->

    </main>
</div>

<?php get_footer(); ?>