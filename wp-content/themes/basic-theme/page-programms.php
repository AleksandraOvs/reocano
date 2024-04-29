<?php

/**
 * Template name: page programms
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
        <?php
        if (has_post_thumbnail()) { // условие, если есть миниатюра
            the_post_thumbnail('full'); // если параметры функции не указаны, то выводится миниатюра текущего поста, размер thumbnail
        } 
        ?>
            <div class="fixed-container">
                <h2 class="site-page__title toopacity white"> Авторские программы </h2>
            </div>
        </div>

        <div class="fixed-container">

        <?php
            $args = array(
                'post_type' => 'programms',
                'publish' => true,
                //'paged' => get_query_var('paged'),
            );
            query_posts($args);
            if (have_posts()) : ?>
                <ul class="programms__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="programms__list__item">
                            <div class="programms__list__item__content">
                                <h3 class="white"><?php the_title(); ?></h3>
                                <div class="white programms__excerpt"><?php the_excerpt() ?>
                                </div>
                            </div>

                            <div class="programms__list__item__more">
                                <a href="<?php the_permalink() ?>" class="programms__more-button button">Узнать подробнее</a>
                            </div>


                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            </div>


    </section>

</div>



<?php
get_footer();
