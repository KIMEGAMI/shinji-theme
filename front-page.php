<?php get_header(); ?>

<canvas id="bg-canvas"></canvas>
<main>

    <!-- Hero -->
    <section class="hero fade">

        <div class="hero-content">

            <p class="hero-sub">
                System Engineer Portfolio
            </p>

            <h2 class="hero-title">
                KANDA YASUO
            </h2>

            <p class="hero-text">
                バックエンドエンジニア志望の神田靖雄です。
            </p>

        </div>

    </section>





    <!-- About -->
    <section class="about fade">

        <h2 id="about">About</h2>

        <p>
            バックエンドエンジニアを目指し、
            PHP・Laravel・Linux を中心に学習しています。
        </p>
        </p>
        さくらの VPS 上へ Ubuntu Server を構築し、
        Apache・HTTPS・WordPress 環境を自力で構築しました。
        </p>
        </p>
        現在は Laravel を使用した Web アプリケーション開発、
        GitHub を利用した開発フローを学習しています。
        </p>

    </section>

    <!-- Skills -->
    <section class="skills fade">

        <h2 id="skills">Skills</h2>

        <p class="skill-note">
            ★1 = 約1年の学習・開発経験
        </p>

        <div class="skill-grid">

            <div class="skill-card">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/php.gif"
                    alt="php">
                <h3>PHP</h3>
                <p>★★★</p>
            </div>

            <div class="skill-card">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/linux.png"
                    alt="php">
                <h3>Linux</h3>
                <p>★★★</p>
            </div>

            <div class="skill-card">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/sql.png"
                    alt="php">
                <h3>SQL</h3>
                <p>★★</p>
            </div>


            <div class="skill-card">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/git.jpeg" width="80" height="80"
                    alt="php">
                <h3>Git / GitHub</h3>
                <p>★</p>
            </div>

            <div class="skill-card">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/wp.png" width="80" height="80"
                    alt="php">
                <h3>WordPress</h3>
                <p>★</p>
            </div>

            <div class="skill-card">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/laravel.JPG" width="80" height="80"
                    alt="php">
                <h3>Laravel</h3>
                <p>★</p>
            </div>

            <div class="skill-card">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/c.png" width="80" height="80"
                    alt="php">
                <h3>C</h3>
                <p>★★★</p>
            </div>

            <div class="skill-card">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/c++.jpg" width="80" height="80"
                    alt="php">
                <h3>C++</h3>
                <p>★★★</p>
            </div>

            <div class="skill-card">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/java.png" width="80" height="80"
                    alt="php">
                <h3>Java</h3>
                <p>★★</p>
            </div>

        </div>

    </section>
<!-- Infrastructure -->
<section class="infrastructure fade">

    <h2>Infrastructure</h2>

    <div class="infra-list">

        <div class="infra-item">
            Sakura VPS
        </div>

        <div class="infra-item">
            Ubuntu Server
        </div>

        <div class="infra-item">
            Apache
        </div>

        <div class="infra-item">
            HTTPS / SSL
        </div>

        <div class="infra-item">
            Docker
        </div>


    </div>

</section>

    <!-- Certifications -->

    <section class="certifications fade">

        <h2 id="certifications">
            資格
        </h2>

        <div class="cert-list">
            <div class="cert-item">
                PHP8技術者認定初級試験
            </div>
            <div class="cert-item">
                PHP8技術者認定準上級試験
            </div>
            <div class="cert-item">
                Linux Professional Institute Certification Level 1
            </div>
            <div class="cert-item">
                ITパスポート
            </div>
            <div class="cert-item">
                Microsoft Office Specialist Excel 365
            </div>
            <div class="cert-item">
                普通自動車第一種運転免許
            </div>

        </div>

    </section>

    <!-- Works -->
    <section class="works fade">

        <h2 id="works">Works</h2>

        <div class="works-grid">
            <div class="work-card">
                <h3></h3>

                <p>
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/git.jpeg" width="100" height="80"
                        alt="php"> <br>
                    <a
                        class="github-link"
                        href="https://github.com/KIMEGAMI/shinji-theme"
                        target="_blank">
                        wordpressテーマソースコード<br>

                    </a>
                    <a
                        class="github-link"
                        href="https://github.com/KIMEGAMI/hiroshima-live"
                        target="_blank">
                        広島ライブ情報ソースコード<br>

                    </a>
                    <a
                        class="github-link"
                        href="https://github.com/KIMEGAMI/furugi"
                        target="_blank">
                        古着管理システムソースコード<br>

                    </a>
                </p>
            </div>
            <div class="work-card">
                <a href="https://hiroshima-live.shinji.work/"
                        target="_blank">
                        
<img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/hiroshima.png" width="200" height="150"
                        alt="php"> <br>
                    
                        
                        

                    </a>


                <h3>広島ライブ情報システム</h3>

                <p><a href="https://docs.google.com/spreadsheets/d/1X8oTzFouRIzib0xXzmJlbD2OT54AZsAhuDVwZ35Fy7E/edit?usp=sharing">■要件定義</a>     
                  <p><a href="https://drive.google.com/file/d/1LqaL1AV05AUBGzQTFd_s-KQWMwM-iM-u/view?usp=sharing">■画面一覧</a>     
                       
                </p>

                <p><a href="https://drive.google.com/file/d/1x-cxE0zmhM1-foj5GIlx0bHlfO2tdImF/view?usp=sharing">■ER図</a>     
                       
                </p>
            </div>

            <div class="work-card">
                                <a href="https://furugi.shinji.work/"
                        target="_blank">
                        
<img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/furugi.png" width="200" height="150"
                        alt="php"> <br>
                    
                        
                        

                    </a>

                 <h3>古着管理システム</h3>

                <p><a href="https://docs.google.com/spreadsheets/d/1X8oTzFouRIzib0xXzmJlbD2OT54AZsAhuDVwZ35Fy7E/edit?usp=sharing">■要件定義</a>     
                  <p><a href="https://drive.google.com/file/d/1LqaL1AV05AUBGzQTFd_s-KQWMwM-iM-u/view?usp=sharing">■画面一覧</a>     
                       
                </p>

                <p><a href="https://drive.google.com/file/d/1x-cxE0zmhM1-foj5GIlx0bHlfO2tdImF/view?usp=sharing">■ER図</a>     
                       
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

        if ($query->have_posts()):
            while ($query->have_posts()):
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

        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>

    </section>

</main>

<?php get_footer(); ?>