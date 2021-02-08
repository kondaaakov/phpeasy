<main class="container center">
	<div class="article container_block">
		<div class="article_header">
			<a href="/blog/" class="article_back">Назад</a>
			<h1 class="article_title"><?= $article['title'] ?></h1>
			<p class="article_time"><?= changeDateFormat ($article['created_at'], "Y-m-d H:i:s", 'G:i d.m.Y') ?></p>
		</div>
		<div class="article_middle">
			<img src="/img/news/<?= $article['img_path'] ?>.jpg" alt="" class="article_img">
		</div>
		<div class="article_body">
			<p class="article_text">
                <?= $article['body'] ?>
			</p>
		</div>
	</div>
</main>