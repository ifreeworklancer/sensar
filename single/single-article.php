<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Single Article -->
    <section id="single-article" class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Главная станица </a></li>
                            <li class="breadcrumb-item"><a href="#">Блог</a></li>
                            <li class="breadcrumb-item"><a href="#">Новости</a></li>
                            <li class="breadcrumb-item active">Статья</li>
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
                <div class="col-sm-10 mx-auto">
                    <div class="article-blog">
                        <div class="image">
                            <div>
                                <img src="<?= $single_article['image']; ?>" alt="image article">
                            </div>
                        </div>
                        <h1 class="title">
                            <?= $single_article['title']; ?>
                        </h1>
                        <div class="description">
                            <div class="subtitle">
                                <?= $single_article['subtitle']; ?>
                            </div>
                            <?= $single_article['description']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/modules/page-section-feedback.php');
require_once('../views/base/footer.php');