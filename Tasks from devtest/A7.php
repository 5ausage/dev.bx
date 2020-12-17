<?php

echo 'Введите строку'.PHP_EOL;
$a = trim(fgets(STDIN));

echo 'Введите символ'.PHP_EOL;
$s = trim(fgets(STDIN));

echo 'Введите номер элемента строки'.PHP_EOL;
$n = trim(fgets(STDIN));

$str = explode(' ', $a);

for ($i = 0; $i < count($str); $i++)
{
	if(strlen($str[$i]) >= $n)
	{
		$str[$i][$n - 1] = $s;
	}
	echo $str[$i].' ';
}

/*
(A7) Дана строка, состоящая из слов, слова разделяются пробелами.
Необходимо в каждом слове N-ю букву заменить на указанный символ.

https://trycode.pw/c/6JVN4
*/