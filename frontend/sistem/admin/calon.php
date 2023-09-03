<?php
include '../../database/koneksi.php';

if (empty($_SESSION['login']) && $_SESSION['role'] != 'admin') return $_SESSION['error_logut'] = 'You not login' . redirect_back();

use PhpOffice\PhpSpreadsheet\IOFactory;

switch ($request['action']) {
    case 'add':

        $nbm = escape($request['nbm']);
        $nomor_calon = escape($request['nomor_calon']);
        $nama = escape($request['nama']);
        $keterangan = escape($request['keterangan']);



        $sql = "INSERT INTO tb_calon (nbm, calon_no, nama, keterangan) VALUES ('$nbm', '$nomor_calon', '$nama' , '$keterangan')";
        $query = $db->query($sql);

        if ($query) {
            $_SESSION['message'] = "<strong>Success !,</strong>Data " . $data['nama'] . " Berhasil Ditambahkan" .
                return_url('../../admin/calon.php');
        } else {
            $_SESSION['message_error'] = "<strong>Error !,</strong>Data " . $data['nama'] . " Gagal Ditambahkan" .
                return_url('../../admin/calon.php');
        }

        break;
    case 'edit':

        $id = escape($request['id']);
        $nbm = escape($request['nbm']);
        $nomor_calon = escape($request['nomor_calon']);
        $nama = escape($request['nama']);
        $keterangan = escape($request['keterangan']);

        $sql = "SELECT * FROM tb_calon WHERE id = '$id'";
        $query = $db->query($sql);

        while ($row = $query->fetch_assoc()) {
            $data = $row;
        }

        $sql = "UPDATE tb_calon SET nbm = '$nbm', calon_no = '$nomor_calon' , nama = '$nama', keterangan = '$keterangan' WHERE id = '$id'";

        $query = $db->query($sql);

        if ($query) {
            $_SESSION['message'] = "<strong>Success !,</strong>Data " . $data['nama'] . " Berhasil Diedit" .
                return_url('../../admin/calon.php');
        } else {
            $_SESSION['message_error'] = "<strong>Error !,</strong>Data " . $data['nama'] . " Gagal Diedit" .
                return_url('../../admin/calon.php');
        }

        break;


    case 'xlsx':

        $file = $_FILES["file"]["name"];
        $file_tmp = $_FILES["file"]["tmp_name"];

        // Membaca file Excel menggunakan PhpSpreadsheet
        $spreadsheet = IOFactory::load($file_tmp);
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray();

        // Mengimpor data ke dalam tabel database
        $columns = implode(",", $rows[0]);
        $values = array();
        for ($i = 1; $i < count($rows); $i++) {
            $values[] = "('" . implode("','", $rows[$i]) . "')";
        }
        $values = implode(",", $values);

        $sql = "INSERT INTO tb_calon ($columns) VALUES $values";
        if (mysqli_query($db, $sql)) {
            $_SESSION['message'] = "<strong>Success !,</strong>Data " . $data['nama'] . " Berhasil Ditambahkan" .
                return_url('../../admin/calon.php');
        } else {
            $_SESSION['message_error'] = "<strong>Error !,</strong>Data " . $data['nama'] . " Gagal Ditambahkan" .
                return_url('../../admin/calon.php');
        }


        mysqli_close($db);



        break;
    case 'delete':

        if ($request['verif'] != 'confirm') return $_SESSION['message_error'] = "<strong> Error! <strong>Verif not confirm!" . redirect_back();

        $id = escape($request['id']);

        $sql = "SELECT * FROM tb_calon WHERE id = '$id'";
        $query = $db->query($sql);

        while ($row = $query->fetch_assoc()) {
            $data = $row;
        }

        $sql = "DELETE FROM tb_calon WHERE id = '$id'";

        $query = $db->query($sql);

        if ($query) {
            $_SESSION['message'] = "<strong>Success !,</strong>Data " . $data['nama'] . " Berhasil Dihapus" .
                return_url('../../admin/calon.php');
        } else {
            $_SESSION['message_error'] = "<strong>Error !,</strong>Data " . $data['nama'] . " Gagal Dihapus" . return_url('../../admin/calon.php');
        }

        break;
    default:
        return redirect_back();
}
