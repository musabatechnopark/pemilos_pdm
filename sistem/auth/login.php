<?php
include '../../database/koneksi.php';

if (empty($request['login'])) return $_SESSION['error_login'] = 'Missing parameter login' . redirect_back();

switch ($request['login']) {
    case 'admin':
        try {
            if (empty($request['username']) || empty($request['password'])) return $_SESSION['error_login'] = 'username atau password kosong' . redirect_back();

            $username = escape($request['username']);
            $password = sha1($request['password']);

            $query = "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'";
            $sql = mysqli_query($db, $query);

            if (mysqli_fetch_row($sql) > 0) {
                echo "login successful";
            } else {
                return $_SESSION['error_login'] = 'nbm atau password salah' . redirect_back();
            }
        } catch (\Throwable $th) {
            //throw $th;
            echo "something went wrong";
        }
        break;
    case 'user':
        try {
            if (empty($request['nbm']) || empty($request['password'])) return $_SESSION['error_login'] = 'nbm atau password kosong' . redirect_back();

            $nbm = escape($request['nbm']);
            $password = sha1($request['password']);

            $query = "SELECT * FROM tb_login WHERE nbm = '$nbm' AND password = '$password'";
            $sql = mysqli_query($db, $query);

            if (mysqli_fetch_row($sql) > 0) {
                echo "login successful";
            } else {
                return $_SESSION['error_login'] = 'nbm atau password salah' . redirect_back();
            }
        } catch (\Throwable $th) {
            //throw $th;
            echo "something went wrong";
        }
        break;
    default:
        echo 'plrase check your login request';
}
