<?php
include '../../database/koneksi.php';

error_reporting(0);
// if (empty($_SESSION['login']) && $_SESSION['role'] != 'admin') return $_SESSION['error_logut'] = 'You not login' . redirect_back();

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

switch (@$request['action']) {
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

        if (!$id)
            return die(json_encode([
                'status' => 'error',
                'message' => 'request failed',
            ]));

        $sql = "UPDATE setting SET on_datetime = '$data' WHERE id = '$id'";

        $query = $db->query($sql);

        if ($query) {

            if ($data == 1) {
                $message = [
                    'status' => 'success',
                    'message' => 'Auto start on',
                ];
            } else {
                $message = [
                    'status' => 'success',
                    'message' => 'Auto start off',
                ];
            }
        } else {
            $message = [
                'status' => 'error',
                'message' => 'Server error',
            ];
        }


        return die(json_encode($message));
        break;

    case 'start_pemilos':

        $id = escape($request['id']);
        $data = escape($request['data']);

        if (!$id)
            return die(json_encode([
                'status' => 'error',
                'message' => 'request failed',
            ]));

        $sql = "UPDATE setting SET pemilos = '$data' WHERE id = '$id'";

        $query = $db->query($sql);

        if ($query) {

            if ($data == 1) {
                $message = [
                    'status' => 'success',
                    'message' => 'Pemilos dimulai',
                ];
            } else {
                $message = [
                    'status' => 'success',
                    'message' => 'Pemilos berhenti',
                ];
            }
        } else {
            $message = [
                'status' => 'error',
                'message' => 'Server error',
            ];
        }


        return die(json_encode($message));
        break;

    case 'start_otomatis':

        $id = escape($request['id']);
        $data = escape($request['data']);

        if (!$id)
            return die(json_encode([
                'status' => 'error',
                'message' => 'request failed',
            ]));

        $sql2 = "SELECT * FROM setting";

        $query = $db->query($sql2);

        $a = $query->fetch_object();

        if ($a->on_datetime == 0) return die(json_encode([
            'status' => 'error',
            'message' => 'otomatis is off',
        ]));

        $sql = "UPDATE setting SET pemilos = '$data' WHERE id = '$id'";

        $query = $db->query($sql);

        if ($query) {

            if ($data == 1) {
                $message = [
                    'status' => 'success',
                    'message' => 'Pemilos dimulai',
                ];
            } else {
                $message = [
                    'status' => 'success',
                    'message' => 'Pemilos berhenti',
                ];
            }
        } else {
            $message = [
                'status' => 'error',
                'message' => 'Server error',
            ];
        }


        return die(json_encode($message));
        break;

    case 'max_pilih':

        $data = $request['data'];

        $sql = "UPDATE setting set max_pilih = '$data' where id = '1'";

        $query = $db->query($sql);

        if ($query) {
            $_SESSION['message'] = "<strong>Success !,</strong>Data Waktu Start Pemilos Berhasil Diedit" .
                return_url('../../admin/setting.php');
        } else {
            $_SESSION['message'] = "<strong>Error !,</strong>Data Waktu Start Pemilos Gagal Diedit" .
                return_url('../../admin/setting.php');
        }
        break;

    default:
        $message = [
            'status' => 'error',
            'message' => 'request failed',
        ];
        return die(json_encode($message));
}
