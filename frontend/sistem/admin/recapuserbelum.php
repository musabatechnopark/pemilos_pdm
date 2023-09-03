<?php

include '../../database/koneksi.php';

// Create a new PhpSpreadsheet object
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Create a new worksheet
$worksheet = $spreadsheet->getActiveSheet();

// Set the worksheet column headings
$worksheet->setCellValue('A2', 'NO');
$worksheet->setCellValue('B2', 'KETERANGAN');
$worksheet->setCellValue('C2', 'JUMLAH');

$sql = "SELECT * FROM tb_pengguna WHERE pemilos = 'Belum'";

$result = $db->query($sql);

while ($row = $result->fetch_array()) {
    $data[] = $row;
}

$worksheet->setCellValue('A3', '1');
$worksheet->setCellValue('B3', 'Belum');
$worksheet->setCellValue('C3', count($data));

// Set the worksheet column headings
$worksheet->setCellValue('A6', 'NO');
$worksheet->setCellValue('B6', 'NBM');
$worksheet->setCellValue('C6', 'NAMA');
$worksheet->setCellValue('D6', 'CABANG');
$worksheet->setCellValue('E6', 'PEMILOS');

// Query the database for the data
$query = "SELECT * FROM tb_pengguna WHERE pemilos = 'Belum'";
$result = mysqli_query($db, $query);

$jumlah = mysqli_num_rows($result);

// Set style for column headings
$worksheet->getStyle('A2:C2')->applyFromArray([
    'font' => [
        'bold' => true,
        'color' => [
            'rgb' => '000000'
        ]
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'color' => [
            'rgb' => 'BFBFBF'
        ]
    ]
]);

$worksheet->getStyle('A5:E5')->applyFromArray([
    'font' => [
        'bold' => true,
        'color' => [
            'rgb' => '000000'
        ]
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'color' => [
            'rgb' => 'BFBFBF'
        ]
    ]
]);

// Set the border style for all cells
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => '000000'],
        ],
    ],
];
$worksheet->getStyle('A2:C3')->applyFromArray($styleArray);
$worksheet->getStyle('A5:E' . $jumlah + 5)->applyFromArray($styleArray);


// Set the row counter to 2 (to start from the second row)
$row = 6;

$i = 1;

// Loop through the database data and add it to the spreadsheet
while ($row_data = mysqli_fetch_array($result)) {
    $worksheet->setCellValue('A' . $row, $i);
    $worksheet->setCellValue('B' . $row, $row_data['nbm']);
    $worksheet->setCellValue('C' . $row, $row_data['nama']);
    $worksheet->setCellValue('D' . $row, $row_data['cabang']);
    $worksheet->setCellValue('E' . $row, $row_data['pemilos']);
    $row++;
    $i++;
}

// Set the header information for the spreadsheet
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="user-belum-pilih.xlsx"');
header('Cache-Control: max-age=0');

// Create a new PHPExcel Writer object and output the spreadsheet as an Excel file
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

// Close the database db$dbection
mysqli_close($db);
