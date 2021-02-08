<?php
require DOCROOT . 'engine/db.php';

if(isset($_POST['name'])) {
    $post = [];
    foreach ($_POST as $key => $value) {
        $post[$key] = dbEscape($value);
    }

    $connection = $GLOBALS['connection'];
    $result = mysqli_query($connection, $query = "INSERT INTO feedback(name, text) VALUES ('{$post['name']}', '{$post['review']}');");

    if ($result) header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    else var_dump(mysqli_error($connection) , $query);
}

$title = 'Обратная связь';
$data = dbGetAll('select * from feedback;');
$content = view('pages/feedbackpg', ['reviews' => $data]);

require TPL_PATH . 'layout.php';
