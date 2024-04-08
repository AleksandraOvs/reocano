<a href="<?php echo the_permalink() ?>" class="entry-post__inner">

    <?php echo get_the_post_thumbnail() ?>
    <div class="entry-post__inner__head">
        <h3><?php the_title(); ?></h3>
        <div class="entry-post__excerpt"><?php the_excerpt() ?></div>
    </div>

</a>