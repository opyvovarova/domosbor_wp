<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Domosbor
 */

?>

  <!-- Footer -->
	<footer id="footer" class="footer">
            <div class="container">
                <div class="footer__wrap">
                    <div class="footer__info">
                        <a href="index.html" class="footer__logo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-footer.svg" alt="логотип">
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
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/assets/img/sprite.svg#f-ok"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/assets/img/sprite.svg#f-dzen"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/assets/img/sprite.svg#f-telegram"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/assets/img/sprite.svg#f-pinterest"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/assets/img/sprite.svg#f-rutube"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/assets/img/sprite.svg#f-youtube"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/assets/img/sprite.svg#f-instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/assets/img/sprite.svg#f-tiktok"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/assets/img/sprite.svg#f-vk"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/assets/img/sprite.svg#f-facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_directory'); ?>/assets/img/sprite.svg#f-twitter"></use>
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
    <!-- End Content -->

<?php wp_footer(); ?>

</body>
</html>
