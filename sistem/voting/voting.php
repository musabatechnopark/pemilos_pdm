<?php
include '../../database/koneksi.php';

if (empty($_SESSION['login'])) return $_SESSION['error_logut'] = 'You not login' . redirect_back();

switch ($request['voting']) {
    case 'true':

        $nbm = $_SESSION['nbm'];
        foreach ($request as $key => $value) :
            if (!empty($value) && is_numeric($value)) :
                echo $key . ' => ' . $value . "\n";
            endif;
        endforeach;
        echo $nbm;
        break;
}
