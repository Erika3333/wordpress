<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <!-- ファビコン指定 -->
        <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <section class="header">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        ♡<?php bloginfo('name'); ?>♡
                    </a>
                </div>
                <ul class="header-navigation">
                    <li><a href="/">ホーム</a></li>
                    <li><a href="/profile">プロフィール</a></li>
                    <li><a href="/portfolio">ポートフォリオ</a></li>
                    <li><a href="/blog">ブログ</a></li>
                    <li class="right-border"><a href="/info">お問い合わせ</a></li>
                </ul>
            </section>
        </header>

