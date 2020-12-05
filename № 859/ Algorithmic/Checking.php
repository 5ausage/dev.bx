<?php

function check()
{
	echo 'Введите X1 Y1 X2 Y2 Ладьи через пробел:'.PHP_EOL;

	$str = trim(fgets(STDIN));
	$coords = explode(' ', $str);

	$figure = new Rook();
	$figure -> setPosX($coords[0]);
	$figure -> setPosY($coords[1]);

	if ($coords[0] > 8 or $coords[1] > 8 or $coords[2] > 8 or $coords[3] > 8)
	{
		return 'НЕТ';
	}

	else if ($coords[0] == $coords[2] and $coords[1] == $coords[3])
	{
		return 'НЕТ';
	}
	else if ($figure -> check($coords[2], $coords[3]))
	{
		return 'ДА';
	}
	else
	{
		return 'НЕТ';
	}
}