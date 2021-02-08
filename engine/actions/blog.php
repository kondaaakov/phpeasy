<?php
require DOCROOT . 'engine/db.php';

if (!function_exists('changeDateFormat')) {
    /** Функция изменения одного формата даты и времени на другой.
     * @param $strDate - текущая строка даты;
     * @param $templateStr - шаблон текущей строки даты;
     * @param $currentTemplate - нужный шаблон строки даты.
     * @return string
     */
    function changeDateFormat (string $strDate, string $templateStr, string $currentTemplate): string {
        $str = date_create_from_format($templateStr, $strDate);
        return date_format($str, $currentTemplate);
    }
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $article = dbGetRow('select * from blog where id = ' . (int)$_GET['id'] .';');;

    if (!$article) {
        abort(404);
    }

    $title = $article['title'];
    $content = view('elements/onepost', ['article' => $article]);
    return require TPL_PATH . 'layout.php';
}

$title = 'Блог';
$data = dbGetAll('select * from blog;');
$content = view('pages/blogpg', ['news' => $data]);

require TPL_PATH . 'layout.php';
