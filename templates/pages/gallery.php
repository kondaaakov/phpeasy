
<main class="container center">
	<div class="form_block container_block">
		<h2 class="section_title">Вы можете добавить свою!</h2>
        <?php require(TPL_PATH . 'elements/form.php') ?>
	</div>

	<div class="gallery_block container_block">
		<h2 class="section_title">Галерея фотографий</h2>
		<div class="gallery" id="gallery">
            <?php foreach ($photos as $key): ?>
	            <div class="photo_block">
		            <img class="gallery_img" src="./img/icons/<?= $key['name'] ?>.svg" id="<?= $key['id'] ?>" data-name="<?= $key['name'] ?>" alt="">
		            <p class="photo_bottom"><img src="./img/sees.png" class="gallery_sees" alt=""><?= $key['views'] ?></p>
	            </div>
            <?php endforeach; ?>
		</div>
	</div>
</main>

<script src="./js/gallery.js"></script>