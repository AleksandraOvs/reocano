<div href="<?php echo the_permalink() ?>" class="entry-post__inner">
<?php if(has_post_thumbnail()) : ?>
              <div class="entry-img">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('mediumpic'); ?>
                </a>
              </div>
            <?php endif; ?>
    <?php //echo get_the_post_thumbnail() ?>
    <div class="entry-post__inner__head">
        <h3><?php the_title(); ?></h3>
        <div class="entry-post__excerpt"><?php the_excerpt() ?></div>
    </div>

</div>