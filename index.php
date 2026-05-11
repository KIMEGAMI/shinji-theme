<?php get_header(); ?>

<main>
    <h2>Shinji Portfolio</h2>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <article>
                <h3><?php the_title(); ?></h3>

                <?php the_content(); ?>
            </article>

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>