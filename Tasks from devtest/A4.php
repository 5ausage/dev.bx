<?php

$result = null;
$k = 0;

class Calc
{
	public function add(int $a, int $b): int
	{
		return $a + $b;
	}

	public function subtract(int $a, int $b): int
	{
		return $a - $b;
	}

	public function multiply(int $a, int $b): int
	{
		return $a * $b;
	}

	public function divide(int $a, int $b): float
	{
		if ($b === 0)
		{
			throw new InvalidArgumentException('Divider cant be a zero');
		}

		return $a / $b;
	}
}

while ($k < 1)
{
	echo '������� ����� ������ ���������'.PHP_EOL;
	echo '������: 2 + 2'.PHP_EOL;

	$str = trim(fgets(STDIN));
	$input = explode(' ', $str);

	if(is_numeric($input[0]) && is_numeric($input[2]) &&
	   ($input[1] == '+' || $input[1] == '*' || $input[1] == '-' || $input[1] == '/'))
	{
		if($input[1] == '+')
		{
			$add = new Calc();
			print_r('���������: '.$add->add($input[0], $input[2]));
		}

		if($input[1] == '*')
		{
			$multiply = new Calc();
			print_r('���������: '.$multiply->multiply($input[0], $input[2]));
		}

		if($input[1] == '-')
		{
			$subtract = new Calc();
			print_r('���������: '.$subtract->subtract($input[0], $input[2]));
		}

		if($input[1] == '/')
		{
			$divide = new Calc();
			print_r('���������: '.$divide->divide($input[0], $input[2]));
		}

		$k++;
	}
}

/*https://trycode.pw/c/KGC5F*/