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
        <div class="full-width-container">
            <?php get_template_part('templates/books') ?>
        </div>
    </div>

    <div class="section-blog">
        <div class="fixed-container">
            <h2 class="site-page__title">Блог Клуба</h2>
            <div class="section-blog__desc">
            Узнайте наши новости, информацию о мероприятиях и других активностях Клуба. Также в Блоге публикуются научно-познавательные статьи руководства Клуба. Они погрузятся в иной, манящий мир шаманизма.
            </div>
            <?php
            $query = new WP_Query([
                'post_type' => 'post',
                // 'posts_per_page' => 10,F
            ]);

            ?>
            <div class="posts__grid">
            <?php

            while ($query->have_posts()) {
                $query->the_post();
            ?>
                <div class="entry-post__inner">

                    <a href="<?php the_permalink() ?>" class="entry-img">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full', array('class' => 'destr-img'));
                        } else {
                            echo '<img class="destr-img" src="' . get_bloginfo('stylesheet_directory')
                                . '/images/placeholder.jpg" />';
                        } ?>

                    </a>
                    <div class="entry-post__inner__head">
                        <h3><?php the_title(); ?></h3>
                        <?php //the_excerpt() ?>
                        <a href="<?php echo the_permalink() ?>" class="button">Читать далее</a>
                    </div>

                </div>
            <?php

            }

            wp_reset_postdata(); // ВАЖНО вернуть global $post обратно
            ?>
            </div>
        </div>
    </div>



</section>

<?php get_footer() ?>