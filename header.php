<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ukk-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-container">
    <header class="header">
        <div class="container header__container">
            <div class="header__top">
                <a href="<?= get_home_url() ?>" class="header__logo logo">
                    <span class="logo__sup-title">
                        <?= carbon_get_theme_option('site_logo_title_small'); ?>
                    </span>
                    <span class="logo__title"><?= carbon_get_theme_option('site_logo_title_big') ?></span>
                </a>
                <div class="header__contact header-contact">
                    <div class="header-contact__wrapper">
                        <div class="header-contact__block">
                            <img class="header-contact__icon"
                                 src="<?= get_template_directory_uri() ?>/style/app/img/icon-address.png"" alt="">
                            <a href="" class="header-contact__link"><?= carbon_get_theme_option('site_address') ?></a>
                        </div>
                        <div class="header-contact__block">
                            <img class="header-contact__icon"
                                 src="<?= get_template_directory_uri() ?>/style/app/img/icon-phone.png" alt="">
                            <a href="tel:<?= preg_replace('/[^\d^\+]/', '', carbon_get_theme_option('site_phone')) ?>"
                               class="header-contact__link"><?= carbon_get_theme_option('site_phone') ?></a>
                        </div>
                    </div>
                    <div class="eya eya__desc">
                        <a class="eya__link bvi-open" href="#">
                            <img class="eya__icon" src="<?= get_template_directory_uri() ?>/style/app/img/v-i.png"
                                 alt="Версия для слабовидящих">
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__navigation">
                <nav class="nav header__nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#" class="nav__link nav__link--current">О компании </a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link nav__link--drop">Сведения об образовательной организации</a>
                            <ul class="nav__list nav__list--dropdown dropdown-list">
                                <li class="dropdown-list__item">
                                    <a class="dropdown-list__link" href="#">Основные сведения</a>
                                </li>
                                <li class="dropdown-list__item">
                                    <a class="dropdown-list__link" href="#">Основные сведения</a>
                                </li>
                                <li class="dropdown-list__item">
                                    <a class="dropdown-list__link" href="#">Основные сведения</a>
                                </li>
                                <li class="dropdown-list__item">
                                    <a class="dropdown-list__link" href="#">Основные сведения</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Дистанционное обучение</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Услуги</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="burger">
                <span class="burger__line"></span>
            </div>
        </div>
    </header>

