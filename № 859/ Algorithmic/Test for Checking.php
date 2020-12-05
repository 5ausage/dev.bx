<?php

function checkingTesting($input)
{
	if ($input == 1)
	{
		$result = check();
		$expectedResult = 'ДА';
		if ($result === $expectedResult) return 'passed';
		else return 'failed';
	}

	if ($input == 2)
	{
		$result = check();
		$expectedResult = 'ДА';
		if ($result === $expectedResult) return 'passed';
		else return 'failed';
	}

	if ($input == 3)
	{
		$result = check();
		$expectedResult = 'НЕТ';
		if ($result === $expectedResult) return 'passed';
		else return 'failed';
	}

	if ($input == 4)
	{
		$result = check();
		$expectedResult = 'ДА';
		if ($result === $expectedResult) return 'passed';
		else return 'failed';
	}
}