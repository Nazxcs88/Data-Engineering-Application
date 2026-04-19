<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "info";
$dsn = "mysql:host={$host};dbname={$dbname}";

$pdo = new PDO($dsn, $user, $password);
?>