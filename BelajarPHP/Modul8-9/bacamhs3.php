<?php
include('crudmhs.php');

$jurusanTerpilih = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa - Filter Dinamis</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <form action="" method="post">
        <p>Pilih jurusan:</p>
        <input type="radio" name="jurusan" value="TI" <?php if($jurusanTerpilih=='TI') echo 'checked'; ?>> TI
        <input type="radio" name="jurusan" value="SI" <?php if($jurusanTerpilih=='SI') echo 'checked'; ?>> SI
        <input type="radio" name="jurusan" value="MI" <?php if($jurusanTerpilih=='MI') echo 'checked'; ?>> MI
        <input type="radio" name="jurusan" value="TK" <?php if($jurusanTerpilih=='TK') echo 'checked'; ?>> TK
        <input type="radio" name="jurusan" value="KA" <?php if($jurusanTerpilih=='KA') echo 'checked'; ?>> KA
        <br><br>
        <input type="submit" name="btnOk" value=" - OK - ">
        <a href="bacamhs3.php"><button type="button">Reset / Tampilkan Semua</button></a>
    </form>

    <br>

    <?php
    if (isset($_POST['btnOk']) && $jurusanTerpilih != "") {
        echo "<h3>Menampilkan Jurusan: $jurusanTerpilih</h3>";
        $data = bacaMhsPerJurusan($jurusanTerpilih);
    } else {
        echo "<h3>Menampilkan Keseluruhan Mahasiswa</h3>";
        $data = bacaSemuaMhs();
    }

    if ($data == null) {
        echo "<p>Tidak ada data mahasiswa ditemukan.</p>";
    } else {
        ?>
        <table border="1">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
            </tr>
            <?php
            foreach ($data as $mhs) {
                echo "
                <tr>
                    <td>{$mhs['nim']}</td>
                    <td>{$mhs['nama']}</td>
                    <td>{$mhs['kelamin']}</td>
                    <td>{$mhs['jurusan']}</td>
                </tr>";
            }
            ?>
        </table>
        <?php
    }
    ?>

</body>
</html>