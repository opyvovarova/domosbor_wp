<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Domosbor
 */

get_header();
?>

  <!-- Cover -->
  <section id="cover" class="cover">
            <div class="container">
                <h1 class="cover__title"><?php echo strip_tags(get_field('first_screen_title'), '<br><b><strong>'); ?></h1>
                <div class="cover__subtitle"><?php echo text_wrapper(get_field('first_screen_description')); ?></div>

                <div class="filter tabs">
                    <div class="filter__type-btns tabs__head">
                        <div class="tabs__placeholder button">
                            <span>Построить</span>
                            <div class="tabs__arrow"></div>
                        </div>
                        <div class="tabs__buttons">
                            <button class="button active" data-tab-target="main-build">Построить</button>
                            <button class="button" data-tab-target="main-buy">Купить</button>
                            <button class="button" data-tab-target="main-rent">Арендовать</button>
                        </div>
                    </div>

                    <div class="filter__panels tabs__body">
                        <div class="filter__panel-wrap tabs__content active" data-tab-id="main-build">
                            <div class="filter__col">
                                <div class="filter__type">Тип строения</div>
                                <select class="filter__value select" name="Тип строения">
                                    <option value="Дом">Дом</option>
                                    <option value="Баня">Баня</option>
                                    <option value="Гараж">Гараж</option>
                                    <option value="Навес">Навес</option>
                                    <option value="Коммерческий объект">Коммерческий объект</option>
                                </select>
                            </div>
                            <div class="filter__col">
                                <div class="filter__type">Габариты, м</div>
                                <select class="filter__value select" name="Габариты">
                                    <option value="10x10">10x10</option>
                                    <option value="15x15">15x15</option>
                                    <option value="20x20">20x20</option>
                                    <option value="25x25">25x25</option>
                                    <option value="30x30">30x30</option>
                                </select>
                            </div>

                            <div class="filter__col">
                                <div class="filter__type">Общая площадь, м²</div>

                                <div class="filter__value range-slider" data-min="100" data-max="1000">
                                    <div class="range-slider__values">
                                        <label class="range-slider__value">
                                            <span>От</span>
                                            <input type="text" name="min" placeholder="100" style="width: 44px;">
                                        </label>
                                        <label class="range-slider__value">
                                            <span>До</span>
                                            <input type="text" name="max" placeholder="1 000" style="width: 57px;">
                                        </label>
                                    </div>
                                    <div class="range-slider__range"></div>
                                </div>
                            </div>

                            <div class="filter__col">
                                <div class="filter__type">Стоимость, ₽</div>

                                <div class="filter__value range-slider" data-min="100000" data-max="1000000">
                                    <div class="range-slider__values">
                                        <label class="range-slider__value">
                                            <span>От</span>
                                            <input type="text" name="min" placeholder="100 000" style="width: 76px;">
                                        </label>
                                        <label class="range-slider__value">
                                            <span>До</span>
                                            <input type="text" name="max" placeholder="1 000 000" style="width: 89px;">
                                        </label>
                                    </div>
                                    <div class="range-slider__range"></div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__panel-wrap tabs__content" data-tab-id="main-buy">
                            <div class="filter__col">
                                <div class="filter__type">Тип строения</div>
                                <select class="filter__value select" name="Тип строения">
                                    <option value="Дом">Дом</option>
                                    <option value="Баня">Баня</option>
                                    <option value="Гараж">Гараж</option>
                                    <option value="Навес">Навес</option>
                                    <option value="Коммерческий объект">Коммерческий объект</option>
                                </select>
                            </div>
                            <div class="filter__col">
                                <div class="filter__type">Габариты, м</div>
                                <select class="filter__value select" name="Габариты">
                                    <option value="10x10">10x10</option>
                                    <option value="15x15">15x15</option>
                                    <option value="20x20">20x20</option>
                                    <option value="25x25">25x25</option>
                                    <option value="30x30">30x30</option>
                                </select>
                            </div>

                            <div class="filter__col">
                                <div class="filter__type">Общая площадь, м²</div>

                                <div class="filter__value range-slider" data-min="100" data-max="1000">
                                    <div class="range-slider__values">
                                        <label class="range-slider__value">
                                            <span>От</span>
                                            <input type="text" name="min" placeholder="100" style="width: 44px;">
                                        </label>
                                        <label class="range-slider__value">
                                            <span>До</span>
                                            <input type="text" name="max" placeholder="1 000" style="width: 57px;">
                                        </label>
                                    </div>
                                    <div class="range-slider__range"></div>
                                </div>
                            </div>

                            <div class="filter__col">
                                <div class="filter__type">Стоимость, ₽</div>

                                <div class="filter__value range-slider" data-min="100000" data-max="1000000">
                                    <div class="range-slider__values">
                                        <label class="range-slider__value">
                                            <span>От</span>
                                            <input type="text" name="min" placeholder="100 000" style="width: 76px;">
                                        </label>
                                        <label class="range-slider__value">
                                            <span>До</span>
                                            <input type="text" name="max" placeholder="1 000 000" style="width: 89px;">
                                        </label>
                                    </div>
                                    <div class="range-slider__range"></div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__panel-wrap tabs__content" data-tab-id="main-rent">
                            <div class="filter__col">
                                <div class="filter__type">Тип строения</div>
                                <select class="filter__value select" name="Тип строения">
                                    <option value="Дом">Дом</option>
                                    <option value="Баня">Баня</option>
                                    <option value="Гараж">Гараж</option>
                                    <option value="Навес">Навес</option>
                                    <option value="Коммерческий объект">Коммерческий объект</option>
                                </select>
                            </div>
                            <div class="filter__col">
                                <div class="filter__type">Габариты, м</div>
                                <select class="filter__value select" name="Габариты">
                                    <option value="10x10">10x10</option>
                                    <option value="15x15">15x15</option>
                                    <option value="20x20">20x20</option>
                                    <option value="25x25">25x25</option>
                                    <option value="30x30">30x30</option>
                                </select>
                            </div>

                            <div class="filter__col">
                                <div class="filter__type">Общая площадь, м²</div>

                                <div class="filter__value range-slider" data-min="100" data-max="1000">
                                    <div class="range-slider__values">
                                        <label class="range-slider__value">
                                            <span>От</span>
                                            <input type="text" name="min" placeholder="100" style="width: 44px;">
                                        </label>
                                        <label class="range-slider__value">
                                            <span>До</span>
                                            <input type="text" name="max" placeholder="1 000" style="width: 57px;">
                                        </label>
                                    </div>
                                    <div class="range-slider__range"></div>
                                </div>
                            </div>

                            <div class="filter__col">
                                <div class="filter__type">Стоимость, ₽</div>

                                <div class="filter__value range-slider" data-min="100000" data-max="1000000">
                                    <div class="range-slider__values">
                                        <label class="range-slider__value">
                                            <span>От</span>
                                            <input type="text" name="min" placeholder="100 000" style="width: 76px;">
                                        </label>
                                        <label class="range-slider__value">
                                            <span>До</span>
                                            <input type="text" name="max" placeholder="1 000 000" style="width: 89px;">
                                        </label>
                                    </div>
                                    <div class="range-slider__range"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="./search.html" class="open-extended">
                        <div class="icon">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <span>Расширенный поиск</span>
                    </a>
                    <button class="filter__res-button button">Подобрать</button>
                </div>
            </div>
        </section>
        <!-- End Cover -->
        <!-- Types -->
        <section id="types" class="types sec">
            <div class="container slider slider--lg">
                <h2 class="sec__title">Типы строений</h2>

                <ul class="types__list slider__list">
                    <li class="types__item slider__slide">
                        <a href="./building.html" class="type-card">
                            <div class="type-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/types/item-1.jpg);"></div>
                            <div class="type-card__count">358</div>
                            <div class="type-card__name">Дома</div>
                        </a>
                    </li>
                    <li class="types__item slider__slide">
                        <a href="./building.html" class="type-card">
                            <div class="type-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/types/item-2.jpg);"></div>
                            <div class="type-card__count">178</div>
                            <div class="type-card__name">Бани</div>
                        </a>
                    </li>
                    <li class="types__item slider__slide">
                        <a href="./building.html" class="type-card">
                            <div class="type-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/types/item-3.jpg);"></div>
                            <div class="type-card__count">152</div>
                            <div class="type-card__name">Гаражи</div>
                        </a>
                    </li>
                    <li class="types__item slider__slide">
                        <a href="./building.html" class="type-card">
                            <div class="type-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/types/item-4.jpg);"></div>
                            <div class="type-card__count">152</div>
                            <div class="type-card__name">Навесы</div>
                        </a>
                    </li>
                    <li class="types__item slider__slide">
                        <a href="./building.html" class="type-card">
                            <div class="type-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/types/item-5.jpg);"></div>
                            <div class="type-card__count">205</div>
                            <div class="type-card__name">Комм. объекты</div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Types -->
        <!-- Techs -->
        <section id="techs" class="techs sec">
            <div class="container">
                <h2 class="sec__title"><?php echo strip_tags(get_field('technologies_screen_title'), '<br><b><strong>'); ?></h2>

                <ul class="techs__list">

                <?php 
                    $args = array( 'post_type' => 'technologies', 'posts_per_page' => 100);
                    $loop = new WP_Query( $args );
                    while ( $loop-> have_posts() ) : $loop->the_post();
                ?>
                    <li class="techs__item">
                        <a href="<?php echo get_the_permalink(); ?>" class="tech-card">
                            <div class="tech-card__background" style="background-image: url(<?php echo get_field('technology_img'); ?>);"></div>
                            <div class="tech-card__name"><?php echo get_the_title(); ?></div>
                        </a>
                    </li>
                    <?php endwhile;?>
                    <?php wp_reset_query(); ?>

                </ul>
            </div>
        </section>
        <!-- End Techs -->
        <!-- Useful Links -->
        <section id="useful-links" class="useful-links sec">
            <div class="container slider slider--lg">
                <h2 class="sec__title">Полезные ссылки</h2>

                <ul class="useful-links__list slider__list">
                    <li class="useful-links__item slider__slide">
                        <div class="useful-links-card">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/useful-links/item-1.jpg" alt="">

                            <div class="useful-links-card__wrap">
                                <h3 class="useful-links-card__name">По этажности дома</h3>
                                <ul class="useful-links-card__list">
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Одноэтажные</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Полутораэтажные</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Двухэтажные</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Трехэтажные</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">С мансардным этажом</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">С цокольным этажом</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="useful-links__item slider__slide">
                        <div class="useful-links-card">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/useful-links/item-2.jpg" alt="">

                            <div class="useful-links-card__wrap">
                                <h3 class="useful-links-card__name">По стилю дома</h3>
                                <ul class="useful-links-card__list">
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Лофт</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Хай тек</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Шале</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Барнхаус</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Райта</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Фахверк</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Модерн</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="useful-links__item slider__slide">
                        <div class="useful-links-card">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/useful-links/item-3.jpg" alt="">

                            <div class="useful-links-card__wrap">
                                <h3 class="useful-links-card__name">По форме дома</h3>
                                <ul class="useful-links-card__list">
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">(г) образная</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">(п) образная</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">(т) образная</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Квадратная</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Круглая</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Треугольная</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Прямоугольная</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Многогранная</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="useful-links__item slider__slide">
                        <div class="useful-links-card">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/useful-links/item-4.jpg" alt="">

                            <div class="useful-links-card__wrap">
                                <h3 class="useful-links-card__name">По площади дома</h3>
                                <ul class="useful-links-card__list">
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">До 100 м2</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">100-150 м2</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">150-200 м2</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">200-250 м2</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">250-300 м2</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">от 300 м2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="useful-links__item slider__slide">
                        <div class="useful-links-card">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/useful-links/item-5.jpg" alt="">

                            <div class="useful-links-card__wrap">
                                <h3 class="useful-links-card__name">По этажности дома</h3>
                                <ul class="useful-links-card__list">
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Однокомнатные</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Двухкомнатные</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Трехкомнатные</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Четырехкомнатные</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Пятикомнатные</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">Шестикомнатные</a>
                                    </li>
                                    <li class="useful-links-card__item">
                                        <a href="./useful-links-single.html">От семи комнат</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Useful Links -->
        <!-- Projects -->
        <section id="projects" class="projects sec">
            <div class="container">
                <div class="sec__head">
                    <h2 class="sec__title">Хиты продаж</h2>
                    <a href="#" class="sec__show-more">Все хиты</a>
                </div>

                <div class="projects__slider slider">
                    <div class="slider__wrap">
                        <ul class="slider__list">
                            <li class="slider__slide">
                                <div class="project-card">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/projects/item-1.jpg" alt="">

                                    <div class="project-card__controls">
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#arrows"></use>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#heart"></use>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="project-card__wrap">
                                        <h3 class="project-card__name">Kontio Laaksolahti</h3>
                                        <div class="project-card__info">
                                            <p>Тип: дом</p>
                                            <p>Технология: Клееный брус</p>
                                            <p>Габариты: 100х100х100 </p>
                                        </div>
                                        <div class="project-card__price">1 000 000 ₽</div>
                                    </div>

                                    <a href="product-card.html" class="project-card__link"></a>
                                </div>
                            </li>
                            <li class="slider__slide">
                                <div class="project-card">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/projects/item-1.jpg" alt="">

                                    <div class="project-card__controls">
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#arrows"></use>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#heart"></use>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="project-card__wrap">
                                        <h3 class="project-card__name">Glass House 25A</h3>
                                        <div class="project-card__info">
                                            <p>Тип: дом</p>
                                            <p>Технология: Клееный брус</p>
                                            <p>Габариты: 100х100х100 </p>
                                        </div>
                                        <div class="project-card__price">1 000 000 ₽</div>
                                    </div>

                                    <a href="./product-card.html" class="project-card__link"></a>
                                </div>
                            </li>
                            <li class="slider__slide">
                                <div class="project-card">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/projects/item-1.jpg" alt="">

                                    <div class="project-card__controls">
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#arrows"></use>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#heart"></use>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="project-card__wrap">
                                        <h3 class="project-card__name">Г-69</h3>
                                        <div class="project-card__info">
                                            <p>Тип: дом</p>
                                            <p>Технология: Клееный брус</p>
                                            <p>Габариты: 100х100х100 </p>
                                        </div>
                                        <div class="project-card__price">1 000 000 ₽</div>
                                    </div>

                                    <a href="./product-card.html" class="project-card__link"></a>
                                </div>
                            </li>
                            <li class="slider__slide">
                                <div class="project-card">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/projects/item-1.jpg" alt="">

                                    <div class="project-card__controls">
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#arrows"></use>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#heart"></use>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="project-card__wrap">
                                        <h3 class="project-card__name">Н-49</h3>
                                        <div class="project-card__info">
                                            <p>Тип: дом</p>
                                            <p>Технология: Клееный брус</p>
                                            <p>Габариты: 100х100х100 </p>
                                        </div>
                                        <div class="project-card__price">1 000 000 ₽</div>
                                    </div>

                                    <a href="./product-card.html" class="project-card__link"></a>
                                </div>
                            </li>
                            <li class="slider__slide">
                                <div class="project-card">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/projects/item-1.jpg" alt="">

                                    <div class="project-card__controls">
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#arrows"></use>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#heart"></use>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="project-card__wrap">
                                        <h3 class="project-card__name">База отдыха Сибирь</h3>
                                        <div class="project-card__info">
                                            <p>Тип: дом</p>
                                            <p>Технология: Клееный брус</p>
                                            <p>Габариты: 100х100х100 </p>
                                        </div>
                                        <div class="project-card__price">1 000 000 ₽</div>
                                    </div>

                                    <a href="./product-card.html" class="project-card__link"></a>
                                </div>
                            </li>
                            <li class="slider__slide">
                                <div class="project-card">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/projects/item-1.jpg" alt="">

                                    <div class="project-card__controls">
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#arrows"></use>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#heart"></use>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="project-card__wrap">
                                        <h3 class="project-card__name">База отдыха Сибирь</h3>
                                        <div class="project-card__info">
                                            <p>Тип: дом</p>
                                            <p>Технология: Клееный брус</p>
                                            <p>Габариты: 100х100х100 </p>
                                        </div>
                                        <div class="project-card__price">1 000 000 ₽</div>
                                    </div>

                                    <a href="./product-card.html" class="project-card__link"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="slider__arrows">
                        <div class="slider__arrow slider__arrow--prev"></div>
                        <div class="slider__arrow slider__arrow--next"></div>
                    </div>
                    <div class="slider__pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Projects -->
        <!-- Advantages -->
        <section id="advantages" class="advantages sec">
            <div class="container">
                <h2 class="sec__title"><?php echo strip_tags(get_field('advantages_screen_title'), '<br><b><strong>'); ?></h2>

                <div class="advantages__wrap">
               
                    <ul class="advantages__list">
                    <?php 
                        while( have_rows('advantages_screen_items') ) : the_row();
                    ?>
                        <li class="advantages__item">
                            <div class="advantages__item-content">
                                <h3 class="advantages__name"><?php echo get_sub_field('advantage_screen_title'); ?></h3>
                                <div class="advantages__text"><?php echo get_sub_field('advantage_screen_desc'); ?></div>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>

                    <div class="advantages__tree-image"></div>
                </div>
            </div>

            <div class="advantages__frontground"></div>
        </section>
        <!-- End Advantages -->
        <!-- cost-form -->
        <section id="cost-form" class="cost-form">
            <div class="container">
                <div class="cost-form__body">
                    <form class="cost-form__form form" action="#" method="post">
                        <div class="form__field">
                            <input class="form__input form__input--grey" type="text" name="your-name" placeholder="Имя">
                        </div>

                        <div class="form__field">
                            <input class="form__input form__input--grey" type="email" name="your-mail" placeholder="Электронная почта">
                        </div>

                        <div class="form__field">
                            <input class="form__input form__input--grey" type="tel" name="your-phone" placeholder="Телефон" required>
                        </div>

                        <div class="form__field">
                            <textarea class="form__input form__input--grey form__input--textarea" name="your-message" placeholder="Сообщение"></textarea>
                        </div>

                        <label class="form__file">
                            <input type="file" name="your-files" placeholder="Прикрепить файлы">
                            <span class="icon"></span>
                            <span class="text">Прикрепить файлы</span>
                        </label>

                        <button class="form__send-btn button" type="submit">Отправить</button>
                    </form>

                    <ul class="socials">
                        <li class="socials__item">
                            <a href="#">
                                <svg>
                                    <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#telegram"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="socials__item">
                            <a href="#">
                                <svg>
                                    <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#whatsapp"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="socials__item">
                            <a href="#">
                                <svg>
                                    <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#viber"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="cost-form__head">
                    <h2 class="cost-form__title">Расчёт стоимости по вашему проекту</h2>
                    <div class="cost-form__desc">
                        <p>Мы считаем большим заблуждением, когда клиенты выбирают архитектурную студию по стоимости проектирования.
                            В частном жилом строительстве есть правило: стоимость проекта составляет 5-10% от стоимости его
                            реализации.</p>
                        <p>Не откладывайте с реализацией своих задумок, обращайтесь прямо сейчас!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End cost-form -->
        <!-- About Us -->
        <section id="about-short" class="about-short sec">
            <div class="container">
                <h2 class="sec__title"><?php echo text_wrapper(strip_tags(get_field('service_screen_title'), '<br><b><strong>')); ?></h2>

                <div class="about-short__wrap">
                    <div class="about-short__content">

                        <?php echo get_field('service_screen_content');  ?>
                        <a href="./about.html" class="button">Подробнее</a>
                    </div>

                    <div class="about-short__image" style="background-image: url(<?php echo get_field('service_screen_img'); ?>);"></div>
                </div>
            </div>
        </section>
        <!-- End About Us -->
        <!-- Partners -->
        <section id="partners" class="partners sec">
            <div class="container">
                <h2 class="sec__title">Партнеры сервиса</h2>

                <div class="partners__wrap">
                   
                    <div class="partners__group">
                        <div class="partners__group-head">
                            <h3 class="partners__type"><?php echo text_wrapper(strip_tags(get_field('architects_screen_title'), '<br><b><strong>')); ?></h3>
                            <a href="<?php echo get_post_type_archive_link('architects');?>" class="partners__show-more">Все архитекторы</a>
                        </div>
                        <?php  
                            $args = array( 'post_type' => 'architects', 'posts_per_page' => 3, 'post_parent' => 0);
                            $loop = new WP_Query( $args );
                            $total_architect = 0;
                            if( $loop->have_posts() ) :
                                $total_architect = $loop->post_count;
                        ?>
                        <ul class="partners__list">
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li class="partners__item">
                                <a href="<?php echo get_the_permalink(); ?>" class="partner-card">
                                    <div class="partner-card__info">
                                        <p class="partner-card__name"><?php echo text_wrapper(get_field('architects_title')); ?></p>
                                        <p class="partner-card__city"><?php echo text_wrapper(get_field('architects_town')); ?></p>
                                    </div>
                                    <div class="partner-card__photo">
                                        <img src="<?php echo get_field('architect_img'); ?>" alt="">
                                    </div>
                                </a>
                            </li>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        </ul>
                        <?php endif; ?>
                    </div>

                    <div class="partners__group">
                        <div class="partners__group-head">
                            <h3 class="partners__type"><?php echo text_wrapper(strip_tags(get_field('designers_screen_title'), '<br><b><strong>')); ?></h3>
                            <a href="<?php echo get_post_type_archive_link('designers'); ?>" class="partners__show-more">Все дизайнеры</a>
                        </div>
                        <?php 
                            $args = array( 'post_type' => 'designers', 'posts_per_page' => 3, 'post_parent' => 0);
                            $loop = new WP_Query( $args );
                            $total_designer = 0;
                            if( $loop->have_posts() ) :
                                $total_designer = $loop->post_count;
                        ?>
                        <ul class="partners__list">
                            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li class="partners__item">
                                <a href="<?php echo get_the_permalink(); ?>" class="partner-card">
                                    <div class="partner-card__info">
                                        <p class="partner-card__name"><?php echo text_wrapper(get_field('designers_title')); ?></p>
                                        <p class="partner-card__city"><?php echo text_wrapper(get_field('designers_town'));?></p>
                                    </div>
                                    <div class="partner-card__photo">
                                        <img src="<?php echo get_field('designers_image'); ?>" alt="">
                                    </div>
                                </a>
                            </li>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>

                        </ul>
                        <?php endif; ?>
                    </div>

                    <div class="partners__group">
                        <div class="partners__group-head">
                            <h3 class="partners__type"><?php echo text_wrapper(strip_tags(get_field('manufactures_screen_title'), '<br><b><strong>')) ?></h3>
                            <a href="<?php echo get_post_type_archive_link('manufactures'); ?>" class="partners__show-more">Все заводы</a>
                        </div>
                        <?php 
                            $args = array( 'post_type' => 'manufactures', 'posts_per_page' => 3, 'post_parent' => 0 );
                            $loop = new WP_Query( $args );
                            $total_manufacture = 0;
                            if( $loop->have_posts() ) :
                                $total_manufacture = $loop->post_count;
                        ?>
                        <ul class="partners__list">
                            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li class="partners__item">
                                <a href="<?php echo get_the_permalink(); ?>" class="partner-card">
                                    <div class="partner-card__info">
                                        <p class="partner-card__name"><?php echo text_wrapper(get_field('manufactures_title')); ?></p>
                                        <p class="partner-card__city"><?php echo text_wrapper(get_field('manufactures_town'));?></p>
                                    </div>
                                    <div class="partner-card__photo">
                                        <img src="<?php echo get_field('manufactures_image'); ?>" alt="">
                                    </div>
                                </a>
                            </li>
                            <?php endwhile?>
                            <?php wp_reset_query(); ?>
                        </ul>
                        <?php endif; ?>
                    </div>

                    <a href="#" class="partners__btn button">Стать партнером сервиса</a>
                </div>
            </div>
        </section>
        <!-- End Partners -->
        <!-- Store -->
        <section id="store" class="store sec">
            <div class="container">
                <h2 class="sec__title">Магазин</h2>

                <ul class="store__list">
                    <li class="store__item store__item--col-2">
                        <a href="#" class="store-card">
                            <div class="store-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/store/item-1.jpg);"></div>
                            <div class="store-card__name">Фермы на МЗП</div>
                        </a>
                    </li>
                    <li class="store__item">
                        <a href="#" class="store-card">
                            <div class="store-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/store/item-2.jpg);"></div>
                            <div class="store-card__name">Наружная отделка</div>
                        </a>
                    </li>
                    <li class="store__item">
                        <a href="#" class="store-card">
                            <div class="store-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/store/item-3.jpg);"></div>
                            <div class="store-card__name">Отделка бань и саун</div>
                        </a>
                    </li>
                    <li class="store__item">
                        <a href="#" class="store-card">
                            <div class="store-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/store/item-4.jpg);"></div>
                            <div class="store-card__name">Термодревесина</div>
                        </a>
                    </li>
                    <li class="store__item">
                        <a href="#" class="store-card">
                            <div class="store-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/store/item-5.jpg);"></div>
                            <div class="store-card__name">Терраса</div>
                        </a>
                    </li>
                    <li class="store__item">
                        <a href="#" class="store-card">
                            <div class="store-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/store/item-6.jpg);"></div>
                            <div class="store-card__name">Крашенная древесина</div>
                        </a>
                    </li>
                    <li class="store__item">
                        <a href="#" class="store-card">
                            <div class="store-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/store/item-7.jpg);"></div>
                            <div class="store-card__name">Внутренняя отделка</div>
                        </a>
                    </li>
                    <li class="store__item store__item--col-2">
                        <a href="#" class="store-card">
                            <div class="store-card__background" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/assets/img/store/item-8.jpg);"></div>
                            <div class="store-card__name">Окна</div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Store -->
        <!-- Blog -->
        <section id="blog-short" class="blog-short sec">
            <div class="container slider slider--lg">
                <div class="sec__head">
                    <h2 class="sec__title">Блог</h2>
                    <a href="<?php echo site_url('/blog') ?>" class="sec__show-more">Все блоги</a>
                </div>
                <?php 
                     $args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'post_parent' => 0, 'cat' => -17 );
                    $loop = new WP_Query( $args );
                    $total_blog = 0;
                    if( $loop->have_posts() ) :
                    $total_blog = $loop->post_count;
                ?>
                <ul class="blog-short__list slider__list">
                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li class="blog-short__item slider__slide">
                        <div class="blog-card">
                            <!-- <img src=""> -->
                            <?php the_post_thumbnail('post-thumb'); ?>
                            <div class="blog-card__wrap">
                                <h3 class="blog-card__name"><?php echo the_title(); ?></h3>
                                <div class="blog-card__description">
                                    Переосмысленный сарай с уютным характером
                                </div>
                            </div>
                            <a href="<?php echo the_permalink(); ?>" class="blog-card__link"></a>
                        </div>
                    </li>
                    <?php  endwhile; ?>
                    <?php wp_reset_query(); ?>

                </ul>
