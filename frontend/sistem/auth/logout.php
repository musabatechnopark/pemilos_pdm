<?php
include '../../database/koneksi.php';

if (empty($_SESSION['login'])) return $_SESSION['error_logut'] = 'You not login' . redirect_back();

switch ($_SESSION['role']) {
    case 'admin':
        unset(
            $_SESSION['role'],
            $_SESSION['login'],
            $_SESSION['username']
        );

        return return_url('../../');
        break;
    case 'user':
        unset(
            $_SESSION['nama'],
            $_SESSION['nbm'],
            $_SESSION['pemilos'],
            $_SESSION['login'],
            $_SESSION['role'],
            $_SESSION['cabang']
        );

        return return_url('../../');
        break;
    default:

        redirect_back();
}
