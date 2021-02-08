<?php
$title = 'Калькулятор';

if (isset($_GET['numX'], $_GET['numY'])) {
    $x = (int) $_GET['numX'];
    $y = (int) $_GET['numY'];

    if ($_GET['operation'] === 'sum') {
        $result = $x + $y;
    } else if ($_GET['operation'] === 'sub') {
        $result = $x - $y;
    } else if ($_GET['operation'] === 'mult') {
        $result = $x * $y;
    } else if ($_GET['operation'] === 'div' && $y !== 0) {
        $result = $x / $y;
    } else {
        $result = 'На ноль делить нельзя!';
    }

    $content = view('pages/calcpg', ['result' => $result]);
}

$operations = [
    'sum' => '+',
    'sub' => '-',
    'mult' => '*',
    'div' => '/',
];
$content = view('pages/calcpg', ['operations' => $operations, 'result' => $result]);

require TPL_PATH . 'layout.php';
