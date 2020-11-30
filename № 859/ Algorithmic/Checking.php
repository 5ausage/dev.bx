<?php

function Check()
{
	echo 'Введите X1 Y1 X2 Y2 Ладьи через пробел:'.PHP_EOL;

	$str = trim(fgets(STDIN));
	$coords = explode(' ', $str);

	$figure = new Rook();
	$figure -> SetPos_X($coords[0]);
	$figure-> SetPos_Y($coords[1]);


	if ($figure -> Check($coords[2], $coords[3]))
		{return 'ДА';} else {return 'НЕТ';}
}