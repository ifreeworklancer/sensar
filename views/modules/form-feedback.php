<div class="feedback">
    <div class="image">
        <img src="../../images/main/feedback-image.png" alt="feedback image">
    </div>
    <div class="content">
        <h2 class="title">
            Связаться с нами
        </h2>
        <div class="description">
            <p>Связаться с нами можно по телефону или оставив свои данные заполнив форму. Мы обязательно Вам
                перезвоним</p>
        </div>
        <form method="post" class="feedback-form">
            <div class="form-column">
                <div class="form-group">
                    <label for="user-name--<?= $name = generateRandomString(); ?>">Ваше имя</label>
                    <input type="text" name="name" class="form-control"
                           id="user-name--<?= $name; ?>" placeholder="Имя" required>
                </div>
                <div class="form-group">
                    <label for="user-phone--<?= $tel = generateRandomString(); ?>">Номер телефона</label>
                    <input type="tel" name="phone" class="form-control"
                           id="user-phone--<?= $tel; ?>" placeholder="Телефон" required>
                </div>
                <button type="submit" class="btn btn-primary">Связаться</button>
            </div>
        </form>
    </div>
</div>
