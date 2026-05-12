<?php
    $koneksi = mysqli_connect("localhost", "root", "", "ridwan_akademik");

    if (!$koneksi) {
        die("Koneksi gagal : " . mysqli_connect_error());
    }

    function semuaMhs($koneksi, $nim) {
        $query = "SELECT * FROM mahasiswa WHERE 1=1";

        if ($nim != "") {
            $query .= " AND nim='$nim'";
        }

        return mysqli_query($koneksi, $query);
    }

    $nim = "";

    if (isset($_POST['nim'])) {
        $nim = $_POST['nim'];
    }

    $hasil = semuaMhs($koneksi, $nim);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <form method="POST">
        Cari NIM: <input type="text" name="nim" placeholder="Masukan NIM">

        <button type="submit">- Cari -</button>
    </form>

    <br>

    <table class="table table-bordered table-striped table-hover border-dark">
        <thead class="table-dark">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelamin</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <?php
            while($data = mysqli_fetch_array($hasil)) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['kelamin']; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
                </tr>
        </tbody>
        <?php
        }
        ?>

    </table>
</body>
</html>