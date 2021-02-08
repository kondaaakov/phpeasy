<?php
require DOCROOT . 'engine/db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $product = dbGetRow('select * from catalog where id = ' . (int)$_GET['id'] .';');;

    if (!$product) {
        abort(404);
    }

    $title = 'Товар ' . $product['title'];
    $content = view('elements/oneproduct', ['product' => $product]);
    return require TPL_PATH . 'layout.php';
}

$title = 'Каталог товаров';
$data = dbGetAll('select * from catalog;');;
$content = view('pages/catalogpg', ['goods' => $data,]);

require TPL_PATH . 'layout.php';
