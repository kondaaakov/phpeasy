<main class="container center">
    <div class="feedback_block container_block">
        <div class="makereview">
            <h1 class="section_title">Оставить свой отзыв</h1>
            <form method="post" class="review_form">
                <label for="name" class="review_label">Ваше имя:</label>
                <input type="text" name="name" class="review_input" placeholder="Введите ваше имя" required>

                <label for="review" class="review_label">Ваш отзыв:</label>
                <textarea name="review" id="review" cols="30" rows="10" placeholder="Введите ваш отзыв" class="review_area"></textarea>

                <button class="btn" type="submit">Отправить</button>
            </form>
        </div>

        <div class="reviews">
            <h1 class="section_title">
                Отзывы о нас
            </h1>

            <div class="reviews_section">
                <?php foreach ($reviews as $review): ?>
                <div class="review">
                    <h2 class="review_title"><?= $review['name'] ?></h2>
                    <p class="review_text">
                        <?= $review['text'] ?>
                    </p>
                    <p class="review_date"><?= $review['created_at'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>