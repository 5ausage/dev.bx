<?php

$k = 0;

echo '������� ����� ����� ������'.PHP_EOL;
$str = trim(fgets(STDIN));

$number = explode(' ', $str);

echo '������� ��������� �����'.PHP_EOL;
$m = trim(fgets(STDIN));

for($i = 0; $i < count($number); $i++)
{
	if ($number[$i] == $m)
	{
		$k = 1;
	}
}

echo ($k == 0 ? "false" : "true");

/*https://trycode.pw/c/W3VBA*/