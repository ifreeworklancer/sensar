<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page Contacts -->
    <section id="page-contacts" class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Главная станица </a></li>
                            <li class="breadcrumb-item active">Контакты</li>
                        </ol>
                    </nav>
                    <div class="logo">
                        <svg width="865" height="120">
                            <use xlink:href="#page-logo"></use>
                        </svg>
                    </div>
                    <a href="#" class="back-navigation">
                        назад
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="decor-bg"></div>
                    <h1 class="section-title text-center">
                        Контакты
                    </h1>
                    <div class="contacts-description">
                        <div class="map-contacts">
                            <div class="map-mask">
                                Нажмите для использования карты
                            </div>
                            <div id="contacts-page-maps"></div>
                        </div>
                        <div class="contacts-list">
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
                            <div class="contacts-item">
                                <div class="contacts-item__title">
                                    номер телефона
                                </div>
                                <a href="<?= $address_link ?>" target="_blank" class="contacts-item__link">
                                    <?= $address; ?>
                                </a>
                            </div>
                            <div class="contacts-item">
                                <div class="contacts-item__title">
                                    номер телефона
                                </div>
                                <a href="mailto:<?= $email; ?>" class="contacts-item__link">
                                    <?= $email; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/modules/page-section-feedback.php');
require_once('../views/base/footer-secondary.php');