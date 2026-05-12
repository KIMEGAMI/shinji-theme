<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
 
</head>

<body <?php body_class(); ?>>

<a href="#" id="page_top"></a>
<header class="site-header">

    <div class="header-inner">

        <!--h1 class="logo">
            <?php bloginfo('name'); ?>
        </h1 -->

        <nav class="nav">

            <a href="https://shinji.work">HOME</a>

            <a href="#about">ABOUT</a>

            <a href="#skills">SKILLS</a>

            <a href="#certifications">資格</a>

            <a href="#works">WORKS</a>

        </nav>

    </div>

</header>