<?php
include('crudmhs.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa - Ver 2</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php
    $data = bacaSemuaMhs();
    
    if($data == null){
        echo "Tidak ada data mahasiswa";
    } else {
        ?>
        <table border="1">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th><a href="k"></a></th>
            </tr>
            <?php
            foreach($data as $mhs){
                echo "
                <tr>
                    <td>{$mhs['nim']}</td>
                    <td>{$mhs['nama']}</td>
                    <td>{$mhs['kelamin']}</td>
                    <td>{$mhs['jurusan']}</td>
                    <td><a href='konfirmasihapus.php'?nim='$nim'>Hapus</a></td>
                </tr>";
            }
            ?>
        </table>
    <?php 
    } 
    ?>
    <a href="tambahmhs.php">Tambah Mahasiswa</a>
</body>
</html>