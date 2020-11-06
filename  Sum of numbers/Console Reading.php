<?php

// функция, реализующая функцию readFromConsole

function readFromConsole(){
	echo 'Введите количество чисел: ';
	fscanf(STDIN, "%d\n", $number);
	$arr = [];
	for ($i = 1; $i <= $number; $i++)
	{
		echo $i.' число: ';
		fscanf(STDIN, "%d\n", $arr[]);
	}
	return $arr;
}
