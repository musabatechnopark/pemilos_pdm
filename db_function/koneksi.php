<?php

$ENV = parse_ini_file('../.env');

define("HOST", $ENV['DB_HOST']);
define("USER", $ENV['DB_USERNAME']);
define("PASS", $ENV['DB_PASSWORD']);
define("DB", $ENV['DB_DATABASE']);

$db = new mysqli(HOST, USER, PASS, DB) or die("Couldn't connect to database");
