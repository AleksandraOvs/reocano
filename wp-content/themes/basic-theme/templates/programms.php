            <h2 class="site-page__title">
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
                        <div class="entry-post__inshortcode">

                            <?php echo get_the_post_thumbnail() ?>
                            <div class="entry-post__inner__head">
                                <h3><?php the_title(); ?></h3>
                                <div class="entry-post__excerpt"><?php the_excerpt() ?></div>
                                <a href="/" class="entry-post__inshortcode__more">Подробнее</a>
                            </div>

                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>