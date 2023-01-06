<?php
include '../../database/koneksi.php';

$nbm = '1234 1234 1234567';

// $hasil = query("SELECT * FROM tb_pengguna WHERE nbm = '$nbm");

// if (count($hasil) == 1) {

// $id = $hasil[0]['id'];
$total = count($request);

$voting = $request;

foreach ($voting as $key => $value) {
    echo $nbm . ' ' . $key . " = " . $value . "<br>";
}
// }
