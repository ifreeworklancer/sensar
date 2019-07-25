<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page Blog -->
    <section id="page-blog" class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Главная станица </a></li>
                            <li class="breadcrumb-item active">Блог</li>
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
                <div class="col-12 text-center">
                    <h1 class="section-title">
                        Блог
                    </h1>
                </div>
                <?php foreach ($blog['item'] as $item) : ?>
                    <div class="col-sm-7 col-lg-4">
                        <a href="#" class="blog-card">
                            <h3 class="title">
                                <?= $item['title']; ?>
                            </h3>
                            <div class="image">
                                <img src="<?= $item['image']; ?>" alt="blog image">
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php
require_once('../views/modules/page-section-feedback.php');
require_once('../views/base/footer.php');