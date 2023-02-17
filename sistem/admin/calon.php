<?php
include '../../database/koneksi.php';

if (empty($_SESSION['login']) && $_SESSION['role'] != 'admin') return $_SESSION['error_logut'] = 'You not login' . redirect_back();

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
