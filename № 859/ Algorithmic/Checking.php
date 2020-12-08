<?php

function result($input=''): string
{
	if (!$input)
	{
		echo 'Введите X1 Y1 X2 Y2 Ладьи через пробел:'.PHP_EOL;
		$str = trim(fgets(STDIN));
	}
	else
	{
		$str = $input;
	}

	$coords = explode(' ', $str);

	$figure = new Rook();
	$figure -> setPosX($coords[0]);
	$figure -> setPosY($coords[1]);

	if (!$figure -> onDesk($coords[0], $coords[1]) || !$figure -> onDesk($coords[2], $coords[3]))
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