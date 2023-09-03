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

                $_SESSION['role'] = 'admin';
                $_SESSION['login'] = true;
                $_SESSION['username'] = $username;

                return_url('../../admin');
            } else {
                return $_SESSION['error_login'] = 'ID atau password salah' . redirect_back();
            }
        } catch (\Throwable $th) {
            //throw $th;
            return $_SESSION['error_login_catch'] = 'Somthing worng' . redirect_back();
        }
        break;
    case 'user':
        try {
            if (empty($request['nbm']) || empty($request['password'])) return $_SESSION['error_login'] = 'NIS atau password kosong' . redirect_back();

            $nbm = escape($request['nbm']);
            $password = escape($request['password']);

            $query = "SELECT * FROM tb_login WHERE nbm = '$nbm' AND password = '$password'";
            $sql = mysqli_query($db, $query);

            if (mysqli_fetch_row($sql) > 0) {
                $data = mysqli_fetch_assoc($sql);

                $_SESSION['nama'] = strtoupper($data['nama']);
                $_SESSION['nbm'] = $nbm;
                $_SESSION['pemilos'] = $data['pemilos'];
                $_SESSION['login'] = true;
                $_SESSION['role'] = 'user';
                $_SESSION['cabang'] = strtoupper($data['cabang']);

                return_url('../../user/welcome.php');
            } else {
                return $_SESSION['error_login'] = 'ID atau password salah' . redirect_back();
            }
        } catch (\Throwable $th) {
            //throw $th;
            return $_SESSION['error_login_catch'] = 'Somthing worng' . redirect_back();
        }
        break;
        
    case 'barcode':
        try {
            if (empty($request['nbm'])) return $_SESSION['error_login'] = 'ID kosong' . redirect_back();

            $nbm = escape($request['nbm']);
            $password = escape($request['password']);

            $query = "SELECT * FROM tb_login WHERE nbm = '$nbm'";
            $sql = mysqli_query($db, $query);

            if (mysqli_fetch_row($sql) > 0) {
    
                $query = "SELECT * FROM tb_login WHERE nbm = '$nbm'";
                $sql = mysqli_query($db, $query);
                $data = mysqli_fetch_assoc($sql);

                $_SESSION['nama'] = strtoupper($data['nbm']);
                $_SESSION['nbm'] = $data['nbm'];
                $_SESSION['pemilos'] = $data['pemilos'];
                $_SESSION['login'] = true;
                $_SESSION['role'] = 'user';
                $_SESSION['cabang'] = strtoupper($data['password']);

                return_url('../../user/welcome.php');
            } else {
                return $_SESSION['error_login'] = 'ID atau Password salah' . redirect_back();
            }
        } catch (\Throwable $th) {
            //throw $th;
            return $_SESSION['error_login_catch'] = 'Somthing went worng' . redirect_back();
        }
        break;
    default:
        redirect_back();
}
