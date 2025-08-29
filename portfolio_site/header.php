<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yukiのポートフォリオサイトです。Webコーダーを目指して日々勉強しています。シンプルに、美しく。すべてのデバイスで映えるWebサイトをコードで支えます。">
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
                            <a class="p-nav__list--link" href="<?php echo home_url('/contact') ?>">
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