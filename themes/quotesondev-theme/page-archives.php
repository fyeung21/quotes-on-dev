<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>

        <h1>authors</h1>
        <div class="term-container">
            <?php $args = array(
                'order' => 'DESC',
                'posts_per_page' => -1,
                'post_type' => 'post',
            ); ?>
            <?php $author = new WP_Query($args); ?>

            <?php if ($author->have_posts()) : ?>

                <?php while ($author->have_posts()) : $author->the_post(); ?>
                    <div class="author-link">
                        <p><a class="click-author" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    </div>


                <?php endwhile; ?>
            <?php else : ?>

                <h2>Cannot Find Recent Posts</h2>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <h1>categories</h1>

        <div class="term-container">
            <?php $cats = get_terms(array(
                'taxonomy' => 'category',
                'hide_empty' => false,
            )); ?>

            <?php if (!empty($cats) && !is_wp_error($cats)) {

                foreach ($cats as $term) {
                    echo '<a href="' . esc_url(get_term_link($term)) . '" alt="' . esc_attr(sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name)) . '">' . $term->name . '</a>';
                };
            } ?>

        </div>

        <h1>tags</h1>

        <div class="term-container">
            <?php $tags = get_terms(array(
                'taxonomy' => 'post_tag',
                'hide_empty' => false,
            )); ?>

            <?php if (!empty($tags) && !is_wp_error($tags)) {

                foreach ($tags as $term) {
                    echo '<a href="' . esc_url(get_term_link($term)) . '" alt="' . esc_attr(sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name)) . '">' . $term->name . '</a>';
                };
            } ?>

        </div>

    </main>
</div>

<?php get_footer(); ?>