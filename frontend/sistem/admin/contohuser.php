<?php

include '../../database/koneksi.php';

// Create a new PhpSpreadsheet object
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Create a new worksheet
$worksheet = $spreadsheet->getActiveSheet();

// Set the worksheet column headings
$worksheet->setCellValue('A1', 'nbm');
$worksheet->setCellValue('B1', 'nama');
$worksheet->setCellValue('C1', 'cabang');
$worksheet->setCellValue('D1', 'pemilos');
$worksheet->setCellValue('E1', 'password');

$worksheet->setCellValue('A2', 'ganti dengan nbm');
$worksheet->setCellValue('B2', 'ganti dengan nama');
$worksheet->setCellValue('C2', 'ganti dengan keterangan');
$worksheet->setCellValue('D2', 'ganti dengan Belum/Sudah (huruf besar kecil berpengaruh)');
$worksheet->setCellValue('E2', 'ganti dengan password');

// Set the header information for the spreadsheet
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="user.xlsx"');
header('Cache-Control: max-age=0');

// Create a new PHPExcel Writer object and output the spreadsheet as an Excel file
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

// Close the database db$dbection
mysqli_close($db);
