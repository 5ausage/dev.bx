<?php

require_once('Console Reading 2.php');

function readFromConsole_Testing()
{
	$Result = readFromConsole("true");
	echo "true = ". $Result . " (". gettype($Result) . ") ". ($Result === true ? "- passed" : "- failed").PHP_EOL;
	$Result = readFromConsole("false");
	echo "false = ". $Result . " (". gettype($Result) . ") ". ($Result === false ? "- passed" : "- failed").PHP_EOL;
	$Result = readFromConsole("!stop");
	echo "!stop = ". $Result . " (". gettype($Result) . ") ". ($Result === null ? "- passed" : "- failed").PHP_EOL;
	$Result = readFromConsole("1.3");
	echo "1.3 = ". $Result . " (". gettype($Result) . ") ". ($Result === 1.3 ? "- passed" : "- failed").PHP_EOL;
	$Result = readFromConsole("1");
	echo "1 = ". $Result . " (". gettype($Result) . ") ". ($Result === 1 ? "- passed" : "- failed").PHP_EOL;
}

readFromConsole_Testing();

echo PHP_EOL . 'Реальный результат: ' . PHP_EOL;
$ObtainedResult = readFromConsole();

echo 'Ожидаемый результат: ' . PHP_EOL;
$ExpectedResult = trim(fgets(STDIN));


function assertEquals($ObtainedResult, $ExpectedResult)
{
	if($ObtainedResult == $ExpectedResult) {return "- passed";}
	else {return "- failed";}
}

echo PHP_EOL.'Проверка соответствия: ' . assertEquals($ObtainedResult, $ExpectedResult) . PHP_EOL;