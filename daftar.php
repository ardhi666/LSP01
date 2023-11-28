<?php

$result = mysqli_connect("localhost", "root", "", "pmrpl");


if (!$result) {
    die("Database Gagal");
} else echo "Database Berhasil";
