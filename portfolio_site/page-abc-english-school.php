<?php get_header(); ?>
<div class="p-subPage__wrapper">
    <section id="work" class="p-subPage__wrapper--subPage">
        <h2 class="p-section__title">ABC-English-School</h2>
        <div class="p-subPage__container">
            <img src="<?php echo get_theme_file_uri('./assets/images/ABC-English-School.jpg'); ?>" class="p-subPage__image"
                    alt="ABC-English-School">
            <dl class="p-desc">
                <dt class="p-desc__term">名前</dt>
                <dd class="p-desc__data">ABC-English-School</dd>
                <dt class="p-desc__term">制作日数</dt>
                <dd class="p-desc__data">5日(目安)</dd>
                <dt class="p-desc__term">技術</dt>
                <dd class="p-desc__data">
                    <ul>
                        <li>HTML,CSS</li>
                        <li>Sass</li>
                        <li>JavaScript</li>
                        <li>jQuery</li>
                        <li>WordPress</li>
                    </ul>
                </dd>
                <dt class="p-desc__term">ポイント</dt>
                <dd class="p-desc__data">
                    友人の実家が英会話教室を運営していて、サイトを持っておらず、集客に困っていました。自分に作成依頼が来たのを想定して作成しました。
                    WordPressで作成しています。下層ページも作成しています。また、今回のWordPressサイト作成でテンプレート階層や、メインクエリ、サブクエリなどを学ぶことができました。
                </dd>
            </dl>
        </div>
        <div class="c-button__wrapper">
            <div class="c-button">
                <a href="<?php echo home_url('/#work') ?>" class="c-button__item">TOPへ戻る</a>
            </div>
            <div class="c-button">
                <a href="https://abc-english-school.fukata-portfolio.com/" class="c-button__item">サイトページへ</a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>