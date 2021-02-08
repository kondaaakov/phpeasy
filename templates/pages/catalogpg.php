<main class="container center">
    <div class="catalog_block container_block">

	    <?php foreach($goods as $item): ?>
	        <div class="product">
		        <img src="/img/catalog/<?= $item['path_photo'] ?>" alt="" class="product_img">
		        <a href="?&id=<?= $item['id'] ?>" class="product_title"><?= $item['title'] ?></a>
		        <p class="product_price"><?= $item['price'] ?> руб. за 1 <?= $item['meas'] ?>.</p>
		        <button class="btn product_add_button">Добавить</button>
	        </div>
	    <?php endforeach; ?>

    </div>
</main>