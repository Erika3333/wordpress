<?php get_header(); ?>

<section class="portfolio_archive">
    <h2 class="content_info">ポートフォリオ</h2>
    <p class="content_info">-作品一覧-</p>
    <div class="contents">
        <div class="conte_archive">
            <ul>
            <?php 
                $args = [
                    'post_type' => 'portfolio',
                    // 'posts_per_page' => 5,
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
    </div> 
</section>







<?php get_footer(); ?>
