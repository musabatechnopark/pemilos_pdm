<?php

require __DIR__ . '/vendor/autoload.php';

// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


define('HOST', $_ENV['DB_HOST']);
define('USERNAME', $_ENV['DB_USERNAME']);
define('PASSWORD', $_ENV['DB_PASSWORD']);
define('DATABASE', $_ENV['DB_DATABASE']);

// $conn = mysqli_connect($host, $username, $password, $database) or die("Couldn't connect to database");

if ($_GET) :
    $request = $_GET;
elseif ($_POST) :
    $request = $_POST;
endif;
