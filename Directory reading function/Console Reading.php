<?php

function readFromConsole($message = '', $input = null)
{
	echo $message;

	if (!$input) { $input = trim(fgets(STDIN));}

	// обработка данных

	if ($input === 'true') { return true;}

	else if ($input === 'false') { return false;}

	else if ($input === '!stop') { return null;}

	else if (is_numeric($input))
	{
		return +$input;
	}

	else return (string)$input;
}