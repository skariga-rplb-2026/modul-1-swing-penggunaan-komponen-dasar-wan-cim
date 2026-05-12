<?php
    $koneksi = mysqli_connect("localhost", "root", "", "ridwan_akademik");

    if (!$koneksi) {
        die("Koneksi gagal : " . mysqli_connect_error());
    }

    function semuaMhs($koneksi, $jurusan) {
        $query = "SELECT * FROM mahasiswa WHERE 1=1";

        if ($jurusan != "" && $jurusan != "semua") {
            $query .= " AND jurusan='$jurusan'";
        }

        return mysqli_query($koneksi, $query);
    }

    $jurusan = "semua";

    if (isset($_POST['jurusan'])) {
        $jurusan = $_POST['jurusan'];
    }

    $hasil = semuaMhs($koneksi, $jurusan);
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
        Pilih jurusan:
        <select name="jurusan" class="dropdown">
            <option value="semua">Semua</option>
            <option value="TI">TI</option>
            <option value="SI">SI</option>
            <option value="MI">MI</option>
            <option value="TK">TK</option>
            <option value="KA">KA</option>
        </select><br>

        <button type="submit">- Filter -</button>
    </form>

    <br>

    <?php
    if ($jurusan == "semua") {
        echo "<h3>Semua Jurusan</h3>";
    } else {
        echo "<h3>Jurusan $jurusan</h3>";
    }
    ?>


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