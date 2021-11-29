<?php get_header(); ?>

<section class="blog">
    <h3 class="blog_info">ブログ一覧</h3>
    <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <div class="blog_card">
            <div class="blog_image">
                <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(array( 'class' => 'thumbimg')); ?>
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
</section>

<?php get_footer(); ?>
