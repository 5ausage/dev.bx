<?php

// функция, реализующая основную задачу

require("./Console Reading.php");

$arr=readFromConsole();
$result=array_sum($arr);
echo 'Их сумма: '.$result;