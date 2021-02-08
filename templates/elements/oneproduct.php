<main class="container center">
    <div class="product_blog container_block">
        <img src="/img/catalog/<?= $product['path_photo'] ?>" alt="" class="item_img">
        <div class="product_side">
            <a href="/catalog/" class="product_link">Назад</a>
            <h1 class="product_title"><?= $product['title'] ?></h1>
            <p class="product_price"><?= $product['price'] ?> руб. за 1 <?= $product['meas'] ?>.</p>
        </div>
    </div>
</main>
