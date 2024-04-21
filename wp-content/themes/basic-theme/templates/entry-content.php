<div href="<?php echo the_permalink() ?>" class="entry-post__inner">

              <div class="entry-img">
                <?php if(has_post_thumbnail()) {
                  echo get_the_post_thumbnail();
                }else {
                  echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                  . '/images/placeholder.jpg" />';
                }?>
                <a href="<?php the_permalink(); ?>">
                </a>
              </div>
         
    <?php //echo get_the_post_thumbnail() ?>
    <div class="entry-post__inner__head">
        <h3><?php the_title(); ?></h3>
        <div class="entry-post__excerpt"><?php the_excerpt() ?></div>
        <a href="" class="archive__more-button">Читать далее</a>
    </div>

</div>