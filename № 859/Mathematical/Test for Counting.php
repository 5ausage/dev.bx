<?php

function counting_Testing($Input): string
{
	if ($Input == 1)
	{
		$Result = maxElCount('1 3 3 1');
		$ExpectedResult = 2;
		if($Result == $ExpectedResult) return 'passed'; else return 'failed';
	}

	if ($Input == 2)
	{
		$Result = maxElCount('1 0 1 1');
		$ExpectedResult = 3;
		if($Result === $ExpectedResult) return 'passed'; else return 'failed';
	}

	if ($Input == 3)
	{
		$Result = maxElCount('3 3 3 5');
		$ExpectedResult = 1;
		if($Result === $ExpectedResult) return 'passed'; else return 'failed';
	}

	if ($Input == 4)
	{
		$Result = maxElCount('0 0 0 0');
		$ExpectedResult = 4;
		if($Result === $ExpectedResult) return 'passed'; else return 'failed';
	}
}