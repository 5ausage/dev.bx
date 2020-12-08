<?php

function maxElCount($input=''): int
{
	if (!$input)
	{
		echo 'Введите числа через пробел:'.PHP_EOL;
		$str = trim(fgets(STDIN));
	}
	else
	{
		$str = $input;
	}

	$numbers = explode(' ', $str);

	$maxEl = 0;
	$maxElCount = 0;

	for ($i = 0; $i < count($numbers); $i++)
	{
		if ($numbers[$i] == $maxEl)
		{
			$maxElCount++;
		}
		if ($numbers[$i] > $maxEl)
		{
			$maxEl = $numbers[$i];
			$maxElCount = 1;
		}
	}

	return $maxElCount;
}