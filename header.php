<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body>


<header class="site-header">

    <div class="header-inner">

        <h1 class="logo">
            <?php bloginfo('name'); ?>
        </h1>

        <nav class="nav">

            <a href="/">HOME</a>

            <a href="#about">ABOUT</a>

            <a href="#skills">SKILLS</a>

            <a href="#works">WORKS</a>

            <a href="#contact">CONTACT</a>

        </nav>

    </div>

</header>