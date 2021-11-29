<?php get_header(); ?>

<section class="hearder_img">
    <h3>
        <a href=""></a>
        <img src="<?php bloginfo('template_url'); ?>/images/headerJapan.png"　alt="TOP画像">
    </h3>
</section>

<section class="portfolio">
    <h2 class="content_info">ポートフォリオ</h2>
    <p class="content_info">-作品一覧-</p>
    <div class="contents">
        <ul>
        <?php 
            $args = [
                'post_type' => 'portfolio',
                'posts_per_page' => 3,
                'paged' => $pased
            ];
            $the_query = new WP_Query($args); 
        ?>
        <?php if( $the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(array(300, 300), array( 'class' => 'thumbimg')); ?>
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/images/nophoto.jpg">
                    <?php endif; ?>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
            </li>
        <?php endwhile; ?>
        <?php endif; ?>
    </ul>
    </div>
    <div class="line_botton">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio">ポートフォリ一覧</a>
    </div>   
</section>

<section class="blog">
    <h2 class="content_info">ブログ</h2>
    <p class="content_info">-新着記事一覧-</p>
    <div class="blog_contet">
    <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <div class="blog_card">
            <div class="blog_image">
                <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail(array(200, 200), array( 'class' => 'thumbimg')); ?>
                <?php else: ?>
                    <img src="<?php bloginfo('template_url'); ?>/images/nophoto.jpg">
                <?php endif; ?>
                </a>
            </div>
            <div class="blog_title">
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo get_the_date(); ?></p>
                    <p><?php the_excerpt(); ?></p>
                </a>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <div class="line_botton">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">ブログ一覧</a>
    </div>   
</section>

<?php get_footer(); ?>