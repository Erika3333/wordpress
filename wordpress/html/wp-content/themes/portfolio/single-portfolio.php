<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <div class="single">
    <div class="single_card">
        <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail(array(300, 300), array( 'class' => 'thumbimg')); ?>
        <?php else: ?>
            <img src="<?php bloginfo('template_url'); ?>/images/nophoto.jpg">
        <?php endif; ?>
        </a>
        <h1><?php the_title(); ?></h1>
        <div datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></div>
        <p><?php the_category(', '); ?></p>
        <p><?php the_content('Read more'); ?></p>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
    </div>

<?php previous_post_link('%link', '古い記事へ'); ?>
<?php next_post_link('%link', '新しい記事へ'); ?>

<?php get_footer(); ?>