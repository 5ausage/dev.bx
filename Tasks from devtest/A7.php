<?php

echo '������� ������'.PHP_EOL;
$a = trim(fgets(STDIN));

echo '������� ������'.PHP_EOL;
$s = trim(fgets(STDIN));

echo '������� ����� �������� ������'.PHP_EOL;
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
(A7) ���� ������, ��������� �� ����, ����� ����������� ���������.
���������� � ������ ����� N-� ����� �������� �� ��������� ������.

https://trycode.pw/c/6JVN4
*/