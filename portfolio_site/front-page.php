<?php get_header(); ?>

<div class="l-keyVisual__wrapper">
    <!-- keyVisual -->
    <div class="l-keyVisual">
        <h2 class="p-catchCopy">
            シンプルに、美しく。<span class="u-lineBreak"></span>
            すべてのデバイスで映える<span class="u-lineBreak"></span>
            ウェブサイトをコードで支えます。
        </h2>
        <!-- scroll -->
        <div class="u-scroll">
            <span class="u-scroll--text">Scroll</span>
        </div>
    </div>
    <!-- /keyVisual -->

    <!-- Wave animation -->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave"
                    d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
    <!-- Wave animation -->
</div>

<!-- about -->
<section id="about" class="l-about l-section">
    <h2 class="p-section__title">ABOUT</h2>
    <div class="l-section__wrapper">
        <h3 class="p-content__title">ABOUT ME</h3>
        <div class="l-about__wrapper">
            <div class="p-about__left">
                <img class="p-about__left--image" src="<?php echo get_theme_file_uri('./assets/images/handball.jpeg'); ?>" alt="cat">
            </div>
            <div class="p-about__right">
                <p class="p-about__right--text">
                    <span class="u-fontSize__lg">「ふかたゆうき」</span>と申します。<span class="u-lineBreak"></span>
                    Webコーダーとしてキャリアを築くため、日々スキルを磨いています。<span class="u-lineBreak"></span>
                    HTML / CSS(SCSS) / JavaScript(jQuery) を習得し、これまでに複数の模写コーディングやオリジナル制作を行ってきました。
                    現在は WordPress を学習中で、静的なコーディングだけでなく動的なサイト構築にも対応できるよう成長を続けています。
                    「デザインを壊さない正確な実装」と「ユーザーにとって使いやすいサイト作り」を大切にしています。
                </p>
                <p class="p-about__right--hobby">
                    <span class="u-fontSize__lg">「趣味」</span>は
                    <span class="u-lineBreak"></span>
                    コーディング、スポーツ観戦です。特に浦和レッズ（サッカー）をよく観ます。
                </p>
            </div>
        </div>
        <!-- 年表 -->
        <h3 class="p-content__title">CAREER</h3>
        <div class="p-timeline">
            <div class="p-timeline__item">
                <div class="p-timeline__date">2023年 12月</div>
                <div class="p-timeline__content">
                    東京で働いていたが、体調を崩したのをきっかけに埼玉県の実家に戻る。デスクワークで働きたく、元々興味のあったWeb系の職種に転職すべく、HTML,CSSから勉強を始める。
                </div>
            </div>
            <div class="p-timeline__item">
                <div class="p-timeline__date">2024年~</div>
                <div class="p-timeline__content">
                    HTML,CSSに加えてJavaScript(jQuery)の勉強を始める。
                    簡単なWebサイトを作れるようになる。
                </div>
            </div>
            <div class="p-timeline__item">
                <div class="p-timeline__date">2025年~7月</div>
                <div class="p-timeline__content">
                    独学で本格的にHTML,CSS,JavaScript(jQuery)を勉強し、静的なサイトを制作する。
                </div>
            </div>
            <div class="p-timeline__item">
                <div class="p-timeline__date">2025年8月~</div>
                <div class="p-timeline__content">
                    現在、動的なサイトを制作したく、WordPressを勉強中。
                </div>
            </div>
        </div>
        <!-- skill -->
        <h3 class="p-content__title">SKILL</h3>
        <div class="p-accordion__wrapper">
            <div class="p-accordion__wrapper--item">
                <h4 class="p-accordion__title js-accordion-title">
                    HTML,CSS
                </h4>
                <div class="p-accordion__content">
                    <p class="p-accordion__text">
                        HTML5とCSS3を用いて、デザインカンプからサイトをコーディング出来ます。また、レスポンシブ対応も可能です。デザインに忠実なサイト制作を意識しています。
                    </p>
                </div>
            </div>
            <div class="p-accordion__wrapper--item">
                <h4 class="p-accordion__title js-accordion-title">
                    Sass
                </h4>
                <div class="p-accordion__content">
                    <p class="p-accordion__text">
                        mixinや変数などを用いて、デザインカンプからサイトをコーディング出来ます。また、レスポンシブ対応も可能です。保守しやすいサイト制作を意識しています。
                    </p>
                </div>
            </div>
            <div class="p-accordion__wrapper--item">
                <h4 class="p-accordion__title js-accordion-title">
                    JavaScript
                </h4>
                <div class="p-accordion__content">
                    <p class="p-accordion__text">
                        簡単な動きをつけるための実装ができます。
                        ChatGPTやネット記事のコードをコピー&ペーストして書いています。
                        現在、自分でコードを書けるようになるため勉強中です。
                    </p>
                </div>
            </div>
            <div class="p-accordion__wrapper--item">
                <h4 class="p-accordion__title js-accordion-title">
                    jQuery
                </h4>
                <div class="p-accordion__content">
                    <p class="p-accordion__text">
                        フェードイン、フェードアウト、アコーディオン、ハンガーガーメニューなどが実装できます。
                        ChatGPTやネット記事のコードをコピー&ペーストして書いています。
                        現在、自分でコードを書けるようになるため勉強中です。
                    </p>
                </div>
            </div>
             <div class="p-accordion__wrapper--item">
                <h4 class="p-accordion__title js-accordion-title">
                    WordPress
                </h4>
                <div class="p-accordion__content">
                    <p class="p-accordion__text">
                        オリジナルテーマでの開発ができます。
                        プラグインを使用してコンタクトフォームの実装も出来ます。
                    </p>
                </div>
            </div>
            <div class="p-accordion__wrapper--item">
                <h4 class="p-accordion__title js-accordion-title">
                    Figma
                </h4>
                <div class="p-accordion__content">
                    <p class="p-accordion__text">
                        デザインカンプからのコーディングが出来ます。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /about -->

