<?php
include '../../database/koneksi.php';

if (empty($_SESSION['login']) && $_SESSION['role'] != 'admin') return $_SESSION['error_logut'] = 'You not login' . redirect_back();

use PhpOffice\PhpSpreadsheet\IOFactory;

switch ($request['action']) {
    case 'add':

        $nbm = escape($request['nbm']);
        $nama = escape($request['nama']);
        $cabang = escape($request['cabang']);
        $password = sha1($request['password']);


        $sql = "INSERT INTO tb_pengguna (nbm,nama,cabang, pemilos) VALUES ('$nbm','$nama','$cabang','Belum')";
        $sql2 = "INSERT INTO tb_login (nbm,password) VALUES ('$nbm','$password')";
        $query = $db->query($sql);
        $query2 = $db->query($sql2);


        if ($query && $query2) {
            $_SESSION['message'] = "<strong>Success !,</strong>Data " . $data['nama'] . " Berhasil Ditambahkan" .
                return_url('../../admin/user.php');
        } else {
            $_SESSION['message_error'] = "<strong>Error !,</strong>Data " . $data['nama'] . " Gagal Ditambahkan" .
                return_url('../../admin/user.php');
        }

        break;
    case 'edit':

        $id = escape($request['id']);
        $nbm = escape($request['nbm']);
        $nama = escape($request['nama']);
        $cabang = escape($request['cabang']);
        $pemilos = escape($request['pemilos']);
        $password = sha1($request['password']);

        $sql = "SELECT * FROM tb_pengguna WHERE id = '$id'";
        $query = $db->query($sql);

        while ($row = $query->fetch_assoc()) {
            $data = $row;
        }

        $sql = "UPDATE tb_pengguna SET nbm = '$nbm', nama = '$nama', cabang = '$cabang', pemilos ='$pemilos' WHERE id = '$id'";
        $up_password = "UPDATE tb_login SET nbm = '$nbm', password = '$password' WHERE nbm = '" . $data['nbm'] . "'";

        $sql2 = "DELETE FROM `tb_suara` WHERE pengguna_id = '$id'";

        if ($pemilos == 'Belum') {
            $query3 = $db->query($sql2);
        }

        $query = $db->query($sql);
        $query2 = $db->query($up_password);

        if ($query && $query2) {
            $_SESSION['message'] = "<strong>Success !,</strong>Data " . $data['nama'] . " Berhasil Diedit" .
                return_url('../../admin/user.php');
        } else {
            $_SESSION['message_error'] = "<strong>Error !,</strong>Data " . $data['nama'] . " Gagal Diedit" .
                return_url('../../admin/user.php');
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
        $tb_pengguna_columns = array();
        $tb_login_columns = array();
        $tb_pengguna_values = array();
        $tb_login_values = array();
        for ($i = 0; $i < count($rows[0]); $i++) {
            if ($rows[0][$i] == "password") {
                $tb_login_columns[] = $rows[0][$i];
            } else if ($rows[0][$i] == "nbm") {
                $tb_login_columns[] = $rows[0][$i];
                $tb_pengguna_columns[] = $rows[0][$i];
            } else {
                $tb_pengguna_columns[] = $rows[0][$i];
            }
        }
        foreach (array_slice($rows, 1) as $row) {
            $tb_pengguna_row_values = array();
            $tb_login_row_values = array();
            for ($i = 0; $i < count($row); $i++) {
                if ($rows[0][$i] == "password") {
                    $tb_login_row_values[] = sha1($row[$i]);
                } else if ($rows[0][$i] == "nbm") {
                    $tb_login_row_values[] = $row[$i];
                    $tb_pengguna_row_values[] = $row[$i];
                } else {
                    $tb_pengguna_row_values[] = $row[$i];
                }
            }
            $tb_pengguna_values[] = "('" . implode("','", $tb_pengguna_row_values) . "')";
            $tb_login_values[] = "('" . implode("','", $tb_login_row_values) . "')";
        }

        $tb_pengguna_columns = implode(",", $tb_pengguna_columns);
        $tb_pengguna_values = implode(",", $tb_pengguna_values);

        $tb_login_columns = implode(",", $tb_login_columns);
        $tb_login_values = implode(",", $tb_login_values);

        $sql = "INSERT INTO tb_pengguna ($tb_pengguna_columns) VALUES $tb_pengguna_values";
        if (mysqli_query($db, $sql)) {
            $sql = "INSERT INTO tb_login ($tb_login_columns) VALUES $tb_login_values";
            if (mysqli_query($db, $sql)) {
                $_SESSION['message'] = "<strong>Success !,</strong>Data " . $data['nama'] . " Berhasil Ditambahkan" .
                    return_url('../../admin/user.php');
            } else {
                $_SESSION['message_error'] = "<strong>Error !,</strong>Data " . $data['nama'] . " Gagal Ditambahkan" .
                    return_url('../../admin/user.php');
            }
        } else {
            $_SESSION['message_error'] = "<strong>Error !,</strong>Data " . $data['nama'] . " Gagal Ditambahkan" .
                return_url('../../admin/user.php');
        }

        mysqli_close($db);


        break;

    case 'delete':

        if ($request['verif'] != 'confirm') return $_SESSION['message_error'] = "<strong> Error! <strong>Verif not confirm!" . redirect_back();

        $id = escape($request['id']);

        $sql = "SELECT * FROM tb_pengguna WHERE id = '$id'";
        $query = $db->query($sql);

        while ($row = $query->fetch_assoc()) {
            $data = $row;
        }

        $sql = "DELETE FROM tb_pengguna WHERE id = '$id'";
        $sql2 = "DELETE FROM tb_login WHERE nbm = '" . $data['nbm'] . "'";

        $query = $db->query($sql);
        $query2 = $db->query($sql2);

        if ($query && $query2) {
            $_SESSION['message'] = "<strong>Success !,</strong>Data " . $data['nama'] . " Berhasil Dihapus" .
                return_url('../../admin/user.php');
        } else {
            $_SESSION['message_error'] = "<strong>Error !,</strong>Data " . $data['nama'] . " Gagal Dihapus" . return_url('../../admin/user.php');
        }

        break;
    default:
        return redirect_back();
}
