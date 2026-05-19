<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "dede_akademik";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if(!$koneksi){
    die("koneksi gagal : ".mysqli_connect_error());
}else{
    echo "koneksi Kembali";
}

$query = mysqli_query($koneksi, "select * from mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border = "5px">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
        </tr>
        <?php while($data = mysqli_fetch_array($query)){ ?>
        <tr>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['kelamin']; ?></td>
            <td><?php echo $data['jurusan']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>