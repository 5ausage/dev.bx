<?php

require ('FactoryTask.php');

$documentText = 'Document text here';

DocumentPrinter::print('text', $documentText);
//TextDocument

DocumentPrinter::print('pdf', $documentText);
//PdfDocument




/*
 	�������������� �������� �������������� "��������� �����"

	$documentText = 'Document text here';

	DocumentPrinter::print('text', $documentText);
	//TextDocument

	DocumentPrinter::print('pdf', $documentText);
	//PdfDocument
 */
