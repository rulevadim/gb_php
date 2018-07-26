<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
</head>
<body>
<?php
	/**
	1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
	Затем написать скрипт, который работает по следующему принципу:
	если $a и $b положительные, вывести их разность;
	если $а и $b отрицательные, вывести их произведение;
	если $а и $b разных знаков, вывести их сумму;
	Ноль можно считать положительным числом.
	*/
	function result(int $a, int $b) {
		if ($a >= 0 and $b >= 0) {
			return $a - $b;
		} elseif ($a < 0 and $b < 0) {
			return $a * $b;
		} else {
			return $a + $b;
		}
	}

	$a = -5;
	$b = -10;
	echo result($a, $b);


	echo '<br>';
	/**
	2. Присвоить переменной $а значение в промежутке [0..15].
	С помощью оператора switch организовать вывод чисел от $a до 15.
	*/
	function outTo15(int $a) {
		$out = '';
		switch ($a) {
			case 0:
				$out = '0 ';
			case 1:
				$out .= '1 ';
			case 2:
				$out .= '2 ';
			case 3:
				$out .= '3 ';
			case 4:
				$out .= '4 ';
			case 5:
				$out .= '5 ';
			case 6:
				$out .= '6 ';
			case 7:
				$out .= '7 ';
			case 8:
				$out .= '8 ';
			case 9:
				$out .= '9 ';
			case 10:
				$out .= '10 ';
			case 11:
				$out .= '11 ';
			case 12:
				$out .= '12 ';
			case 13:
				$out .= '13 ';
			case 14:
				$out .= '14 ';
			case 15:
				$out .= '15';
		}
		return $out;
	}
	$a = 0;
	echo outTo15($a);


	echo '<br>';
	/**
	3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
	Обязательно использовать оператор return.
	*/
	function addition($a, $b) {
		return $a + $b;
	}

	function subtraction($a, $b) {
		return $a - $b;
	}

	function division($a, $b) {
		return $a / $b;
	}

	function multiplication($a, $b) {
		return $a * $b;
	}


	echo '<br>';
	/**
	4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
	где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости
	от переданного значения операции выполнить одну из арифметических операций (использовать функции
	из пункта 3) и вернуть полученное значение (использовать switch).
	*/
	function mathOperation($arg1, $arg2, $operation) {
		switch ($operation) {
			case 'addition': return addition($arg1, $arg2);
			case 'subtraction': return subtraction($arg1, $arg2);
			case 'division': return division($arg1, $arg2);
			case 'multiplication': return multiplication($arg1, $arg2);
		}
	}
	echo mathOperation(5, 9, 'division');


	echo '<br>';
	/**
	5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон,
	вывести текущий год в подвале при помощи встроенных функций PHP.
	*/
	$year = date('Y');
	echo $year . ' год';
?>
</body>
</html>