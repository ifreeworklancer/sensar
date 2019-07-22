<!-- Blog -->
<section id="blog">
    <div class="container">
        <div class="row justify-content-center justify-content-xl-between">
            <!-- there must be foreach category -->
            <div class="col-sm-8 col-lg-7 col-xl-5">
                <div class="blog-item blog-item--high">
                    <div class="content">
                        <h3 class="title">
                            <?= $blog['item'][0]['title']; ?>
                        </h3>
                        <div class="description">
                            <?= $blog['item'][0]['description']; ?>
                        </div>
                        <a href="#" class="link-more">
                            Узнать больше
                            <svg width="25" height="10">
                                <use xlink:href="#arrow-next"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="image">
                        <img src="<?= $blog['item'][0]['image']; ?>" alt="blog image">
                    </div>
                    <div class="decor-bg"></div>
                </div>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6 d-flex flex-column justify-content-between">
                <div class="blog-item blog-item--right">
                    <div class="content">
                        <h3 class="title">
                            <?= $blog['item'][1]['title']; ?>
                        </h3>
                        <div class="description">
                            <?= $blog['item'][1]['description']; ?>
                        </div>
                        <a href="#" class="link-more">
                            Узнать больше
                            <svg width="25" height="10">
                                <use xlink:href="#arrow-next"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="image">
                        <img src="<?= $blog['item'][1]['image']; ?>" alt="blog image">
                    </div>
                    <div class="decor-bg"></div>
                </div>
                <div class="blog-item blog-item--left">
                    <div class="content">
                        <h3 class="title">
                            <?= $blog['item'][2]['title']; ?>
                        </h3>
                        <div class="description">
                            <?= $blog['item'][2]['description']; ?>
                        </div>
                        <a href="#" class="link-more">
                            Узнать больше
                            <svg width="25" height="10">
                                <use xlink:href="#arrow-next"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="image">
                        <img src="<?= $blog['item'][2]['image']; ?>" alt="blog image">
                    </div>
                    <div class="decor-bg"></div>
                </div>
                <div class="description-section">
                    <p>Посмотеть все статьи в блоге по всем категориям</p>
                    <a href="#" class="btn btn-primary">в блог</a>
                </div>
            </div>
        </div>
    </div>
</section>