<!-- work -->
<section id="work" class="l-work l-section">
    <h2 class="p-section__title">WORK</h2>
    <div class="l-section__wrapper p-mockup__wrapper">
        <div class="p-mockup">
            <div class="p-mockup__image">
                <img src="<?php echo get_theme_file_uri('./assets/images/ABC-English-School.jpg'); ?>" class="p-mockup__image--item"
                    alt="ABC-English-School">
            </div>
            <h3 class="p-mockup__title">ABC-English-School</h3>
            <ul class="p-mockup__list">
                <li class="p-mockup__list--item">
                    HTML,CSS
                </li>
                <li class="p-mockup__list--item">
                    Sass
                </li>
                <li class="p-mockup__list--item">
                    JavaScript
                </li>
                <li class="p-mockup__list--item">
                    jQuery
                </li>
                <li class="p-mockup__list--item">
                    WordPress
                </li>
            </ul>
            <div class="p-mockup__label">
                <span class="p-mockup__label--item">架空のサイト</span>
            </div>
            <a href="<?php echo home_url('/abc-english-school/') ?>" class="c-button__item--sub">詳細を見る</a>
        </div>
        <div class="p-mockup">
            <div class="p-mockup__image">
                <img src="<?php echo get_theme_file_uri('./assets/images/DESIGN_CAMPUS.jpg'); ?>" class="p-mockup__image--item" alt="DESIGN_CAMPUS">
            </div>
            <h3 class="p-mockup__title">DESIGN_CAMPUS</h3>
            <ul class="p-mockup__list">
                <li class="p-mockup__list--item">
                    HTML,CSS
                </li>
                <li class="p-mockup__list--item">
                    Sass
                </li>
                <li class="p-mockup__list--item">
                    JavaScript
                </li>
                <li class="p-mockup__list--item">
                    jQuery
                </li>
            </ul>
            <div class="p-mockup__label">
                <span class="p-mockup__label--item">架空のサイト</span>
                <span class="p-mockup__label--item">LP</span>
            </div>
            <a href="<?php echo home_url('/design_campus/') ?>" class="c-button__item--sub">詳細を見る</a>
        </div>
        <div class="p-mockup">
            <div class="p-mockup__image">
                <img src="<?php echo get_theme_file_uri('./assets/images/portfolio-site.jpg'); ?>" class="p-mockup__image--item"
                    alt="Portfolio-site">
            </div>
            <h3 class="p-mockup__title">Portfolio-site</h3>
            <ul class="p-mockup__list">
                <li class="p-mockup__list--item">
                    HTML,CSS
                </li>
                <li class="p-mockup__list--item">
                    Sass
                </li>
                <li class="p-mockup__list--item">
                    jQuery
                </li>
                <li class="p-mockup__list--item">
                    WordPress
                </li>
            </ul>
            <div class="p-mockup__label">
                <span class="p-mockup__label--item">Portfolioサイト</span>
            </div>
            <a href="<?php echo home_url('/portfolio-site') ?>" class="c-button__item--sub">詳細を見る</a>
        </div>
    </div>
</section>
<!-- work -->


<?php get_footer(); ?>