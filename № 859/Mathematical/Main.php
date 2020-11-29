<?php

require('Counting.php');
require('Console Reading.php');
require('TDD for Counting.php');


echo PHP_EOL.'TDD #1 - Введите через Enter 1 3 3 1 , затем stop:'.PHP_EOL;
echo 'Test - '.Counting_Testing(1);
echo PHP_EOL.'TDD #2 - Введите через Enter 1 0 1 1 , затем stop:'.PHP_EOL;
echo 'Test - '.Counting_Testing(2);
echo PHP_EOL.'TDD #3 - Введите через Enter 3 3 3 5 , затем stop:'.PHP_EOL;
echo 'Test - '.Counting_Testing(3);
echo PHP_EOL.'TDD #4 - Введите через Enter 0 0 0 0 , затем stop:'.PHP_EOL;
echo 'Test - '.Counting_Testing(4);

