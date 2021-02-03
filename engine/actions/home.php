<?php

$title = 'Главная';
$content = TPL_PATH . 'pages/gallery.php';
$header = TPL_PATH . 'elements/header.php';

if (isset($_POST['username']) && $_POST['username']) {
    $filename = DOCROOT . '/data/logs/login' . date('_Y_m_d') . '.log';
    $handle = fopen($filename, 'a');
    $log = 'Пользователь ' . $_POST['username'] . ' вошёл под своим именем в ' . date('Y-m-d H:i:s') . PHP_EOL;
    $pathToImg = DOCROOT . 'public' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'icons' . DIRECTORY_SEPARATOR;

    if(!fwrite($handle, $log)) {
        echo 'Не удалось записать файл';
    }

    if (isset($_FILES['file']['name']) && $_FILES['file']['name']) {
        if(!copy($_FILES['file']['tmp_name'], $pathToImg . date('Y_m_d_H-i_') . $_FILES['file']['name'])) {
            echo $_FILES['file']['error'];
        }
    }

    header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
}

$photosArr = getImg('img/icons');

require(TPL_PATH . 'layout.php');
