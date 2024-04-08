<?php

/* Template name: Programms */
?>

<?php get_header() ?>


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

        <div class="page__content">
            <?php the_content() ?>
        </div>
    </section>
</div>








        



        <?php get_footer() ?>