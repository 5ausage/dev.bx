<?php

$k = 0;

echo '¬ведите числа через пробел'.PHP_EOL;
$str = trim(fgets(STDIN));

$number = explode(' ', $str);

echo '¬ведите требуемое число'.PHP_EOL;
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