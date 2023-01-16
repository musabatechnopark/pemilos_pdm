<?php
include '../../database/koneksi.php';

if (empty($_SESSION['login'])) return $_SESSION['error_logut'] = 'You not login' . redirect_back();

switch ($request['voting']) {
    case 'true':

        break;
}
