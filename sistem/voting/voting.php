<?php
include '../../database/koneksi.php';

$nbm = '125';

// $hasil = query("SELECT * FROM tb_pengguna WHERE nbm = '$nbm");

// if (count($hasil) == 1) {

// $id = $hasil[0]['id'];
$total = count($request);

$voting = $request;

foreach ($voting as $key => $value) {
    if ($value) {
        echo $nbm . ' ' . $key . " = " . $value . "<br>";
    }
}
// }
