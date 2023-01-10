<?php


if ($_GET) :
    $request = $_GET;
elseif ($_POST) :
    $request = $_POST;
endif;


function escape($param)
{
    global $db;
    return mysqli_real_escape_string($db, $param);
}

function redirect_back()
{
    if (isset($_SERVER['HTTP_REFERER'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        // If there is no referrer, redirect to the home page
        header('Location: /');
    }
}

function return_url($url)
{
    header('Location: ' . $url);
}

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);

    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
