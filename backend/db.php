<?php

global $db_connect;
$host = 'localhost';
$db   = 'postgres';
$user = 'dami';
$pass = '';

$dsn = "pgsql:host=$host;dbname=$db;user=$user";
$db_connect = new PDO($dsn);
$stmt = $db_connect->query('SELECT * FROM users;');
?>