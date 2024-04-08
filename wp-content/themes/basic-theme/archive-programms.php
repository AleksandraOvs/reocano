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

            </div>
        </div>

        <div class="site-page__content">
            <div class="fixed-container">

                <h2 class="site-page__title toright"> <?php post_type_archive_title(); ?> </h2>
                <?php
                if (have_posts()) {
                ?>
                    <div class="archive-posts__grid">
                        <?php

                        // Load posts loop.
                        while (have_posts()) {
                            the_post();
                        ?>
                            <?php get_template_part('templates/entry-content'); ?>
                        <?php
                            //get_template_part( 'temps/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
                        }

                        // Previous/next page navigation.
                        //twenty_twenty_one_the_posts_navigation();
                        ?>
                    </div>
                <?php
                } else {

                    // If no content, include the "No posts found" template.
                    get_template_part('temps/content-none');
                }
                ?>
            </div>
        </div>




    </section>

</div>
</main>

<?php
get_footer();
