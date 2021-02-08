<?php

require DOCROOT . 'engine/db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item = dbGetRow('select * from gallery where id = ' . (int)$_GET['id'] .';');

    $connection = $GLOBALS['connection'];
    mysqli_query($connection, 'UPDATE gallery SET views=' . ($item['views'] + 1) . ' WHERE id =' . (int)$_GET['id'] . ';');

    if (!$item) {
        abort(404);
    }
    $title = 'Просмотр картинки';
    $content = view('elements/onephoto', ['item' => $item]);
    return require TPL_PATH . 'layout.php';
}


if (isset($_POST['username']) && $_POST['username']) {
    $log = 'Пользователь ' . $_POST['username'] . ' вошёл под своим именем в ' . date('Y-m-d H:i:s');
    writeLog($log, 'login/login');

    $pathToImg = DOCROOT . 'public' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'icons' . DIRECTORY_SEPARATOR;
    if (isset($_FILES['file']['name']) && $_FILES['file']['name']) {
        if(!copy($_FILES['file']['tmp_name'], $pathToImg . date('Y_m_d_H-i_') . $_FILES['file']['name'])) {
            echo $_FILES['file']['error'];
        }
    }

    header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
}

$title = 'Галерея картинок';

$data = dbGetAll('select * from gallery ORDER BY `views` DESC;');

$content = view('pages/gallerypg', ['photos' => $data]);

require TPL_PATH . 'layout.php';