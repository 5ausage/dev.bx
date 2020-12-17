<?php

$k = 0;

echo 'Введите заданную строку'.PHP_EOL;
$str_a = trim(fgets(STDIN));

echo 'Введите проверяемую строку'.PHP_EOL;
$str_b = trim(fgets(STDIN));

$a = str_split($str_a);
sort($a);

$b = str_split($str_b);
sort($b);

for($i = 0; $i < count($b); $i++)
{
	if($a[$i] != $b[$i])
	{
		$k++;
	}
}

if($k == 0)
{
	echo 'ДА';
}
else
{
	echo 'НЕТ';
}

/*https://trycode.pw/c/UL98K*/