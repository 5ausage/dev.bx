<?php

echo '¬ведите элементы массива через пробел'.PHP_EOL;
$str = trim(fgets(STDIN));

$a = explode(' ', $str);

for($j = 0, $i = 0; $i < count($a); $i++)
{
	for($j = 0; $j < count($a); $j++)
	{
		if($i != $j && $a[$i] == $a[$j])
		{
			break;
		}
	}
	if($j == count($a))
	{
		echo $a[$i].' ';
	}
}

/*https://trycode.pw/c/UJWBN*/
