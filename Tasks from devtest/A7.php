<?php

echo '������� ������'.PHP_EOL;
$s = trim(fgets(STDIN));

echo '������� ����� �������� ������'.PHP_EOL;
$n = trim(fgets(STDIN));

echo '������� ������'.PHP_EOL;
$a = trim(fgets(STDIN));

$str = str_split($a);

$str[$n-1] = $s;

for($i = 0; $i < count($str); $i++)
{
	echo $str[$i];
}

/*https://trycode.pw/c/6JVN4*/