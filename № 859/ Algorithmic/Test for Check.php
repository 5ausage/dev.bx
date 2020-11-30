<?php

function Checking_Testing($Input)
{
	if ($Input == 1)
	{
		$Result = Check();
		$ExpectedResult = 'ДА';
		if($Result === $ExpectedResult) return 'passed'; else return 'failed';
	}

	if ($Input == 2)
	{
		$Result = Check();
		$ExpectedResult = 'ДА';
		if($Result === $ExpectedResult) return 'passed'; else return 'failed';
	}

	if ($Input == 3)
	{
		$Result = Check();
		$ExpectedResult = 'НЕТ';
		if($Result === $ExpectedResult) return 'passed'; else return 'failed';
	}

	if ($Input == 4)
	{
		$Result = Check();
		$ExpectedResult = 'ДА';
		if($Result === $ExpectedResult) return 'passed'; else return 'failed';
	}
}