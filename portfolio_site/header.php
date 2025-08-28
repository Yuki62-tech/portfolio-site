<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yukiのポートフォリオサイトです。Webコーダーを目指して日々勉強しています。シンプルに、美しく。すべてのデバイスで映えるWebサイトをコードで支えます。">
    <title>Yukiのポートフォリオサイト</title>
    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('./assets/css/style.css'); ?>">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('./assets/images/favicons/favicon.ico'); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/png" href="<?php echo get_theme_file_uri('./assets/images/favicons/apple-touch-icon-180x180.png'); ?>">
    <link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('./assets/images/favicons/icon-192x192.png'); ?>">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/fc6651f65d.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body class="l-body">
    <?php wp_body_open(); ?>

    <div id="navArea">
        <?php if (is_front_page()): ?>
            <!-- header -->
            <header class="l-header">
                <h1 class="p-title">
                    <a class="p-title--link" href="<?php echo home_url('./index.php') ?>">
                        Yuki's<span class="u-lineBreak"></span>
                        Portfolio
                    </a>
                </h1>
                <div class="c-toggle-btn">
                    <span class="c-toggle-btn__line"></span>
                    <span class="c-toggle-btn__line"></span>
                    <span class="c-toggle-btn__line"></span>
                </div>
            </header>
            <!-- /header -->

            <!-- sideBar -->
            <aside class="l-sideBar">
                <nav class="p-nav">
                    <ul class="p-nav__list">
                        <li class="p-nav__list--item">
                            <a class="p-nav__list--link" href="<?php echo home_url('#') ?>">
                                <i class="fa-regular fa-house p-nav__list--icon"></i>
                                HOME
                            </a>
                        </li>
                        <li class="p-nav__list--item">
                            <a class="p-nav__list--link" href="<?php echo home_url('#about') ?>">
                                <i class="fa-regular fa-address-card p-nav__list--icon"></i>
                                ABOUT
                            </a>
                        </li>
                        <li class="p-nav__list--item">
                            <a class="p-nav__list--link" href="<?php echo home_url('#work') ?>">
                                <i class="fa-solid fa-laptop p-nav__list--icon"></i>
                                WORK
                            </a>
                        </li>
                        <li class="p-nav__list--item">
                            <a class="p-nav__list--link" href="<?php echo home_url('#contact') ?>">
                                <i class="fa-regular fa-envelope p-nav__list--icon"></i>
                                CONTACT
                            </a>
                        </li>
                        <hr class="u-border">
                        <li class="p-nav__list--item">
                            <a class="p-nav__list--link" href="https://github.com/Yuki62-tech" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-github p-nav__list--icon"></i>
                                GitHub
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>
            <!-- /sideBar -->
        <?php endif; ?>
    </div>
    <?php if (is_front_page()): ?>
    <div class="l-container">
    <?php else: ?>
        <div class="l-subPage">
        <?php endif; ?>

        <main class="l-main">