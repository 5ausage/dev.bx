<?php

function Counting_Testing($Input)
{
	if ($Input == 1)
	{
		$Result = MaxElCount();
		$ExpectedResult = 2;
		if($Result == $ExpectedResult) return 'passed'; else return 'failed';
	}

	if ($Input == 2)
	{
		$Result = MaxElCount();
		$ExpectedResult = 3;
		if($Result === $ExpectedResult) return 'passed'; else return 'failed';
	}

	if ($Input == 3)
	{
		$Result = MaxElCount();
		$ExpectedResult = 1;
		if($Result === $ExpectedResult) return 'passed'; else return 'failed';
	}

	if ($Input == 4)
	{
		$Result = MaxElCount();
		$ExpectedResult = 4;
		if($Result === $ExpectedResult) return 'passed'; else return 'failed';
	}
}