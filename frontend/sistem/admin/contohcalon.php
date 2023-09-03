<?php

include '../../database/koneksi.php';

// Create a new PhpSpreadsheet object
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Create a new worksheet
$worksheet = $spreadsheet->getActiveSheet();

// Set the worksheet column headings
$worksheet->setCellValue('A1', 'NBM');
$worksheet->setCellValue('B1', 'NAMA');
$worksheet->setCellValue('C1', 'NOMER');
$worksheet->setCellValue('D1', 'KETERANGAN');

// Set the worksheet column headings
$worksheet->setCellValue('A2', 'value');
$worksheet->setCellValue('B2', 'value');
$worksheet->setCellValue('C2', 'value');
$worksheet->setCellValue('D2', 'value');

// Set the header information for the spreadsheet
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="calon.xlsx"');
header('Cache-Control: max-age=0');

// Create a new PHPExcel Writer object and output the spreadsheet as an Excel file
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

// Close the database dbection
mysqli_close($db);
