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

        <?php
      
        if (have_posts()) : ?>
    <section class="site-page" <?php //if (is_active_sidebar('page-sidebar1')) : echo 'style="width:73%;"'; endif;
                                ?>>
        <div class="site-page__inner">
            <div class="fixed-container">
                <h2 class="site-page__title toright"> Блог </h2>
            </div>
        </div>

            <div class="fixed-container">
            <div class="archive-posts__grid">
                <?php while (have_posts()) : the_post(); ?>
                  <?php get_template_part('templates/entry-content'); ?>
                <?php endwhile; ?>
                </div>
            </div>
       



    </section>
 <?php endif; ?>
</div>
</main>



<?php
get_footer();
