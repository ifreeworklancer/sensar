<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Single Portfolio -->
    <section id="single-portfolio" class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Главная станица </a></li>
                            <li class="breadcrumb-item"><a href="#">Портфолио</a></li>
                            <li class="breadcrumb-item active">Comfort City</li>
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
            <div class="row position-relative">
                <div class="decor-bg"></div>
                <div class="col-sm-11 mx-auto">
                    <div class="portfolio-description">
                        <h1 class="title">
                            <?= $single_portfolio['title']; ?>
                        </h1>
                        <div class="content">
                            <div class="logo">
                                <img src="<?= $single_portfolio['logo']; ?>" alt="logo">
                            </div>
                            <div class="description">
                                <div class="place">
                                    <?= $single_portfolio['place']; ?>
                                </div>
                                <?= $single_portfolio['description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h3 class="section-title mb-4">
                        Фото
                    </h3>
                </div>
                <?php foreach ($single_portfolio['images'] as $item) : ?>
                    <div class="col-sm-4 px-0">
                        <a href="<?= $item; ?>" data-fancybox="images" class="portfolio-gallery-item">
                            <div>
                                <img src="<?= $item; ?>" alt="image">
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                <div class="col-12 text-center mt-5">
                    <a href="#" class="btn btn-outline-primary">
                        Хочу еще
                    </a>
                </div>
                <div class="col-12">
                    <h3 class="section-title mt-5 mb-4">
                        Видое
                    </h3>
                </div>
                <?php foreach ($single_portfolio['video'] as $item) : ?>
                    <div class="col-sm-4 px-0">
                        <a href="<?= $item['link']; ?>" data-fancybox="video" class="portfolio-gallery-item">
                            <div>
                                <img src="<?= $item['preview']; ?>" alt="image">
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                <!-- Use this block if there are more than six items in the gallery  -->
                <!--                <div class="col-12 text-center mt-5">-->
                <!--                    <a href="#" class="btn btn-outline-primary">-->
                <!--                        Хочу еще-->
                <!--                    </a>-->
                <!--                </div>-->
            </div>
        </div>
    </section>

<?php
require_once('../views/modules/page-section-feedback.php');
require_once('../views/base/footer.php');