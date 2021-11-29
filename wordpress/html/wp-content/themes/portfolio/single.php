<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
    <div class="single">
        <!-- サムネイルの出力 -->
        <?php the_post_thumbnail(); ?>
        <h3><?php the_title(); ?></h3>
        <div datetime="<?php the_time('Y-m-d'); ?>">
            <?php the_time('Y/m/d'); ?>
            <?php the_category(', '); ?>
        </div>
        <p><?php the_content(); ?></p>
    <?php endwhile; endif; ?>
        <?php previous_post_link('%link', '前のページ'); ?>
        <?php next_post_link('%link', '次のページ'); ?></p>
    </div>
<?php get_footer(); ?>