<?php get_header() ?>

<?php get_template_part('templates/hero'); ?>
<section class="section-content">
    <?php the_content() ?>

    <div class="section-programms">
        <div class="fixed-container">
            <?php get_template_part('templates/programms') ?>
        </div>
    </div>

    <div class="section-books background-grey">
        <div class="fixed-container">
            <?php get_template_part('templates/books') ?>
        </div>
    </div>



</section>

<?php get_footer() ?>