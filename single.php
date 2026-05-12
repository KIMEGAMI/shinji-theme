<?php get_header(); ?>

<main class="single-page">

    <section class="single-post">

        <h1 class="post-title">
            <?php the_title(); ?>
        </h1>

        <div class="post-date">
            <?php the_time('Y.m.d'); ?>
        </div>

        <div class="post-content">
            <?php the_content(); ?>
        </div>

    </section>

</main>

<?php get_footer(); ?>