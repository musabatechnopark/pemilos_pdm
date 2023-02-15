<?php

include '../../database/koneksi.php';

if (empty($request['type'])) return redirect_back();

switch ($request['type']) {
    case 'json':

        $sql = "SELECT suara.calon_id as id, SUM(suara.jumlah) AS total, calon.nama as nama, calon.calon_no as nomer, tb_calon.cabang FROM tb_suara as suara, tb_calon as calon WHERE suara.calon_id = calon.id GROUP BY suara.calon_id ORDER BY total DESC LIMIT 13";

        $query = mysqli_query($db, $sql);

        $data = array();

        if (mysqli_fetch_array($query) <= 0) {
            $data = false;
        } else {
            while ($row = mysqli_fetch_assoc($query)) {
                $data[] = $row;
            };
        }

        ($data = false) ? $message = [
            'status' => 'success',
            'message' => 'data berhasil di ambil'
        ] : $message = [
            'status' => 'success',
            'message' => 'data berhasil di ambil'
        ];
        $message['data'] = $data;

        return die(json_encode($message));
        break;

    case 'html':

        $sql = "SELECT suara.calon_id as id, SUM(suara.jumlah) AS total, calon.nama as nama, calon.calon_no as nomer, calon.cabang FROM tb_suara as suara, tb_calon as calon WHERE suara.calon_id = calon.id GROUP BY suara.calon_id ORDER BY total DESC LIMIT 13";

        $query = mysqli_query($db, $sql);

        $no = 1;
        while ($row = mysqli_fetch_assoc($query)) :
?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nomer']; ?></td>
                <td><?= $row['cabang']; ?></td>
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
