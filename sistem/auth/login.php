<?php

include '../koneksi.php';

switch ($request['login']) {
    case 'admin':
        try {
            $username = $request['username'];
            $password = $request['password'];
        } catch (\Throwable $th) {
            //throw $th;
            echo "PERIKSA REQUEST";
        }
}
