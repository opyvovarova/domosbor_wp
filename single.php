<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://livecomposerplugin.com/themes/
 *
 * @package LC Blank
 */

get_header(); ?>
<main class="main ">
<!-- Post -->
<section id="post" class="post sec">
		<div class="container">
				<div class="main__page-info">
						<ul class="main__breadcrumb">
								<li><a href="<?php echo site_url() ?>">Главная</a></li>
								<li><a href="<?php echo site_url('/blog') ?>">Блог</a></li>
								<li><?php echo the_title() ?></li>
						</ul>
						<h1 class="main__page-title"><?php the_title() ?></h1>
				</div>

				<div class="post__head">
						<div class="post__date"><?php the_time('d n Y') ?></div>
						<a href="#" class="post__share-link">
								<svg>
										<use xlink:href="./assets/img/sprite.svg#back"></use>
								</svg>
								<span>Поделиться</span>
						</a>
				</div>

				<div class="post__wrapper">
						<section class="post__main">
							<?php the_content() ?>
								<div class="post__image">
										<img src="./assets/img/post/image-1.jpg" alt="изображение">
								</div>

								<div class="post__text-block">
										<p>Банные процедуры — это ни с чем не сравнимое удовольствие и несомненная польза для вашего организма.
												Жизнь современного человека устроена так, что ему жизненно необходимо правильно расслабляться и
												отдыхать.</p>
										<p>Баня обеспечит хорошее расслабление тела и духа, а еще, позволит воплотить русскую традицию париться и
												принимать водные процедуры на современном загородном участке. Однако, если вам не по душе микроклимат
												русской бани, вы можете реализовать проект финской сауны.</p>
										<p>Мы собрали 5 современных проектов бань и саун, которые идеально дополнят ваш участок и позволят
												расслабиться после тяжелых рабочих будней.</p>
								</div>

								<h2 class="post__title">№5. Привлекательный и функциональный. Проект «Villa Glass 15»</h2>

								<div class="post__text-block">
										<p>Общая площадь: 21 м2. Технология: Клееный брус</p>
										<p>Находитесь в поисках функциональной сауны для вашего участка? Хотим познакомить вас с проектом Villa
												Glass 15, который совмещает в себе просторное парильное помещение и спальню для ваших гостей.</p>
								</div>

								<div class="post__image slider">
										<div class="slider__wrap">
												<ul class="slider__list">
														<li class="slider__slide">
																<img src="./assets/img/post/image-6.jpg" alt="изображение">
														</li>
														<li class="slider__slide">
																<img src="./assets/img/post/image-2.jpg" alt="изображение">
														</li>
														<li class="slider__slide">
																<img src="./assets/img/post/image-3.jpg" alt="изображение">
														</li>
														<li class="slider__slide">
																<img src="./assets/img/post/image-4.jpg" alt="изображение">
														</li>
														<li class="slider__slide">
																<img src="./assets/img/post/image-5.jpg" alt="изображение">
														</li>
												</ul>
										</div>
										<div class="slider__pagination"></div>
								</div>


								<div class="post__text-block">
										<p>Также небольшая сауна предусматривает уютную террасу, на которой можно разместить лежаки, поставить
												обеденный стол и мангал.</p>
										<p>Секретом долговечности этой сауны служит особый тип древесины: медленно растущая северная сосна. Она
												растет недалеко от Полярного круга в чистых лесах и благодаря ее медленному росту количество
												исключительно прочной яровой древесины в каждом бревне максимально.</p>
								</div>

								<div class="post__characs">
										<h3 class="post__characs-title">Характеристики:</h3>

										<ul class="post__characs-list">
												<li>Общая площадь: 21 м2</li>
												<li>Жилая площадь: 14,5 м2</li>
												<li>Технология: Клееный брус</li>
										</ul>
								</div>

								<div class="post__text-block">
										<p>Хотите внести изменение в планировочное решение? Любой проект можно изменить под ваши нужды и
												пожелания!</p>
								</div>

								<h2 class="post__title">Сборка и доставка</h2>

								<div class="post__text-block">
										<p>Команда сервиса «DOMOSBOR» осуществит доставку и сборку дома в самые кратчайшие сроки. Конечный
												результат зависит от ваших желаний, потребностей и задач.</p>
										<p>Свяжитесь с нами, и мы обсудим все нюансы фундамента, инженерии и всей конструкции, мы обязательно
												примем во внимание все ваши пожелания и реализуем проект вашей мечты.</p>
										<p>Если вас заинтересовал один из представленных проектов, то свяжитесь с нами, оставьте комментарий или
												воспользуйтесь нашими контактными данными.</p>
								</div>
						</section>

						<aside class="post__sidebar sidebar">
							<?php 
								$singlePostQuery = new WP_Query(array(
									'post_per_page' => 3,
									'post_type' => 'post',
									'cat' => -17
								));

								if ($singlePostQuery -> have_posts()) {
									echo '<h2 class="sidebar__title">Вам может понравится</h2>';

									while($singlePostQuery -> have_posts()) {
										$singlePostQuery -> the_post();

										$image_id = get_post_thumbnail_id();
										$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
										?>

										<div class="blog-card blog-card--second">
										<img src="<?php the_post_thumbnail_url('150*150') ?>" alt="<?php echo $image_alt; ?>">

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
												<a href="<?php the_permalink(); ?>" class="blog-card__link">Читать далее</a>
										</div>
								</div>

										
									<?php }
									
								};
								wp_reset_postdata();							
							?>
						</aside>
				</div>
		</div>
