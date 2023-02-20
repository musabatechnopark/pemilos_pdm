<?php

include '../../database/koneksi.php';

if (empty($request['type'])) return redirect_back();

if (isset($_SERVER['HTTP_ORIGIN'])) {
    // should do a check here to match $_SERVER['HTTP_ORIGIN'] to a
    // whitelist of safe domains
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}
// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}

switch ($request['type']) {
    case 'json':

        $sql = "SELECT suara.calon_id as id, SUM(suara.jumlah) AS total, calon.nama as nama, calon.calon_no as nomer, calon.keterangan FROM tb_suara as suara, tb_calon as calon WHERE suara.calon_id = calon.id GROUP BY suara.calon_id ORDER BY total DESC LIMIT 13";

        $query = mysqli_query($db, $sql);

        $data = array();

        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        };

        ($data) ? $message = [
            'status' => 'success',
            'message' => 'data berhasil di ambil',
            'data' => $data
        ] : $message = [
            'status' => 'error',
            'message' => 'data kosong',
            'data' => false
        ];

        return die(json_encode($message));
        break;

    case 'html':

        $sql = "SELECT suara.calon_id as id, SUM(suara.jumlah) AS total, calon.nama as nama, calon.calon_no as nomer, calon.keterangan FROM tb_suara as suara, tb_calon as calon WHERE suara.calon_id = calon.id GROUP BY suara.calon_id ORDER BY total DESC LIMIT 13";

        $query = mysqli_query($db, $sql);

        $no = 1;
        while ($row = mysqli_fetch_assoc($query)) :
?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nomer']; ?></td>
                <td><?= $row['keterangan']; ?></td>
                <td><?= $row['total']; ?></td>
            </tr>
<?php
        endwhile;
        die();
        break;

    default:

        return die(json_encode([
            'status' => 'error',
            'message' => 'Error processing parameter'
        ]));
}
