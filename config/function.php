<?php
require 'koneksi.php';

function read($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $temp = [];
    while ($siswa = mysqli_fetch_assoc($result)) {
        $temp[] = $siswa;
    };

    return $temp;
}
