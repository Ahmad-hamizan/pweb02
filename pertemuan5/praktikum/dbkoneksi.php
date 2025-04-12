<?php

// buat variabel koneksi ke database
$host = "localhost";
$db = "dbsiak";
$user = "root";
$pass = "";
$charset = "utf8mb4";

// Data Source Name (DSN) dan option koneksi(opt)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// Membuat objek koneksi PDO
$dbh = new PDO($dsn, $user, $pass, $opt);