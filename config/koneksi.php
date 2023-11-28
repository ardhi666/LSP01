<?php
$host = "localhost";
$username = "root";
$password = "";
$namadb = "pmrpl";

$koneksi = mysqli_connect($host, $username, $password, $namadb);


if (!$koneksi) {
    die("Database Gagal");
}
