<?php

function readFromConsole($input = null)
{
	if (!$input) { $input = trim(fgets(STDIN));}

	// обработка данных

	if ($input === 'true') { return true;}

	if ($input === 'false') { return false;}

	if ($input === '!stop') { return null;}

	if (is_numeric($input))
	{
		$integer = strstr($input, '.',true);
		if ( strlen($integer) > 0 && strlen($integer) < strlen($input)) { return (float)$input;}
		else { return (int)$input;}
	}

	if (is_string($input)) { return (string)$input;}
}