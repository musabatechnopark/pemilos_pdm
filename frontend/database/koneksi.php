<?php
session_start();
require_once(__DIR__ . '/../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

define('HOST', $_ENV['DB_HOST']);
define('USERNAME', $_ENV['DB_USERNAME']);
define('PASSWORD', $_ENV['DB_PASSWORD']);
define('DATABASE', $_ENV['DB_DATABASE']);

$db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

include_once(__DIR__ . '/function.php');
