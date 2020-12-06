<?php

require_once ('Calculator.php');

echo 'Введите через пробел выражение'.PHP_EOL;
echo 'Пример: 2 + 2'.PHP_EOL;

$str = trim(fgets(STDIN));
$input = explode(' ', $str);

if ($input[1] == '+')
{
	$add = new Calculator();
	print_r($add -> add($input[0], $input[2]));
}

if ($input[1] == '-')
{
	$subtract = new Calculator();
	print_r($subtract -> subtract($input[0], $input[2]));
}

if ($input[1] == '*')
{
	$multiply = new Calculator();
	print_r($multiply -> multiply($input[0], $input[2]));
}

if ($input[1] == '/')
{
	$divide = new Calculator();
	print_r($divide -> divide($input[0], $input[2]));
}

if ($input[1] == '^')
{
	$degree = new Calculator();
	print_r($degree -> degree($input[0], $input[2]));
}

if ($input[0] == 'sqrt')
{
	$sqrt = new Calculator();
	print_r($sqrt -> sqrt($input[1]));
}