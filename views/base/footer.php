<!-- Contacts -->
<section id="contacts">
    <div class="map-contacts">
        <div class="map-mask">
            Нажмите для использования карты
        </div>
        <div id="contacts-map"></div>
    </div>
    <div class="contain-fluid">
        <div class="row w-100 m-0">
            <div class="col-lg-6">
                <div class="contacts-wrapper">
                    <a href="/" class="logo">
                        <img src="../../images/icon/logo.png" alt="logo">
                    </a>
                    <h2 class="title">
                        Контактная информация
                    </h2>
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

</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container-fluid px-5">
        <div class="row justify-content-between">
            <div class="footer-item footer-copyright">
                2019 Все права защищены
            </div>
            <ul class="social-list">
                <li>
                    <a href="#">
                        <svg width="15" height="15">
                            <use xlink:href="#facebook-icon"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg width="15" height="15">
                            <use xlink:href="#instagram-icon"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg width="15" height="15">
                            <use xlink:href="#twitter-icon"></use>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="footer-item">
                Разработка и дизайн <a href="https://impressionbureau.pro/" target="_blank">Impression Bureau</a>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>