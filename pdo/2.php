<?php
$host = "localhost";
$port = "3306";
$db = "oop_blj_1";
$charset = "utf8mb4";
$user = "khazimstar";
$pass = "Khazimfikri3";

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

var_dump($pdo);