<?php 
    $args = array( 'posts_per_page' => 3 ); // 表示件数の指定
    $posts = get_posts( $args );
    foreach( $posts as $post ):
        setup_postdata( $post );
?>
<dl class="">
    <a href="<?php the_parmalink(); ?>">
        <dt><?php the_time("Y.n.j"); ?></dt>
        <dd class="">
            <span><?php the_title(); ?></span>
        </dd>
    </a>
</dl>
<?php endforeach; wp_reset_postdata(); ?>