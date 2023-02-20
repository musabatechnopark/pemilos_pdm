<?php
include '../../database/koneksi.php';

if (empty($_SESSION['login']) && $_SESSION['role'] != 'admin') return $_SESSION['error_logut'] = 'You not login' . redirect_back();

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

        if ($pemilos == 'Belum'){
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
