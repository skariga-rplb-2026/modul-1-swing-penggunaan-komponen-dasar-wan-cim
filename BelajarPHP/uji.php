<?php

// =======================
// KONEKSI DATABASE
// =======================
$koneksi = mysqli_connect("localhost", "root", "", "ridwan_akademik");

if (!$koneksi) {
    die("Koneksi gagal : " . mysqli_connect_error());
}


// =======================
// FUNCTION TAMPIL DATA
// =======================
function tampilData($koneksi, $jurusan)
{
    // query dasar
    $query = "SELECT * FROM mahasiswa WHERE 1=1";

    // filter jurusan
    if ($jurusan != "" && $jurusan != "Semua") {
        $query .= " AND jurusan='$jurusan'";
    }

    return mysqli_query($koneksi, $query);
}


// =======================
// MENGAMBIL DATA FORM
// =======================
$jurusan = "Semua";

if (isset($_POST['jurusan'])) {
    $jurusan = $_POST['jurusan'];
}


// =======================
// MEMANGGIL FUNCTION
// =======================
$hasil = tampilData($koneksi, $jurusan);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>

    <style>

        body{
            font-family: Arial;
        }

        .box{
            width: 500px;
            border: 1px solid gray;
            padding: 15px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td{
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        select, button{
            padding: 5px;
            margin-top: 5px;
        }

    </style>

</head>
<body>

<div class="box">

    <h1>Daftar Mahasiswa</h1>

    <form method="POST">

        <label>Pilih Jurusan :</label>
        <br>

        <select name="jurusan">

            <option value="Semua">Semua</option>
            <option value="TI">TI</option>
            <option value="SI">SI</option>
            <option value="MI">MI</option>
            <option value="TK">TK</option>
            <option value="KA">KA</option>

        </select>

        <br><br>

        <button type="submit">Tampilkan</button>

    </form>

    <br>

    <?php

    if ($jurusan == "Semua") {
        echo "<h3>Semua Jurusan</h3>";
    } else {
        echo "<h3>Jurusan $jurusan</h3>";
    }

    ?>

    <table>

        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Jurusan</th>
        </tr>

        <?php

        while($data = mysqli_fetch_array($hasil)){

        ?>

        <tr>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['kelamin']; ?></td>
            <td><?php echo $data['jurusan']; ?></td>
        </tr>

        <?php
        }
        ?>

    </table>

</div>

</body>
</html>


table table-bordered table-striped table-hover