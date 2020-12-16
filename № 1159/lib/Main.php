<?php

require ('FactoryTask.php');

$documentText = 'Document text here';

DocumentPrinter::print('text', $documentText);
//TextDocument

DocumentPrinter::print('pdf', $documentText);
//PdfDocument




/*
 	Воспользуйтесь шаблоном проектирования "Фабричный метод"

	$documentText = 'Document text here';

	DocumentPrinter::print('text', $documentText);
	//TextDocument

	DocumentPrinter::print('pdf', $documentText);
	//PdfDocument
 */
