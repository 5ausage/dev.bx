<?php

function checkingTesting($input): string
{
	if ($input == 1)
	{
		$result = result('2 2 6 2');
		$expectedResult = 'ДА';
		if ($result === $expectedResult) return 'passed';
		else return 'failed';
	}

	if ($input == 2)
	{
		$result = result('4 8 8 8');
		$expectedResult = 'ДА';
		if ($result === $expectedResult) return 'passed';
		else return 'failed';
	}

	if ($input == 3)
	{
		$result = result('4 7 7 4');
		$expectedResult = 'НЕТ';
		if ($result === $expectedResult) return 'passed';
		else return 'failed';
	}

	if ($input == 4)
	{
		$result = result('1 5 1 1');
		$expectedResult = 'ДА';
		if ($result === $expectedResult) return 'passed';
		else return 'failed';
	}

	if ($input == 5)
	{
		$result = result('1 3 1 3');
		$expectedResult = 'НЕТ';
		if ($result === $expectedResult) return 'passed';
		else return 'failed';
	}

	if ($input == 6)
	{
		$result = result('1 -1 1 7');
		$expectedResult = 'НЕТ';
		if ($result === $expectedResult) return 'passed';
		else return 'failed';
	}
}