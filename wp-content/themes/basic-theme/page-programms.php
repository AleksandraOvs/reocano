<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

<div class="page-container">

    <section class="site-page" <?php //if (is_active_sidebar('page-sidebar1')) : echo 'style="width:73%;"'; endif;
                                ?>>
        <div class="page-header__inner">
            <div class="fixed-container">
                <ul class="breadcrumbs__list">
                    <?php echo true_breadcrumbs(); ?>
                </ul>
                <h2 class="site-page__title toright"> <?php the_title(); ?> </h2>
            </div>
        </div>

        <?php
        $args = array(
            'post_type' => 'programms',
            'publish' => true,
            //'paged' => get_query_var('paged'),
        );
        query_posts($args);
        if (have_posts()) : ?>
            <div class="fixed-container">

                <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php echo the_permalink() ?>" class="programms-posts__grid__item">
                        <div class="programms-posts__grid__item__img">
                        
                            <?php echo get_the_post_thumbnail() ?>

                            <div class="programms-posts__grid__item__summary">
                                <div class="programms-posts__grid__item__head">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="entry-post__excerpt"><?php the_excerpt() ?></div>
                                </div>
                                <!-- <a href="<?php //echo the_permalink() 
                                                ?>" class="entry-post__button-more">
                                    <span>Подробнее</span>
                                </a> -->
                            </div>
                        </div>

                    </a>
                <?php endwhile; ?>

            </div>
        <?php endif; ?>



    </section>

</div>
</main>



<?php
get_footer();
