<!-- Blog -->
<section id="blog">
    <div class="container">
        <div class="row justify-content-center justify-content-xl-between">
            <div class="col-sm-10 col-lg-6">
                <h2 class="section-title">
                    <?= $blog['title']; ?>
                </h2>
            </div>
            <div class="col-sm-10 col-lg-6">
                <div class="description-section">
                    <?= $blog['description']; ?>
                    <a href="#" class="btn btn-primary">в блог</a>
                </div>
            </div>
            <?php foreach ($blog['item'] as $item) : ?>
                <div class="col-sm-7 col-xl-4">
                    <a href="#" class="blog-card">
                        <h4 class="title">
                            <?= $item['title']; ?>
                        </h4>
                        <div class="image">
                            <img src="<?= $item['image']; ?>" alt="blog image">
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>