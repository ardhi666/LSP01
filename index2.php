<?php
include 'config/koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM datasiswa");


// $siswa = mysqli_fetch_row($result); // menggunakan array numeric
// $siswa = mysqli_fetch_assoc($result); // menggunakan array assosiative
// $siswa = mysqli_fetch_array($result); // menggunakan array assosiative

// var_dump($siswa);
// echo $siswa[1];
// echo $siswa["jurusan"];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1>Selamat Datang di SMKN 12 Jakarta</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($siswa = mysqli_fetch_assoc($result)) :
                        ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $siswa["nama_siswa"]  ?></td>
                                <td><?= $siswa["kelas"]  ?></td>
                                <td><?= $siswa["jurusan"]  ?></td>
                                <td><?= $siswa["alamat"]  ?></td>
                                <td><?= $siswa["foto"]  ?></td>
                            </tr>
                        <?php
                            $i++;
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>