<?php  endif; ?>
            </div>
        </section>
        <!-- End Blog -->
        <!-- Reviews -->
        <section id="reviews-short" class="reviews-short sec">
            <div class="container slider slider--lg">
                <div class="sec__head">
                    <h2 class="sec__title">Отзывы</h2>
                    <a href="./reviews.html" class="sec__show-more">Все отзывы</a>
                </div>

                <ul class="reviews-short__list slider__list">
                    <li class="reviews-short__item slider__slide">
                        <div class="review-card">
                            <div class="review-card__photo">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/reviews/item-1.jpg" alt="">

                                <div class="review-card__play">
                                    <svg>
                                        <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#play"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="review-card__wrap">
                                <h3 class="review-card__name">Отзыв 1</h3>
                                <div class="review-card__description">
                                    Краткое описание
                                </div>
                            </div>
                            <!-- <a href="#" class="review-card__link"></a> -->
                        </div>
                    </li>
                    <li class="reviews-short__item slider__slide">
                        <div class="review-card">
                            <div class="review-card__photo">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/reviews/item-2.jpg" alt="">

                                <div class="review-card__play">
                                    <svg>
                                        <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#play"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="review-card__wrap">
                                <h3 class="review-card__name">Отзыв 2</h3>
                                <div class="review-card__description">
                                    Краткое описание
                                </div>
                            </div>
                            <!-- <a href="#" class="review-card__link"></a> -->
                        </div>
                    </li>
                    <li class="reviews-short__item slider__slide">
                        <div class="review-card">
                            <div class="review-card__photo">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/reviews/item-3.jpg" alt="">

                                <div class="review-card__play">
                                    <svg>
                                        <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#play"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="review-card__wrap">
                                <h3 class="review-card__name">Отзыв 3</h3>
                                <div class="review-card__description">
                                    Краткое описание
                                </div>
                            </div>
                            <!-- <a href="#" class="review-card__link"></a> -->
                        </div>
                    </li>
                    <li class="reviews-short__item slider__slide">
                        <div class="review-card">
                            <div class="review-card__photo">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/reviews/item-4.jpg" alt="">

                                <div class="review-card__play">
                                    <svg>
                                        <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#play"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="review-card__wrap">
                                <h3 class="review-card__name">Отзыв 4</h3>
                                <div class="review-card__description">
                                    Краткое описание
                                </div>
                            </div>
                            <!-- <a href="#" class="review-card__link"></a> -->
                        </div>
                    </li>
                    <li class="reviews-short__item slider__slide">
                        <div class="review-card">
                            <div class="review-card__photo">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/reviews/item-5.jpg" alt="">

                                <div class="review-card__play">
                                    <svg>
                                        <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#play"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="review-card__wrap">
                                <h3 class="review-card__name">Отзыв 5</h3>
                                <div class="review-card__description">
                                    Краткое описание
                                </div>
                            </div>
                            <!-- <a href="#" class="review-card__link"></a> -->
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Reviews -->
        <!-- Faq -->
        <section id="faq" class="faq sec">
            <div class="container">
                <h2 class="sec__title">Частые вопросы</h2>

                <div class="faq__wrap">
                    <ul class="faq__list">
                        <li class="faq__item">
                            <div class="faq__head">
                                <h3 class="faq__question">Вопрос 1 ?</h3>
                                <div class="faq__arrow"></div>
                            </div>
                            <div class="faq__body">
                                <div class="faq__answer">
                                    <div class="faq__video">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/faq/image.jpg" alt="">

                                        <div class="faq__play">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#play"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="faq__item">
                            <div class="faq__head">
                                <h3 class="faq__question">Вопрос 2 ?</h3>
                                <div class="faq__arrow"></div>
                            </div>
                            <div class="faq__body">
                                <div class="faq__answer">
                                    <div class="faq__video">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/faq/image.jpg" alt="">

                                        <div class="faq__play">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#play"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="faq__item">
                            <div class="faq__head">
                                <h3 class="faq__question">Вопрос 3 ?</h3>
                                <div class="faq__arrow"></div>
                            </div>
                            <div class="faq__body">
                                <div class="faq__answer">
                                    <div class="faq__video">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/faq/image.jpg" alt="">

                                        <div class="faq__play">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#play"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="faq__item">
                            <div class="faq__head">
                                <h3 class="faq__question">Вопрос 4 ?</h3>
                                <div class="faq__arrow"></div>
                            </div>
                            <div class="faq__body">
                                <div class="faq__answer">
                                    <div class="faq__video">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/faq/image.jpg" alt="">

                                        <div class="faq__play">
                                            <svg>
                                                <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#play"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="faq__feedback">
                        <h3 class="faq__feedback-title">Не нашли нужный ответ?</h3>
                        <div class="faq__feedback-subtitle">Мы готовы ответить на любой ваш вопрос!</div>

                        <div class="faq__feedback-wrap">
                            <form class="faq__form form" action="#" method="post">
                                <div class="form__field">
                                    <input class="form__input" type="text" name="your-name" placeholder="Имя">
                                </div>

                                <div class="form__field">
                                    <input class="form__input" type="tel" name="your-phone" placeholder="Электронная почта">
                                </div>

                                <div class="form__field">
                                    <input class="form__input" type="email" name="your-mail" placeholder="Телефон" required>
                                </div>

                                <div class="form__field">
                                    <textarea class="form__input form__input--textarea" name="your-message" placeholder="Сообщение"></textarea>
                                </div>

                                <label class="form__file">
                                    <input type="file" name="your-files" placeholder="Прикрепить файлы">
                                    <span class="icon"></span>
                                    <span class="text">Прикрепить файлы</span>
                                </label>

                                <button class="form__send-btn button" type="submit">Отправить</button>
                            </form>

                            <ul class="socials">
                                <li class="socials__item">
                                    <a href="#">
                                        <svg>
                                            <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#telegram"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="socials__item">
                                    <a href="#">
                                        <svg>
                                            <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#whatsapp"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="socials__item">
                                    <a href="#">
                                        <svg>
                                            <use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#viber"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Faq -->
<?php get_footer(); ?>
