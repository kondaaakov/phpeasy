<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="./styles/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;800;900&display=swap" rel="stylesheet">

	<title><?= isset($title) ? $title : 'Заголовок страницы' ?></title>
</head>
<body>
	<?php isset($header) ? require($header) : null ?>
    <?php isset($content) ? require($content) : null ?>
</body>
</html>