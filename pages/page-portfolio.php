<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page Portfolio -->
    <section id="page-portfolio" class="page-section page-section-portfolio">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Главная станица </a></li>
                            <li class="breadcrumb-item active">Портфолио</li>
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
                <div class="col-xl-10 offset-xl-2">
                    <h1 class="section-title mt-4 mt-sm-0 mb-0">
                        Наше портфолио
                    </h1>
                </div>
                <div class="col-12">
                    <div class="portfolio-slider portfolio-slider--end portfolio-slider--secondary">
                        <?php
                        foreach ($portfolio['item'] as $item) :
                            ?>
                            <div class="portfolio-item">
                                <div class="place"><?= $item['place'] ?></div>
                                <div class="image" style="background-image: url('<?= $item['image'] ?>');"></div>
                                <div class="description">
                                    <div class="logo">
                                        <img src="<?= $item['logo'] ?>" alt="logo">
                                    </div>
                                    <div class="content">
                                        <div class="subtitle">
                                            Портфолио
                                        </div>
                                        <h3 class="title">
                                            <?= $item['title'] ?>
                                        </h3>
                                        <p>
                                            <?= $item['description'] ?>
                                        </p>
                                        <a href="#" class="link-more">
                                            Узнать больше
                                            <svg width="25" height="10">
                                                <use xlink:href="#arrow-next"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="decor-title decor-title--white"><?= $item['title'] ?></div>
                                <div class="decor-title decor-title--transparent"><?= $item['title'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="portfolio-slider portfolio-slider--start portfolio-slider--secondary">
                        <?php
                        foreach ($portfolio['item'] as $item) :
                            ?>
                            <div class="portfolio-item">
                                <div class="place"><?= $item['place'] ?></div>
                                <div class="image" style="background-image: url('<?= $item['image'] ?>');"></div>
                                <div class="description">
                                    <div class="logo">
                                        <img src="<?= $item['logo'] ?>" alt="logo">
                                    </div>
                                    <div class="content">
                                        <div class="subtitle">
                                            Портфолио
                                        </div>
                                        <h3 class="title">
                                            <?= $item['title'] ?>
                                        </h3>
                                        <p>
                                            <?= $item['description'] ?>
                                        </p>
                                        <a href="#" class="link-more">
                                            Узнать больше
                                            <svg width="25" height="10">
                                                <use xlink:href="#arrow-next"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="decor-title decor-title--white"><?= $item['title'] ?></div>
                                <div class="decor-title decor-title--transparent"><?= $item['title'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="portfolio-slider portfolio-slider--end portfolio-slider--secondary">
                        <?php
                        foreach ($portfolio['item'] as $item) :
                            ?>
                            <div class="portfolio-item">
                                <div class="place"><?= $item['place'] ?></div>
                                <div class="image" style="background-image: url('<?= $item['image'] ?>');"></div>
                                <div class="description">
                                    <div class="logo">
                                        <img src="<?= $item['logo'] ?>" alt="logo">
                                    </div>
                                    <div class="content">
                                        <div class="subtitle">
                                            Портфолио
                                        </div>
                                        <h3 class="title">
                                            <?= $item['title'] ?>
                                        </h3>
                                        <p>
                                            <?= $item['description'] ?>
                                        </p>
                                        <a href="#" class="link-more">
                                            Узнать больше
                                            <svg width="25" height="10">
                                                <use xlink:href="#arrow-next"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="decor-title decor-title--white"><?= $item['title'] ?></div>
                                <div class="decor-title decor-title--transparent"><?= $item['title'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="portfolio-slider portfolio-slider--start portfolio-slider--secondary">
                        <?php
                        foreach ($portfolio['item'] as $item) :
                            ?>
                            <div class="portfolio-item">
                                <div class="place"><?= $item['place'] ?></div>
                                <div class="image" style="background-image: url('<?= $item['image'] ?>');"></div>
                                <div class="description">
                                    <div class="logo">
                                        <img src="<?= $item['logo'] ?>" alt="logo">
                                    </div>
                                    <div class="content">
                                        <div class="subtitle">
                                            Портфолио
                                        </div>
                                        <h3 class="title">
                                            <?= $item['title'] ?>
                                        </h3>
                                        <p>
                                            <?= $item['description'] ?>
                                        </p>
                                        <a href="#" class="link-more">
                                            Узнать больше
                                            <svg width="25" height="10">
                                                <use xlink:href="#arrow-next"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="decor-title decor-title--white"><?= $item['title'] ?></div>
                                <div class="decor-title decor-title--transparent"><?= $item['title'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col text-center">
                    <a href="#" class="btn btn-outline-primary">
                        Хочу еще
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/modules/page-section-feedback.php');
require_once('../views/base/footer.php');