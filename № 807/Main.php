<?php

require('Directory Reading.php');
require('Console Reading.php');
require('TDD for Directory Reading.php');

$Path = readFromConsole('Введите путь директории: '.PHP_EOL);
$Output = ['dirs' => [], 'files' => []];
$result = getDirectoryStatus($Path, $Output);
echo 'Анализ папок и файлов директории:'.PHP_EOL;
print_r ($result);

$ExpectedResult =
	['dirs' => [
		'1st directory' => [
			'is_readable' => true,
			'is_writable' => true,
		],
		'2d directory' => [
			'is_readable' => true,
			'is_writable' => true,
		],
	],

	 'files' => [
		 '1st file.php' => [
			 'is_readable' => true,
			 'is_writable' => true,
			 'size' => 7,
		 ],

		 '2d file.php' => [
			 'is_readable' => true,
			 'is_writable' => true,
			 'size' => 2121,
		 ],
	 ],

	];

echo '-----------TDD:'.DirectoryReading_Testing($ExpectedResult).'-----------';
