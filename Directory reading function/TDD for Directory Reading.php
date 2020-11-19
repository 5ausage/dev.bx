<?php

function DirectoryReading_Testing($ExpectedResult)
{
	$Result = getDirectoryStatus("./test/", $Output);
	if($Result === $ExpectedResult) return 'passed'; else return 'failed';
}
