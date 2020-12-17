<?php

$k = 0;

echo 'Введите числа через пробел'.PHP_EOL;
$str = trim(fgets(STDIN));

$number = explode(' ', $str);

echo 'Введите требуемое число'.PHP_EOL;
$m = trim(fgets(STDIN));

for($i = 0; $i < count($number); $i++)
{
	if ($number[$i] == $m)
	{
		$k = 1;
	}
}

echo ($k == 0 ? "false" : "true");

/*
(A5) У вас есть последовательность случайных чисел переменной длины,
напишите алгоритм, который будет возвращать true в случае,
если в этом массиве данных есть искомое число, или false, если его нет.

https://trycode.pw/c/W3VBA
*/