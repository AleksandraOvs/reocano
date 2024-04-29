<h2 class="site-page__title">
    Наши книги
</h2>
<div class="books-description">
    <p>Уникальные знания, приобретенные в наших путешествиях, учредитель и организатор Клуба Курандерос Павел Берснев бережно собирает и описывает в книгах. Они погружают читателей в мир традиционного врачевания и уникальных ритуалов аутентичных родовых шаманов.</p>
</div>
<?php
$args = array(
    'post_type' => 'books',
    'publish' => true,
    //'paged' => get_query_var('paged'),
);
query_posts($args);
if (have_posts()) : ?>
    
    <div class="swiper books-slider">


        <div class="swiper-wrapper books-slider__wrapper">

            <?php while (have_posts()) : the_post(); ?>
                <div class="swiper-slide books-slider__slide">

                    <div class="entry-post__books__item">
                        <a class="book-link" href="<?php the_permalink() ?>">
                            <?php echo get_the_post_thumbnail() ?>

                            <div class="entry-post__excerpt"><?php the_excerpt() ?></div>
                        </a>
                        <!-- <div class="entry-post__books__item__head">
                            
                        </div>    -->
                        <h3><?php the_title(); ?></h3>

                        <a class="more-book-button" href="<?php the_permalink() ?>">Подробнее</a>

                        <a class="button">Купить</a>
                    </div>


                    <!-- <div class="entry-post__books__quote">
                            <div class="post__books__quote">
                                <?php //if ($quote = carbon_get_post_meta(get_the_ID(), 'crb_boot_quote')){
                                // echo $quote;
                                //}
                                ?>
                            </div>
                             
                        </div> -->


                </div>
            <?php endwhile; ?>


        </div>


        <div class="books-slider__pagination"></div>
        

    </div>
    <div class="books-slider__controls">
        <div class="books-slider__button-prev">
            <svg width="27" height="50" viewBox="0 0 27 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.553106 23.6279L23.0049 0.565417C23.7405 -0.189756 24.9315 -0.188486 25.6658 0.569323C26.3996 1.32704 26.3977 2.55447 25.662 3.31023L4.54666 25.0001L25.6628 46.6899C26.3984 47.4457 26.4003 48.6724 25.6666 49.4302C25.2985 49.8101 24.8162 50 24.3339 50C23.8528 50 23.3725 49.8113 23.005 49.4341L0.553106 26.3722C0.198813 26.0091 1.56258e-06 25.5149 1.56258e-06 25.0001C1.56258e-06 24.4853 0.199381 23.9917 0.553106 23.6279Z" fill="#252525" />
            </svg>
        </div>

        <div class="books-slider__button-next">
            <svg width="27" height="50" viewBox="0 0 27 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.6627 26.3721L3.21092 49.4346C2.47532 50.1898 1.28435 50.1885 0.549981 49.4307C-0.183824 48.673 -0.181928 47.4455 0.553773 46.6898L21.6692 24.9999L0.553018 3.31015C-0.182588 2.55429 -0.184484 1.32763 0.549226 0.569824C0.917361 0.189941 1.39964 1.2235e-07 1.88193 1.64512e-07C2.36298 2.06567e-07 2.84336 0.188675 3.21084 0.565918L25.6627 23.6278C26.017 23.9909 26.2158 24.4851 26.2158 24.9999C26.2158 25.5147 26.0164 26.0083 25.6627 26.3721Z" fill="#252525" />
            </svg>
        </div>
    </div>

<?php endif; ?>