<!-- Portfolio -->
<section id="portfolio-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-11 mx-auto">
                <div class="portfolio-slider portfolio-slider--end portfolio-slider--main">
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
                <div class="slider-nav">
                    <div class="slider-nav-counter">
                        <div class="slider-preloader">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <ul class="slider-count">
                            <li class="slider-count-index slider-count-index--portfolioMain">01</li>
                            <li class="separator">/</li>
                            <li class="slider-count-last slider-count-last--portfolioMain">01</li>
                        </ul>
                        <div class="decor-line"></div>
                    </div>
                    <div class="slider-nav-arrow">
                        <div class="slider-nav-arrow-item slider-nav-arrow-item--prev slider-nav-arrow-item--prev--portfolioMain">
                            ПРЕД
                            <svg width="16" height="12" class="ml-3">
                                <use xlink:href="#slider-arrow-prev"></use>
                            </svg>
                        </div>
                        <div class="slider-nav-arrow-item slider-nav-arrow-item--next slider-nav-arrow-item--next--portfolioMain">
                            <svg width="16" height="12" class="mr-3">
                                <use xlink:href="#slider-arrow-next"></use>
                            </svg>
                            СЛЕД
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
