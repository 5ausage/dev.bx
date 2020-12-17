<?php

echo 'Введите элементы массива через пробел'.PHP_EOL;
$str = trim(fgets(STDIN));

$a = explode(' ', $str);

function no_pair(array $x)
{
	for($i = 0; $i < count($x); $i++)
	{
		for($j = 0; $j < count($x); $j++)
		{
			if($i != $j && $x[$i] == $x[$j])
			{
				break;
			}
		}
		if($j == count($x))
		{
			return $x[$i];
		}
	}
}

$result = no_pair($a);
echo $result;

/*
(A6) Дан массив (последовтельных чисел) с нечетным числом элементов, содержащий все значения парные, кроме одного.
Напишите функцию, которая найдет число без пары.

https://trycode.pw/c/UJWBN
*/
