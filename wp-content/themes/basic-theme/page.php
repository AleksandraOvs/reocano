<?php

/* Template name: Programms */
?>

<?php get_header() ?>


<div class="page-container">

    <section class="site-page" <?php //if (is_active_sidebar('page-sidebar1')) : echo 'style="width:73%;"'; endif;
                                ?>>
        <div class="page-header__inner">
            <div class="fixed-container">
                <h2 class="site-page__title toopacity white"> <?php the_title(); ?> </h2>
            </div>
        </div>

        <div class="page__content">
            <?php the_content() ?>
        </div>
    </section>
</div>








        



        <?php get_footer() ?>