            <h2 class="site-page__title" id="programms">
                Авторские программы
            </h2>
            <div class="programms-description">
                <p>Наши программы путешествий — это авторские программы Павла Берснева, Юлии Грабарь и команды Клуба Курандерос. Они составлены со знанием, опытом и любовью к древним цивилизациям, традиционной культуре и самобытности коренных народов. Мы собрали настоящую сокровищницу знаний, ритуалов и обычаев, которые помогают участникам наших программ путешествий познать мир, себя и найти ключи к душевному и физическому здоровью и гармонии.</p>


                <p>
                    Мы осуществляем как групповые, так и индивидуальные программы путешествий по вашему запросу.</p>
            </div>
            <?php
            $args = array(
                'post_type' => 'programms',
                'publish' => true,
                //'paged' => get_query_var('paged'),
            );
            query_posts($args);
            if (have_posts()) : ?>
                <div class="archive-posts__grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="entry-post__programm">
                            <div class="entry-post__programm__inner-img">
                                <?php echo get_the_post_thumbnail() ?>

                                <div class="entry-post__inner__head__summary">
                                <div class="entry-post__inner__head">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="entry-post__excerpt"><?php the_excerpt() ?></div>
                                </div>
                                <a href="/" class="entry-post__programm__more">
                                    <span>Подробнее</span>
                                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.850211 4.76837e-07H7.15039C7.21418 0.000191212 7.2767 0.0169754 7.33123 0.0485463C7.38576 0.0801172 7.43024 0.125279 7.45987 0.179171C7.4895 0.233063 7.50316 0.293644 7.49939 0.354393C7.49561 0.415143 7.47454 0.47376 7.43845 0.523935L4.28836 4.86501C4.1578 5.045 3.8435 5.045 3.71259 4.86501L0.562503 0.523935C0.52604 0.473865 0.504658 0.415218 0.500679 0.354367C0.496699 0.293517 0.510275 0.23279 0.539932 0.178783C0.569588 0.124777 0.614191 0.0795579 0.668893 0.048038C0.723596 0.0165186 0.786306 -9.53674e-05 0.850211 4.76837e-07Z" fill="#111111" />
                                    </svg>


                                </a>
                            </div>
                            </div> 

                            

                            <div class="entry-post__programm__content">
                                <?php the_content() ?>
                            </div>


                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>