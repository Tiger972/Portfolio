<?php

session_start();

$host_name = 'db5012773183.hosting-data.io';
$database = 'dbs10727863';
$user_name = 'dbu635111';
$password = 'Madinina97224@';
$dbh = null;

try {
    $pdo = new PDO("mysql:host=$host_name;dbname=$database;",
        $user_name, $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>