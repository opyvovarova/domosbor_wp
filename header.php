<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Domosbor
 */

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php lct_title( '|'); ?></title>

	<?php wp_head(); ?>
</head>

<body>

    <!-- Content -->
    <main class="main main--home">

        <!-- Header -->
        <header class="header" data-fixed>
            <div class="header__main">
                <div class="container">
                    <div class="header__left">
                        <a href="javascript:void(0)" class="header__menu-btn open-popup-btn" data-popup-target="nav-menu">
                            <div></div>
                            <div></div>
                            <div></div>
                        </a>

                        <a href="tel:+78003015051" class="header__phone-mobile">
                            <svg>
                                <use xlink:href="./assets/img/sprite.svg#phone"></use>
                            </svg>
                        </a>

                        <form class="search-bar hidden" action="./search-result.html" method="get">
                            <button type="submit" class="search-bar__btn">
                                <svg>
                                    <use xlink:href="./assets/img/sprite.svg#magnifier"></use>
                                </svg>
                            </button>
                            <label>
                                <input type="search" name="search" placeholder="Поиск...">
                            </label>
                        </form>

                        <div class="lang-switch">
                            <a href="#" class="active">RU</a>
                            <a href="#">EN</a>
                        </div>
                    </div>

                    <a href="index.html" class="header__logo">
                        <img src="<?php echo get_bloginfo('template_url');?>/assets/img/logo.svg" alt="логотип">
                    </a>

                    <div class="header__right">
                        <a href="./comparison.html" class="header__link">
                            <svg>
                                <use xlink:href="./assets/img/sprite.svg#arrows"></use>
                            </svg>
                        </a>
                        <a href="./favorites.html" class="header__link">
                            <svg>
                                <use xlink:href="./assets/img/sprite.svg#heart"></use>
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="header__link open-popup-btn" data-popup-target="login">
                            <svg>
                                <use xlink:href="./assets/img/sprite.svg#login"></use>
                            </svg>
                        </a>

                        <div class="call">
                            <a href="tel:+78003015051" class="call__phone">8 (800) 301-50-51</a>
                            <a href="javascript:void(0)" class="call__feedback-link open-popup-btn" data-popup-target="feedback">
                                Заказать обратный звонок
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header__popup-wrap">
                <div class="container">
                    <nav class="header__popup-item nav-menu tabs active">
                        <div class="nav-menu__mobile-block">
                            <div class="lang-switch">
                                <a href="#" class="active">RU</a>
                                <a href="#">EN</a>
                            </div>
                            <div class="nav-menu__links">
                                <a href="#">
                                    <svg>
                                        <use xlink:href="./assets/img/sprite.svg#arrows"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg>
                                        <use xlink:href="./assets/img/sprite.svg#heart"></use>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="open-popup-btn" data-popup-target="login">
                                    <svg>
                                        <use xlink:href="./assets/img/sprite.svg#login"></use>
                                    </svg>
                                </a>
                            </div>

                            <form class="search-bar" action="#" method="get">
                                <button type="submit" class="search-bar__btn">
                                    <svg>
                                        <use xlink:href="./assets/img/sprite.svg#magnifier"></use>
                                    </svg>
                                </button>
                                <label>
                                    <input type="search" name="search" placeholder="Поиск...">
                                </label>
                            </form>

                            <div class="call">
                                <a href="tel:+78003015051" class="call__phone">8 (800) 301-50-51</a>
                                <a href="javascript:void(0)" class="call__feedback-link open-popup-btn" data-popup-target="feedback">
                                    Заказать обратный звонок
                                </a>
                            </div>
                        </div>

                        <div class="nav-menu__type-btns tabs__head">
                            <div class="tabs__placeholder button">
                                <span>Построить</span>
                                <div class="tabs__arrow"></div>
                            </div>
                            <div class="tabs__buttons">
                                <button class="button active" data-tab-target="menu-build">Построить</button>
                                <button class="button" data-tab-target="menu-buy">Купить</button>
                                <button class="button" data-tab-target="menu-rent">Арендовать</button>
                            </div>
                        </div>

                        <div class="nav-menu__content-list tabs__body">
                            <div class="nav-menu__content tabs__content active" data-tab-id="menu-build">
                                <div class="nav-menu__column">
                                    <a href="#" class="nav-menu__link nav-menu__link--main">DOMOSBOR - Магазин</a>
                                    <a href="#" class="nav-menu__link nav-menu__link--main">DOMOSBOR - Форум</a>

                                    <h3 class="nav-menu__links-title">
                                        <span>Типы строений</span>
                                        <i class="nav-menu__links-arrow"></i>
                                    </h3>

                                    <div class="nav-menu__links-list">
                                        <a href="#" class="nav-menu__link">Дома</a>
                                        <a href="#" class="nav-menu__link">Бани</a>
                                        <a href="#" class="nav-menu__link">Гаражи</a>
                                        <a href="#" class="nav-menu__link">Навесы</a>
                                        <a href="#" class="nav-menu__link">Коммерческие объекты</a>
                                    </div>
                                </div>
                                <div class="nav-menu__column">
                                    <h3 class="nav-menu__links-title">
                                        <span>Технологии</span>
                                        <i class="nav-menu__links-arrow"></i>
                                    </h3>

                                    <div class="nav-menu__links-list">
                                        <a href="#" class="nav-menu__link">Клееный брус</a>
                                        <a href="#" class="nav-menu__link">Лафет</a>
                                        <a href="#" class="nav-menu__link">Фахверковые</a>
                                        <a href="#" class="nav-menu__link">Рубленное бревно</a>
                                        <a href="#" class="nav-menu__link">Каркасные</a>
                                        <a href="#" class="nav-menu__link">CLT панели</a>
                                        <a href="#" class="nav-menu__link">Панельно-каркасные</a>
                                        <a href="#" class="nav-menu__link">Kelo (кело)</a>
                                    </div>
                                </div>
                                <div class="nav-menu__column">
                                    <h3 class="nav-menu__links-title">
                                        <span>Технологии</span>
                                        <i class="nav-menu__links-arrow"></i>
                                    </h3>

                                    <div class="nav-menu__links-list">
                                        <a href="#" class="nav-menu__link">Клееный брус</a>
                                        <a href="#" class="nav-menu__link">Лафет</a>
                                        <a href="#" class="nav-menu__link">Фахверковые</a>
                                        <a href="#" class="nav-menu__link">Рубленное бревно</a>
                                        <a href="#" class="nav-menu__link">Каркасные</a>
                                        <a href="#" class="nav-menu__link">CLT панели</a>
                                        <a href="#" class="nav-menu__link">Панельно-каркасные</a>
                                        <a href="#" class="nav-menu__link">Kelo (кело)</a>
                                    </div>
                                </div>
                                <div class="nav-menu__column">
                                    <h3 class="nav-menu__links-title">
                                        <span>Технологии</span>
                                        <i class="nav-menu__links-arrow"></i>
                                    </h3>

                                    <div class="nav-menu__links-list">
                                        <a href="#" class="nav-menu__link">Клееный брус</a>
                                        <a href="#" class="nav-menu__link">Лафет</a>
                                        <a href="#" class="nav-menu__link">Фахверковые</a>
                                        <a href="#" class="nav-menu__link">Рубленное бревно</a>
                                        <a href="#" class="nav-menu__link">Каркасные</a>
                                        <a href="#" class="nav-menu__link">CLT панели</a>
                                        <a href="#" class="nav-menu__link">Панельно-каркасные</a>
                                        <a href="#" class="nav-menu__link">Kelo (кело)</a>
                                    </div>
                                </div>
                                <div class="nav-menu__column">
                                    <h3 class="nav-menu__links-title">
                                        <span>Технологии</span>
                                        <i class="nav-menu__links-arrow"></i>
                                    </h3>

                                    <div class="nav-menu__links-list">
                                        <a href="#" class="nav-menu__link">Клееный брус</a>
                                        <a href="#" class="nav-menu__link">Лафет</a>
                                        <a href="#" class="nav-menu__link">Фахверковые</a>
                                        <a href="#" class="nav-menu__link">Рубленное бревно</a>
                                        <a href="#" class="nav-menu__link">Каркасные</a>
                                        <a href="#" class="nav-menu__link">CLT панели</a>
                                        <a href="#" class="nav-menu__link">Панельно-каркасные</a>
                                        <a href="#" class="nav-menu__link">Kelo (кело)</a>
                                    </div>
                                </div>
                                <div class="nav-menu__column">
                                    <h3 class="nav-menu__links-title">
                                        <span>Технологии</span>
                                        <i class="nav-menu__links-arrow"></i>
                                    </h3>

                                    <div class="nav-menu__links-list">
                                        <a href="#" class="nav-menu__link">Клееный брус</a>
                                        <a href="#" class="nav-menu__link">Лафет</a>
                                        <a href="#" class="nav-menu__link">Фахверковые</a>
                                        <a href="#" class="nav-menu__link">Рубленное бревно</a>
                                        <a href="#" class="nav-menu__link">Каркасные</a>
                                        <a href="#" class="nav-menu__link">CLT панели</a>
                                        <a href="#" class="nav-menu__link">Панельно-каркасные</a>
                                        <a href="#" class="nav-menu__link">Kelo (кело)</a>
                                    </div>
                                </div>
                            </div>

                            <div class="nav-menu__content tabs__content" data-tab-id="menu-buy">
                                <div class="nav-menu__column">
                                    <a href="#" class="nav-menu__link nav-menu__link--main">DOMOSBOR - Магазин</a>
                                    <a href="#" class="nav-menu__link nav-menu__link--main">DOMOSBOR - Форум</a>

                                    <h3 class="nav-menu__links-title">
                                        <span>Технологии</span>
                                        <i class="nav-menu__links-arrow"></i>
                                    </h3>

                                    <div class="nav-menu__links-list">
                                        <a href="#" class="nav-menu__link">Дома</a>
                                        <a href="#" class="nav-menu__link">Бани</a>
                                        <a href="#" class="nav-menu__link">Гаражи</a>
                                        <a href="#" class="nav-menu__link">Навесы</a>
                                        <a href="#" class="nav-menu__link">Коммерческие объекты</a>
                                    </div>
                                </div>
                                <div class="nav-menu__column">
                                    <h3 class="nav-menu__links-title">
                                        <span>Технологии</span>
                                        <i class="nav-menu__links-arrow"></i>
                                    </h3>

                                    <div class="nav-menu__links-list">
                                        <a href="#" class="nav-menu__link">Клееный брус</a>
                                        <a href="#" class="nav-menu__link">Лафет</a>
                                        <a href="#" class="nav-menu__link">Фахверковые</a>
                                        <a href="#" class="nav-menu__link">Рубленное бревно</a>
                                        <a href="#" class="nav-menu__link">Каркасные</a>
                                        <a href="#" class="nav-menu__link">CLT панели</a>
                                        <a href="#" class="nav-menu__link">Панельно-каркасные</a>
                                        <a href="#" class="nav-menu__link">Kelo (кело)</a>
                                    </div>
                                </div>
                            </div>

                            <div class="nav-menu__content tabs__content" data-tab-id="menu-rent">
                                <div class="nav-menu__column">
                                    <a href="#" class="nav-menu__link nav-menu__link--main">DOMOSBOR - Магазин</a>
                                    <a href="#" class="nav-menu__link nav-menu__link--main">DOMOSBOR - Форум</a>

                                    <h3 class="nav-menu__links-title">
                                        <span>Типы строений</span>
                                        <i class="nav-menu__links-arrow"></i>
                                    </h3>

                                    <div class="nav-menu__links-list">
                                        <a href="#" class="nav-menu__link">Дома</a>
                                        <a href="#" class="nav-menu__link">Бани</a>
                                        <a href="#" class="nav-menu__link">Гаражи</a>
                                        <a href="#" class="nav-menu__link">Навесы</a>
                                        <a href="#" class="nav-menu__link">Коммерческие объекты</a>
                                    </div>
                                </div>
                                <div class="nav-menu__column">
                                    <h3 class="nav-menu__links-title">
                                        <span>Технологии</span>
                                        <i class="nav-menu__links-arrow"></i>
                                    </h3>

                                    <div class="nav-menu__links-list">
                                        <a href="#" class="nav-menu__link">Клееный брус</a>
                                        <a href="#" class="nav-menu__link">Лафет</a>
                                        <a href="#" class="nav-menu__link">Фахверковые</a>
                                        <a href="#" class="nav-menu__link">Рубленное бревно</a>
                                        <a href="#" class="nav-menu__link">Каркасные</a>
                                        <a href="#" class="nav-menu__link">CLT панели</a>
                                        <a href="#" class="nav-menu__link">Панельно-каркасные</a>
                                        <a href="#" class="nav-menu__link">Kelo (кело)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <div class="header__popup-item feedback">
                        <h2 class="header__popup-title">Форма связи</h2>

                        <form class="feedback__form form" id="modal-feedback-form" action="#" method="post">
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

                            <button class="form__send-btn button" type="submit">Написать</button>
                        </form>
                    </div>

                    <div class="header__popup-item registration">
                        <h2 class="header__popup-title">Регистрация</h2>
                        <div class="header__popup-subtitle">Введите почту и пароль</div>

                        <form class="registration__form form" id="registration-form" action="#" method="post">
                            <div class="form__field">
                                <input class="form__input form__input--grey" type="email" name="reg-mail" placeholder="Электронная почта">
                            </div>

                            <div class="form__field">
                                <input class="form__input form__input--grey" type="password" name="reg-pass" placeholder="Пароль">
                            </div>

                            <div class="form__field">
                                <input class="form__input form__input--grey" type="password" name="reg-pass-retry" placeholder="Пароль повторно">
                            </div>

                            <button class="form__send-btn button" type="submit">Регистрация</button>
                        </form>
                    </div>

                    <div class="header__popup-item login">
                        <div class="login__main">
                            <div class="login__types-wrap">
                                <label class="login__user-type"><input type="radio" name="login-user-type" value="Пользователь" checked><span>Пользователь</span></label>
                                <label class="login__user-type"><input type="radio" name="login-user-type" value="Профессионал"><span>Профессионал</span></label>
                            </div>
                            <div class="login__wrap">
                                <form class="login__form form" id="login-form" action="#" method="post">
                                    <div class="form__field">
                                        <p class="form__name">Электронная почта / Телефон</p>
                                        <input class="form__input" type="email" name="login-mail" placeholder="Электронная почта">
                                    </div>

                                    <div class="form__field">
                                        <p class="form__name">Пароль</p>
                                        <input class="form__input" type="password" name="login-pass" placeholder="Пароль">
                                    </div>

                                    <button class="form__send-btn button" type="submit">Войти</button>
                                </form>

                                <a href="javascript:void(0)" class="login__reg-link open-popup-btn" data-popup-target="registration">Регистрация</a>

                                <ul class="socials">
                                    <li class="socials__item">
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="./assets/img/sprite.svg#google"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="socials__item">
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="./assets/img/sprite.svg#yandex"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="socials__item">
                                        <a href="#">
                                            <svg>
                                                <use xlink:href="./assets/img/sprite.svg#vk"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="login__action">
                            <h2 class="login__action-title">Domosbor <span>PRO</span></h2>
                            <div class="login__action-wrap">
                                <div class="login__action-item">
                                    <a href="#" class="login__action-btn button">Сдать объект</a>
                                    <p class="login__action-info">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet elementum eu sed sed. Nulla semper
                                        euismod nam posuere egestas lorem venenatis. At urna cum pulvinar arcu morbi elementum amet et
                                        enim. Tincidunt venenatis, turpis facilisi tempor nunc, eget netus nunc risus.
                                    </p>
                                </div>
                                <div class="login__action-item">
                                    <a href="#" class="login__action-btn button">Продать объект</a>
                                    <p class="login__action-info">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet elementum eu sed sed. Nulla semper
                                        euismod nam posuere egestas lorem venenatis. At urna cum pulvinar arcu morbi elementum amet et
                                        enim. Tincidunt venenatis, turpis facilisi tempor nunc, eget netus nunc risus.
                                    </p>
                                </div>
                                <div class="login__action-item">
                                    <a href="#" class="login__action-btn button">Стать партнером сервиса</a>
                                    <p class="login__action-info">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet elementum eu sed sed. Nulla semper
                                        euismod nam posuere egestas lorem venenatis. At urna cum pulvinar arcu morbi elementum amet et
                                        enim. Tincidunt venenatis, turpis facilisi tempor nunc, eget netus nunc risus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->