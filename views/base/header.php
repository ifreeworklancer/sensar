<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.1.1/mapbox-gl.css' rel='stylesheet'/>
    <link rel="stylesheet" href="../../fonts/font.css">
    <link rel="stylesheet" href="../../dist/app.css">
</head>

<body>

<div style="position: absolute;top: -999999px;">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <linearGradient id="lgrad" x1="0%" y1="50%" x2="100%" y2="50%">
                <stop offset="30%" style="stop-color:rgb(107,224,217);stop-opacity:0"/>
                <stop offset="100%" style="stop-color:rgb(107,224,217);stop-opacity:1"/>
            </linearGradient>
        </defs>
    </svg>
</div>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="arrow-next" viewBox="0 0 25 9">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M19.125 0.736816V3.8236H0V5.79914H19.125V8.88593L25 4.81137L19.125 0.736816Z"/>
    </symbol>

    <symbol id="big-circle" viewBox="0 0 790 791">
        <path fill="transparent"
              d="M715 395.199C715 218.358 571.731 75 395 75C218.269 75 75 218.358 75 395.199C75 566.64 205.5 716 384 716"
              stroke="#292C32" stroke-width="120"/>
    </symbol>

    <symbol id="small-circle" viewBox="0 0 406 398">
        <path fill="transparent" d="M-1.17888e-05 323C176.892 323 331 186.587 331 0" stroke="#292C32"
              stroke-width="120"/>
    </symbol>

    <symbol id="slider-arrow-prev" viewBox="0 0 12 17">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 16.7368L9.5399e-08 8.73682L12 0.736817L12 16.7368Z"/>
    </symbol>

    <symbol id="slider-arrow-next" viewBox="0 0 12 17">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M9.53674e-07 0.736816L12 8.73682L2.54292e-07 16.7368L9.53674e-07 0.736816Z"/>
    </symbol>

    <symbol id="facebook-icon" viewBox="0 0 15 15">
        <path d="M7.5 0C3.36452 0 0 3.36452 0 7.5C0 11.6352 3.36452 15 7.5 15C11.6352 15 15 11.6352 15 7.5C15 3.36452 11.6358 0 7.5 0ZM9.36518 7.76404H8.14499C8.14499 9.71351 8.14499 12.1131 8.14499 12.1131H6.3369C6.3369 12.1131 6.3369 9.73677 6.3369 7.76404H5.47742V6.22694H6.3369V5.23272C6.3369 4.52066 6.67526 3.40802 8.1616 3.40802L9.50143 3.41316V4.90524C9.50143 4.90524 8.68726 4.90524 8.52896 4.90524C8.37066 4.90524 8.14559 4.98439 8.14559 5.32395V6.22724H9.52318L9.36518 7.76404Z"/>
    </symbol>

    <symbol id="instagram-icon" viewBox="0 0 15 15">
        <path d="M13.5 0H1.5C0.675 0 0 0.675 0 1.5V13.5C0 14.325 0.675 15 1.5 15H13.5C14.325 15 15 14.325 15 13.5V1.5C15 0.675 14.325 0 13.5 0ZM7.5 4.5C9.15 4.5 10.5 5.85 10.5 7.5C10.5 9.15 9.15 10.5 7.5 10.5C5.85 10.5 4.5 9.15 4.5 7.5C4.5 5.85 5.85 4.5 7.5 4.5ZM1.875 13.5C1.65 13.5 1.5 13.35 1.5 13.125V6.75H3.075C3 6.975 3 7.275 3 7.5C3 9.975 5.025 12 7.5 12C9.975 12 12 9.975 12 7.5C12 7.275 12 6.975 11.925 6.75H13.5V13.125C13.5 13.35 13.35 13.5 13.125 13.5H1.875ZM13.5 3.375C13.5 3.6 13.35 3.75 13.125 3.75H11.625C11.4 3.75 11.25 3.6 11.25 3.375V1.875C11.25 1.65 11.4 1.5 11.625 1.5H13.125C13.35 1.5 13.5 1.65 13.5 1.875V3.375Z"/>
    </symbol>

    <symbol id="twitter-icon" viewBox="0 0 15 15">
        <path d="M7.5 0C3.35812 0 0 3.35812 0 7.5C0 11.6419 3.35812 15 7.5 15C11.6419 15 15 11.6419 15 7.5C15 3.3572 11.6419 0 7.5 0ZM11.2312 5.81624L11.2369 6.0553C11.2369 8.49654 9.37969 11.3091 5.98311 11.3091C4.94061 11.3091 3.97029 11.0034 3.1528 10.4794C3.29719 10.4962 3.44435 10.5056 3.59343 10.5056C4.45875 10.5056 5.25468 10.2103 5.88655 9.71528C5.07843 9.70029 4.39685 9.16591 4.16155 8.4328C4.27498 8.45435 4.38936 8.46468 4.50936 8.46468C4.67811 8.46468 4.84122 8.44313 4.99591 8.40094C4.15122 8.23031 3.51467 7.48501 3.51467 6.59064V6.5672C3.76403 6.70595 4.04809 6.78844 4.3509 6.79878C3.8559 6.46784 3.52965 5.90252 3.52965 5.26221C3.52965 4.92378 3.6206 4.6069 3.77902 4.3341C4.68934 5.45159 6.05058 6.18658 7.58527 6.26347C7.55338 6.12845 7.53747 5.9869 7.53747 5.84254C7.53747 4.82349 8.36433 3.99659 9.38435 3.99659C9.91497 3.99659 10.395 4.22064 10.7325 4.5797C11.1525 4.49625 11.5481 4.34252 11.9053 4.13157C11.7675 4.56283 11.475 4.9247 11.0934 5.15344C11.4656 5.10937 11.8228 5.00905 12.1537 4.86281C11.9062 5.23217 11.5922 5.55749 11.2312 5.81624Z"/>
    </symbol>
