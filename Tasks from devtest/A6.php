<?php

echo '������� �������� ������� ����� ������'.PHP_EOL;
$str = trim(fgets(STDIN));

$a = explode(' ', $str);

function no_pair(array $x)
{
	for($i = 0; $i < count($x); $i++)
	{
		for($j = 0; $j < count($x); $j++)
		{
			if($i != $j && $x[$i] == $x[$j])
			{
				break;
			}
		}
		if($j == count($x))
		{
			return $x[$i];
		}
	}
}

$result = no_pair($a);
echo $result;

/*
(A6) ��� ������ (��������������� �����) � �������� ������ ���������, ���������� ��� �������� ������, ����� ������.
�������� �������, ������� ������ ����� ��� ����.

https://trycode.pw/c/UJWBN
*/
