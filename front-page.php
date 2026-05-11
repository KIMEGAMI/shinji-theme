<?php get_header(); ?>


<main>

    <!-- Hero -->
    <section class="hero fade">

        <div class="hero-content">

            <p class="hero-sub">
                System Engineer Portfolio
            </p>

            <h2 class="hero-title">
                Shinji
            </h2>

            <p class="hero-text">
                Linux / WordPress / Laravel / Infrastructure
            </p>

        </div>

    </section>

    <!-- About -->
    <section class="about fade">

        <h2>About</h2>

        <p>
            Ubuntu VPS 上で Apache・HTTPS・WordPress を構築し、
            GitHub を利用した開発環境を構築しています。
        </p>

        <p>
            現在は Laravel を使用した広島ライブ情報サイトの開発を進めています。
        </p>

    </section>

    <!-- Skills -->
<section class="skills fade">

    <h2>Skills</h2>

    <p class="skill-note">
        ★1 = 約1年の学習・開発経験
    </p>

    <div class="skill-grid">

        <div class="skill-card">
            <h3>PHP</h3>
            <p>★★★</p>
        </div>

        <div class="skill-card">
            <h3>Linux</h3>
            <p>★★★</p>
        </div>

        <div class="skill-card">
            <h3>Apache</h3>
            <p>★★</p>
        </div>

        <div class="skill-card">
            <h3>MariaDB</h3>
            <p>★★</p>
        </div>

        <div class="skill-card">
            <h3>Git / GitHub</h3>
            <p>★★</p>
        </div>

        <div class="skill-card">
            <h3>WordPress</h3>
            <p>★★</p>
        </div>

        <div class="skill-card">
            <h3>Laravel</h3>
            <p>★</p>
        </div>

        <div class="skill-card">
            <h3>C</h3>
            <p>★★★★</p>
        </div>

        <div class="skill-card">
            <h3>C++</h3>
            <p>★★★</p>
        </div>

        <div class="skill-card">
            <h3>Java</h3>
            <p>★★</p>
        </div>

    </div>

</section>

    <!-- Works -->
    <section class="works fade">

        <h2>Works</h2>

        <div class="works-grid">

            <div class="work-card">
                <h3>Ubuntu VPS</h3>

                <p>
                    さくら VPS 上へ Ubuntu を構築し、
                    Apache・HTTPS 化を実装。
                </p>
            </div>

            <div class="work-card">
                <h3>WordPress Theme</h3>

                <p>
                    オリジナル WordPress テーマを自作。
                </p>
            </div>

            <div class="work-card">
                <h3>GitHubh</h3>

                <p>
                    
    <a
        class="github-link"
        href="https://github.com/KIMEGAMI"
        target="_blank"
    >
        View GitHub →
    </a>
                </p>
            </div>

        </div>

    </section>

    <!-- Update -->
    <section class="updates fade">

        <h2>Update History</h2>

        <?php
        $query = new WP_Query(array(
            'posts_per_page' => 5
        ));

        if($query->have_posts()):
            while($query->have_posts()):
                $query->the_post();
        ?>

        <div class="update-item">

            <span class="update-date">
                <?php the_time('Y.m.d'); ?>
            </span>

            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>

        </div>

        <?php endwhile; endif; wp_reset_postdata(); ?>

    </section>

</main>

<?php get_footer(); ?>