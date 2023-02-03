<?php
include '../../database/koneksi.php';

if (empty($_SESSION['login'])) return $_SESSION['error_logut'] = 'You not login' . redirect_back();

switch ($request['voting']) {
    case 'true':

        $nbm = $_SESSION['nbm'];

        $sql1 = "SELECT * FROM tb_pengguna WHERE nbm = '$nbm'";
        $query = mysqli_query($db, $sql1);

        while ($row = mysqli_fetch_array($query)) {
            $uid = $row['id'];
        }

        foreach ($request as $key => $value) :
            if (!empty($value) && is_numeric($value)) :
                $sql = "INSERT INTO tb_suara (pengguna_id, calon_id, jumlah) VALUES ('$uid', '$key', '$value')";
                $query = mysqli_query($db, $sql);
            endif;
        endforeach;

        return return_url('../../user/trims.php');
        break;

    default:
        return redirect_back();
}