</svg>

<!-- App-header -->
<header id="app-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 col-sm-5">
                <nav class="header-nav">
                    <ul class="menu-list">
                        <li>
                            <a href="#">
                                О нас
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Портфолио
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Блог
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="burger-menu">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                    <div class="line line--close line--left"></div>
                    <div class="line line--close line--right"></div>
                </div>
            </div>
            <div class="col-6 col-sm-2">
                <a href="/" class="logo">
                    <img src="../../images/icon/logo.png" alt="logo">
                </a>
            </div>
            <div class="col-sm-5">
                <div class="header-contacts">
                    <div class="contacts-item">
                        <div class="contacts-item__title">
                            номер телефона
                        </div>
                        <a href="tel:<?= phone_link($phone) ?>" class="contacts-item__link">
                            <?= $phone; ?>
                        </a>
                    </div>
                    <div class="contacts-item">
                        <div class="contacts-item__title">
                            номер телефона
                        </div>
                        <a href="tel:<?= phone_link($phone) ?>" class="contacts-item__link">
                            <?= $phone; ?>
                        </a>
                    </div>
                    <a href="#" class="btn btn-primary d-none d-sm-inline-flex">
                        Связаться с нами
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-wrap">
            <ul class="menu-list">
                <li>
                    <a href="#">
                        О нас
                    </a>
                </li>
                <li>
                    <a href="#">
                        Портфолио
                    </a>
                </li>
                <li>
                    <a href="#">
                        Блог
                    </a>
                </li>
                <li>
                    <a href="#">
                        Контакты
                    </a>
                </li>
            </ul>
            <div class="menu-contacts">
                <div class="contacts-item">
                    <div class="contacts-item__title">
                        номер телефона
                    </div>
                    <a href="tel:<?= phone_link($phone) ?>" class="contacts-item__link">
                        <?= $phone; ?>
                    </a>
                </div>
                <div class="contacts-item">
                    <div class="contacts-item__title">
                        номер телефона
                    </div>
                    <a href="tel:<?= phone_link($phone) ?>" class="contacts-item__link">
                        <?= $phone; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>