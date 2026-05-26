<?php
include('crudmhs.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
        <th>Proses</th>
    </tr>

    <?php
        $data = bacaSemuaMhs();
        foreach($data as $mhs){
            $nim = $mhs['nim'];
            $nama = $mhs['nama'];
            $kelamin = $mhs['kelamin'];
            $jurusan = $mhs['jurusan'];
            echo ".
            <tr>
            <td>$nim</td>
            <td>$nama</td>
            <td>$kelamin</td>
            <td>$jurusan</td>
            <td><a href='konfirmasihapus.php?nim=$nim'>Hapus</a></td>
            </tr>
            ";
        }
    ?>
    </table>
    <a href="tambahmhs.php">Tambah Data Mahasiswa</a>
</body>
</html>