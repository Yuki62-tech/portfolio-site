<?php get_header(); ?>
<div class="p-subPage__wrapper">
    <section id="work" class="p-subPage__wrapper--sub">
        <h2 class="p-section__title">Portfolioサイト</h2>
        <div class="p-subPage__container">
            <img src="<?php echo get_theme_file_uri('./assets/images/portfolio-site.jpg'); ?>" class="p-subPage__image"
                    alt="portfolio-site">
            <dl class="p-desc">
                <dt class="p-desc__term">名前</dt>
                <dd class="p-desc__data">Portfolio-site</dd>
                <dt class="p-desc__term">制作日数</dt>
                <dd class="p-desc__data">6日(目安)</dd>
                <dt class="p-desc__term">技術</dt>
                <dd class="p-desc__data">
                    <ul>
                        <li>HTML,CSS</li>
                        <li>Sass</li>
                        <li>jQuery</li>
                        <li>WordPress</li>
                    </ul>
                </dd>
                <dt class="p-desc__term">ポイント</dt>
                <dd class="p-desc__data">
                    自分のポートフォリオサイトです。サイドバーでメニューを表示することによって必要な部分のコンテンツを見やすくしました。WordPressで作成しており、レスポンシブ対応もしてあります。
                </dd>
            </dl>
        </div>
        <div class="c-button__wrapper">
            <div class="c-button">
                <a href="<?php echo home_url('/#work') ?>" class="c-button__item">TOPへ戻る</a>
            </div>
            <div class="c-button">
                <a href="https://fukata-portfolio.com/" class="c-button__item">サイトページへ</a>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>