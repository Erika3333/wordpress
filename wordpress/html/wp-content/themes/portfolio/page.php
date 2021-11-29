<?php
/*
Template Name: プロフィール
*/
?>

<?php get_header(); ?>

<div class="page">
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
    <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
    <p class="date"><?php echo get_the_date(); ?></p>
    <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>