<?php

function MaxElCount()
{
	$arr = array();
	$MaxEl = 0;
	$MaxElCount = 0;
	do {
		if (isset($Input))
		{
			if (is_int($Input))
			{
				$arr[] = $Input;
				if($Input == $MaxEl)
				{
					$MaxElCount++;
				}
				if($Input > $MaxEl)
				{
					$MaxEl = max($arr);
					$MaxElCount = 1;
				}
				if (count($arr) >= 20)
				{
					break;
				}
			}
		}
		$Input = readFromConsole();
	} while ($Input !== 'stop');

	return $MaxElCount;
}