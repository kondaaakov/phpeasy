<main class="container center">
    <div class="news_block container_block">

	    <?php foreach ($news as $key): ?>
	        <div class="post">
	            <a href="/blog/?id=<?= $key['id'] ?>" class="post_title"><?= $key['title'] ?></a>
		        <div class="post_middle">
			        <img src="/img/news/<?= $key['img_path'] ?>.jpg" alt="" class="post_img">
			        <p class="post_body">
	                    <?= $key['body'] ?>
			        </p>
		        </div>
	            <div class="post_bottom">
	                <p class="post_time"><?= changeDateFormat ($key['created_at'], "Y-m-d H:i:s", 'G:i d.m.Y')?></p>
	                <a href="/blog/?id=<?= $key['id'] ?>" class="post_link">Подробнее</a>
	            </div>
	        </div>
	    <?php endforeach; ?>

    </div>
</main>