</section>
<!-- End Post -->
<!-- Faq -->
<section id="faq" class="faq sec">
		<div class="container">
				<h2 class="sec__title">Частые вопросы</h2>
				<?php 
								$SingleFaq = new WP_Query(array(
									'post_per_page' => -1,
									'post_type' => 'post',
									'cat' => 17
								));				
				?>

				<div class="faq__wrap">
					<?php 
						if($SingleFaq -> have_posts()) {
							echo '<ul class="faq__list">';
							while($SingleFaq -> have_posts()) {
								$SingleFaq -> the_post();?>
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

<!-- Footer -->
<footer id="footer" class="footer">
		<div class="container">
				<div class="footer__wrap">
						<div class="footer__info">
								<a href="index.html" class="footer__logo">
										<img src="./assets/img/logo-footer.svg" alt="логотип">
								</a>

								<ul class="footer__legal">
										<li>ООО «Основа»</li>
										<li>ИНН: 7814791026</li>
										<li>ОГРН: 1217800076240</li>
										<li>Сервис DOMOSBOR</li>
								</ul>
						</div>

						<div class="footer__nav-links">
								<h3 class="footer__links-title">
										<span>Типы строений</span>
										<i class="footer__links-arrow"></i>
								</h3>
								<div class="footer__links-list">
										<a href="./building.html" class="footer__link">Дома</a>
										<a href="./building.html" class="footer__link">Бани</a>
										<a href="./building.html" class="footer__link">Гаражи</a>
										<a href="./building.html" class="footer__link">Навесы</a>
										<a href="./building.html" class="footer__link">Коммерческие объекты</a>
								</div>
						</div>

						<div class="footer__nav-links">
								<h3 class="footer__links-title">
										<span>Сервис</span>
										<i class="footer__links-arrow"></i>
								</h3>
								<div class="footer__links-list">
										<a href="./services.html" class="footer__link">О сервисе</a>
										<a href="./gallery.html" class="footer__link">Галерея</a>
										<a href="./blog.html" class="footer__link">Блог</a>
										<a href="./reviews.html" class="footer__link">Отзывы</a>
										<a href="./services.html" class="footer__link">Услуги</a>
								</div>
						</div>

						<div class="footer__nav-links">
								<h3 class="footer__links-title">
										<span>Информация</span>
										<i class="footer__links-arrow"></i>
								</h3>
								<div class="footer__links-list">
										<a href="./payment.html" class="footer__link">Оплата</a>
										<a href="./documents.html" class="footer__link">Документы</a>
										<a href="./contacts.html" class="footer__link">Контакты</a>
										<a href="./cooperation.html" class="footer__link">Сотрудничество</a>
								</div>
						</div>

						<div class="footer__nav-links">
								<h3 class="footer__links-title">
										<span>Партнеры сервиса</span>
										<i class="footer__links-arrow"></i>
								</h3>
								<div class="footer__links-list">
										<a href="./architects.html" class="footer__link">Архитекторы</a>
										<a href="./designers.html" class="footer__link">Дизайнеры</a>
										<a href="./manufacturers.html" class="footer__link">Заводы</a>
								</div>
						</div>

						<div class="footer__contacts">
								<div class="footer__accent-links">
										<a href="#">DOMOSBOR - Магазин</a>
										<a href="#">DOMOSBOR - Форум</a>
								</div>

								<div class="call">
										<a href="tel:+78003015051" class="call__phone">8 (800) 301-50-51</a>
										<a href="javascript:void(0)" class="call__feedback-link open-popup-btn" data-popup-target="feedback">
												Заказать обратный звонок
										</a>
								</div>

								<a href="mailto:info@domosbor.ru" class="footer__contact-link">info@domosbor.ru</a>

								<p class="footer__address">
										Санкт-Петербург, <br>
	Московский пр. 212, <br>
	офис 3035
								</p>
						</div>
				</div>

				<ul class="footer__socials-list">
						<li class="footer__socials-item">
								<a href="#">
										<svg>
												<use xlink:href="./assets/img/sprite.svg#f-ok"></use>
										</svg>
								</a>
						</li>
						<li class="footer__socials-item">
								<a href="#">
										<svg>
												<use xlink:href="./assets/img/sprite.svg#f-dzen"></use>
										</svg>
								</a>
						</li>
						<li class="footer__socials-item">
								<a href="#">
										<svg>
												<use xlink:href="./assets/img/sprite.svg#f-telegram"></use>
										</svg>
								</a>
						</li>
						<li class="footer__socials-item">
								<a href="#">
										<svg>
												<use xlink:href="./assets/img/sprite.svg#f-pinterest"></use>
										</svg>
								</a>
						</li>
						<li class="footer__socials-item">
								<a href="#">
										<svg>
												<use xlink:href="./assets/img/sprite.svg#f-rutube"></use>
										</svg>
								</a>
						</li>
						<li class="footer__socials-item">
								<a href="#">
										<svg>
												<use xlink:href="./assets/img/sprite.svg#f-youtube"></use>
										</svg>
								</a>
						</li>
						<li class="footer__socials-item">
								<a href="#">
										<svg>
												<use xlink:href="./assets/img/sprite.svg#f-instagram"></use>
										</svg>
								</a>
						</li>
						<li class="footer__socials-item">
								<a href="#">
										<svg>
												<use xlink:href="./assets/img/sprite.svg#f-tiktok"></use>
										</svg>
								</a>
						</li>
						<li class="footer__socials-item">
								<a href="#">
										<svg>
												<use xlink:href="./assets/img/sprite.svg#f-vk"></use>
										</svg>
								</a>
						</li>
						<li class="footer__socials-item">
								<a href="#">
										<svg>
												<use xlink:href="./assets/img/sprite.svg#f-facebook"></use>
										</svg>
								</a>
						</li>
						<li class="footer__socials-item">
								<a href="#">
										<svg>
												<use xlink:href="./assets/img/sprite.svg#f-twitter"></use>
										</svg>
								</a>
						</li>
				</ul>

				<div class="footer__policy">
						<a href="#">Политика конфиденциальности</a>
						<p>© 2022 «DOMOSBOR». Все права защищены.</p>
				</div>
		</div>
</footer>
<!-- End Footer -->

</main>

<?php get_footer(); ?>
