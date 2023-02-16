<?php
include '../../database/koneksi.php';

if (empty($_SESSION['login']) && $_SESSION['role'] != 'admin') return $_SESSION['error_logut'] = 'You not login' . redirect_back();

switch ($request['action']) {
    case 'edit':

        $id = escape($request['id']);
        $tanggal = escape($request['tanggal']);

        $sql = "UPDATE setting SET start_pemilos = '$tanggal' WHERE id = '$id'";

        $query = $db->query($sql);

        if ($query) {
            $_SESSION['message'] = "<strong>Success !,</strong>Data Waktu Start Pemilos Berhasil Diedit" .
                return_url('../../admin/setting.php');
        } else {
            $_SESSION['message'] = "<strong>Error !,</strong>Data Waktu Start Pemilos Gagal Diedit" .
                return_url('../../admin/setting.php');
        }

        break;

    case 'auto_start':

        $id = escape($request['id']);
        $data = escape($request['data']);

        $sql = "UPDATE setting SET on_datetime = '$data' WHERE id = '$id'";

        $query = $db->query($sql);

        ($query) ? $message = [
            'status' => 'success',
            'message' => 'data berhasil di ubah',
        ] : $message = [
            'status' => 'success',
            'message' => 'data gagal di ubah',
        ];

        return die(json_encode($message));
        break;

    default:
        return redirect_back();
}
