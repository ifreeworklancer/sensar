<!-- Advantages -->
<section id="advantages" style="background-image:url('<?= $advantages['background_image']; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center">
                    <?= $advantages['title']; ?>
                </h2>
            </div>
            <?php
            foreach ($advantages['item'] as $item) :
                ?>
                <div class="col-lg-6">
                    <div class="advantages-item">
                        <div class="image">
                            <div class="image-bg-dark">
                                <img src="<?= $item['image']; ?>" alt="advantages image">
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">
                                <?= $item['title']; ?>
                            </h3>
                            <?= $item['description']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>