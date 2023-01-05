<?php
if (isset($_SESSION['username'])) :
    header("location:javascript://history.go(-1)");
elseif (empty($_GET['login'])) :
    include_once('login.php');
else :
    include_once('admin_login.php');
endif;
