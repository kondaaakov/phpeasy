<?php
$title = 'Домашняя работа №2';

// Задание №1
/*
Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
*/
$a = 15;
$b = 10;

if ($a >= 0 && $b >= 0) {
	$result1 = $a - $b;
} else if ($a < 0 && $b < 0) {
	$result1 = $a * $b;
} else {
	$result1 = $a + $b;
}
// Задание №2
/*
Присвоить переменной $а значение в промежутке [0..15].
С помощью оператора switch организовать вывод чисел от $a до 15.
*/
$resArr = [];
$arg = 10;
switch ($arg) {
    case '1':
        array_push($resArr, '1');
    case '2':
        array_push($resArr, '2');
    case '3':
        array_push($resArr, '3');
    case '4':
        array_push($resArr, '4');
    case '5':
        array_push($resArr, '5');
    case '6':
        array_push($resArr, '6');
    case '7':
        array_push($resArr, '7');
    case '8':
        array_push($resArr, '8');
    case '9':
        array_push($resArr, '9');
    case '10':
        array_push($resArr, '10');
    case '11':
        array_push($resArr, '11');
    case '12':
        array_push($resArr, '12');
    case '13':
        array_push($resArr, '13');
    case '14':
        array_push($resArr, '14');
    case '15':
        array_push($resArr, '15');
}

// Задание №3
/*
Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.
*/

function sum ($arg1, $arg2) {
	return $arg1 + $arg2;
}

function sub ($arg1, $arg2) {
    return $arg1 - $arg2;
}

function mul ($arg1, $arg2) {
    return $arg1 * $arg2;
}

function div ($arg1, $arg2) {
    return $arg1 / $arg2;
}

// Задание №4
/*
Реализовать функцию с тремя параметрами:
function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с
названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

function mathOperation ($arg1, $arg2, $operation) {
    $result = 0;

	switch ($operation) {
		case 'sum':
			$result = $arg1 + $arg2;
			break;
		case 'sub':
			$result = $arg1 - $arg2;
			break;
		case 'mul':
			$result = $arg1 * $arg2;
			break;
		case 'div':
			$result = $arg1 / $arg2;
			break;
	}

	return $result;
}

// Задание №5
/*
Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи
встроенных функций PHP.
*/
$today = date('Y');

// Задание №6
/*
С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val –
заданное число, $pow – степень.
*/

function recurse ($val, $pow) {
	if ($pow === 1) return $val;
	if ($pow != 1) return $val * recurse($val, $pow - 1);
}

// Задание №7
/*
Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты
*/



function strHour ($hours) {
	$str = '';

	if ($hours === 00 || $hours > 4 && $hours < 21) {
		$str = $hours . ' часов';
	} else if ($hours === 1 || $hours === 21) {
        $str = $hours . ' час';
	} else {
        $str = $hours . ' часа';
	}

	return $str;
}

function strMin ($min) {
	$str = '';
	$res = $min % 10;

	if ($min % 10 === 0 || $min % 10 > 4 && $min % 10 <= 9) {
		$str = $min . ' минут';
	} else if ($min % 10 === 1) {
        $str = $min . ' минута';
	} else {
        $str = $min . ' минуты';
	}

	return $str;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
</head>
<body>
<div>
	<h3>Задание №1</h3>
	<p>
		Переменная a = <?= $a ?><br>
		Переменная b = <?= $b ?><br>
		Их результат: <?= $result1 ?>.
	</p>
</div>

<div>
	<h3>Задание №2</h3>
	<ul>
        <?php foreach($resArr as $elem): ?>
		<li><?= $elem ?></li>
        <?php endforeach; ?>
	</ul>
</div>

<div>
	<h3>Задание №3</h3>
	<p>10 + 15 = <?= sum(10, 15) ?></p>
	<p>4 - 2 = <?= sub(4, 2) ?></p>
	<p>6 * 3 = <?= mul(6, 3) ?></p>
	<p>20 / 2 = <?= div(20, 2) ?></p>
</div>

<div>
	<h3>Задание №4</h3>

	<p>Сложение: 1 + 2 = <?= mathOperation(1, 2, 'sum') ?></p>
	<p>Вычитание: 10 - 3 = <?= mathOperation(10, 3, 'sub') ?></p>
	<p>Умножение: 10 * 20 = <?= mathOperation(10, 20, 'mul') ?></p>
	<p>Деление: 100 / 5 = <?= mathOperation(100, 5, 'div') ?></p>
</div>

<div>
	<h3>Задание №5</h3>
	<p>Сегодня <?= $today ?> год</p>
</div>

<div>
	<h3>Задание №6</h3>
	<p>3 в 5 степени: <?= recurse(8, 2) ?></p>
</div>

<div>
	<h3>Задание №7</h3>
	<p>Сейчас: <?= strHour(date('H')) ?>, <?= strMin(date('i')) ?></p>
</div>
</body>
</html>