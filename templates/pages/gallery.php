<main class="container center">
	<div class="form_block container_block">
		<h2 class="section_title">Вы можете добавить свою!</h2>
        <?php file_exists(TPL_PATH . 'elements/form.php') ? require(TPL_PATH . 'elements/form.php') : null ?>
	</div>

	<div class="gallery_block container_block">
		<h2 class="section_title">Галерея фотографий</h2>
		<div class="gallery" id="gallery">
            <?php foreach ($photosArr as $key): ?>
	            <div class="photo_block">
		            <img class="gallery_img" src="./img/icons/<?= $key ?>" id="<?= $key ?>" alt="">
	            </div>
            <?php endforeach; ?>
		</div>
	</div>
</main>

<script src="./js/gallery.js"></script>