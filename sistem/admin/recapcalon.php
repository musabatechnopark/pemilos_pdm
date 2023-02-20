<?php

include '../../database/koneksi.php';

// Create a new PhpSpreadsheet object
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Create a new worksheet
$worksheet = $spreadsheet->getActiveSheet();

// Set the worksheet column headings
$worksheet->setCellValue('A1', 'NO');
$worksheet->setCellValue('B1', 'NBM');
$worksheet->setCellValue('C1', 'NAMA');
$worksheet->setCellValue('D1', 'NOMER');
$worksheet->setCellValue('E1', 'KETERANGAN');
$worksheet->setCellValue('F1', 'TOTAL SUARA');

// Query the database for the data
$query = "SELECT calon.nbm as nbm, SUM(suara.jumlah) AS total, calon.nama as nama, calon.calon_no as nomer, calon.keterangan FROM tb_suara as suara, tb_calon as calon WHERE suara.calon_id = calon.id GROUP BY suara.calon_id ORDER BY total DESC";
$result = mysqli_query($db, $query);

$jumlah = mysqli_num_rows($result);

// Set style for column headings    
$worksheet->getStyle('A1:F1')->applyFromArray([
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
$worksheet->getStyle('A1:F' . $jumlah + 1)->applyFromArray($styleArray);


// Set the row counter to 2 (to start from the second row)
$row = 2;

$i = 1;

// Loop through the database data and add it to the spreadsheet
while ($row_data = mysqli_fetch_array($result)) {
    $worksheet->setCellValue('A' . $row, $i);
    $worksheet->setCellValue('B' . $row, $row_data['nbm']);
    $worksheet->setCellValue('C' . $row, $row_data['nama']);
    $worksheet->setCellValue('D' . $row, $row_data['nomer']);
    $worksheet->setCellValue('E' . $row, $row_data['keterangan']);
    $worksheet->setCellValue('F' . $row, $row_data['total']);
    $row++;
    $i++;
}

// Set the header information for the spreadsheet
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="calon.xlsx"');
header('Cache-Control: max-age=0');

// Create a new PHPExcel Writer object and output the spreadsheet as an Excel file
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

// Close the database dbection
mysqli_close($db);
