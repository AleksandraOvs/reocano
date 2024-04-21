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

                <h2 class="site-page__title toright"> Наши книги </h2>

            </div>
        </div>

        <div class="site-page__content">
            <div class="fixed-container">
                <?php
            if (have_posts()) : ?>
    
        <div class="books-archive__wrapper">

            <?php while (have_posts()) : the_post(); ?>
                    <div class="entry-post__books__item">
                        <a class="book-link" href="<?php the_permalink() ?>">
                            <?php echo get_the_post_thumbnail() ?>

                            <div class="entry-post__excerpt"><?php the_excerpt() ?></div>
                        </a>
                        <!-- <div class="entry-post__books__item__head">
                            
                        </div>    -->
                        <h3><?php the_title(); ?></h3>
                        <a class="button fill">Купить</a>
                    </div>


                    <!-- <div class="entry-post__books__quote">
                            <div class="post__books__quote">
                                <?php //if ($quote = carbon_get_post_meta(get_the_ID(), 'crb_boot_quote')){
                                // echo $quote;
                                //}
                                ?>
                            </div>
                             
                        </div> -->
            <?php endwhile; ?>

<?php endif; ?>
                
            </div>
        </div>




    </section>

</div>
</main>

<?php
get_footer();
