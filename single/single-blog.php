<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Single Blog -->
    <section id="single-blog" class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Главная станица </a></li>
                            <li class="breadcrumb-item"><a href="#">Блог</a></li>
                            <li class="breadcrumb-item active">Новости</li>
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
                <div class="col">
                    <h1 class="section-title text-center">
                        <?= $single_blog['title'] ?>
                    </h1>
                </div>
                <?php foreach ($single_blog['item'] as $item) : ?>
                    <div class="col-12">
                        <article class="blog-item">
                            <div class="image">
                                <div>
                                    <img src="<?= $item['image'] ?>" alt="blog image">
                                </div>
                            </div>
                            <div class="content">
                                <div>
                                    <div class="data">
                                        <?= $item['data'] ?>
                                    </div>
                                    <h3 class="title">
                                        <?= $item['title'] ?>
                                    </h3>
                                    <div class="description">
                                        <?= $item['description'] ?>
                                    </div>
                                    <a href="#portfolio-main" class="link-more scroll-link">
                                        Узнать больше
                                        <svg width="25" height="10">
                                            <use xlink:href="#arrow-next"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
                <div class="col d-flex flex-column flex-sm-row justify-content-center align-items-center mt-4">
                    <a href="#" class="btn btn-outline-primary mb-4 mb-sm-0 mr-sm-4">
                        Больше новостей
                    </a>
                    <a href="#" class="btn btn-primary">
                        В блог
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/modules/page-section-feedback.php');
require_once('../views/base/footer.php');