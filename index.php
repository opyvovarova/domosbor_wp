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
 *
 * @package Domosbor
 */

get_header();
?>

 <!-- Blog -->
 <section id="blog" class="blog sec">
            <div class="container">
                <div class="main__page-info">
                    <ul class="main__breadcrumb">
                        <li><a href="<?php echo site_url()?>">Главная</a></li>
                        <li>Блог</li>
                    </ul>
                    <h1 class="main__page-title">Блог</h1>
                </div>

                <div class="blog__desc">
                    <div class="blog__desc-text">Следите за новостями на нашем сайте. Нам важно, чтобы вы всегда были в курсе
                        всего интересного и важного, связанного с деревянным домостроением!</div>
                    <form class="blog__search" id = "searchform" action="<?php echo home_url('/') ?>" method="get">
                        <input type="text" name="s" id="s" value="<?php echo get_search_query() ?>" placeholder="Поиск...">
                        <button class="button" type="submit" id="searchsubmit">
                            <span>Искать в блоге</span>
                            <svg>
                                <use xlink:href="./assets/img/sprite.svg#magnifier"></use>
                            </svg>
                        </button>
                    </form>
                </div>

                
<?php 
$indexPostsQuery = new WP_Query(array(
    'post_type' => 'post',
    'cat' => -17
));
	if ($indexPostsQuery -> have_posts()) {
		echo '<ul class="blog__list">';
		while($indexPostsQuery -> have_posts() ) {
			$indexPostsQuery -> the_post();
			$image_id = get_post_thumbnail_id();
			$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
			?>
				<li class="blog__item">
          <div class="blog-card blog-card--second">
            <img src="<?php the_post_thumbnail_url('300*175') ?>" alt="<?php echo $image_alt ?>">
              <div class="blog-card__wrap">
                <div class="blog-card__date"><?php echo the_time('d n Y') ?></div>
                  <h3 class="blog-card__name"><?php echo wp_trim_words(get_the_title(), 6) ?></h3>
                  	<div class="blog-card__description">
											<?php 
												if (has_excerpt()) {
													echo get_the_excerpt();
												}else{echo wp_trim_words(get_the_content(), 18);}
											?>
                    </div>
                  <a href="<?php the_permalink() ?>" class="blog-card__link">Читать далее</a>
              </div>
          </div>
        </li>
			<?php
		}
		echo '</ul>';		 
	}
    wp_reset_postdata();
?>        



<div class="pagination">

<?php 

$links_data = paginate_links(array(
	'type' => 'list',
	'prev_text' => '',
	'next_text' => ''
));

echo $links_data;
?>
                </div>
            </div>
        </section>
        <!-- End Blog -->
        <!-- Faq -->
        <section id="faq" class="faq sec">
            <div class="container">
                <h2 class="sec__title">Частые вопросы</h2>

                <div class="faq__wrap">
                <?php 
                $indexFaq = new WP_Query(array(
                    'post_per_page' => -1,
                    'post_type' => 'post',
                    'cat' => 17
                ));	
						if($indexFaq -> have_posts()) {
							echo '<ul class="faq__list">';
							while($indexFaq -> have_posts()) {
								$indexFaq -> the_post();?>
								<li class="faq__item">
										<div class="faq__head">
												<h3 class="faq__question"><?php the_title(); ?></h3>
												<div class="faq__arrow"></div>
										</div>
										<div class="faq__body">
												<div class="faq__answer">
												<p><?php the_content() ?></p>
														<div class="faq__video">
																<img src="./assets/img/faq/image.jpg" alt="">
																
																<div class="faq__play">
																		<svg>
																				<use xlink:href="./assets/img/sprite.svg#play"></use>
																		</svg>
																</div>
														</div>
												</div>
										</div>
								</li>
							<?php };
							echo '</ul>';
					
						}
						wp_reset_postdata();	
					?>

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
                                            <use xlink:href="./assets/img/sprite.svg#telegram"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="socials__item">
                                    <a href="#">
                                        <svg>
                                            <use xlink:href="./assets/img/sprite.svg#whatsapp"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="socials__item">
                                    <a href="#">
                                        <svg>
                                            <use xlink:href="./assets/img/sprite.svg#viber"></use>
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

<?php
get_footer();
