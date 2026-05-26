<?php
include('crudmhs.php');
$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cari Mahasiswa</title>
</head>
<body>
    <h2>Pencarian Data Mahasiswa</h2>

    <form action="" method="post">
        Cari NIM: 
        <input type="text" name="keyword" value="<?php echo $keyword; ?>" placeholder="Masukkan NIM...">
        <input type="submit" value="Cari">

        <?php
    if ($keyword != "") {
        echo "<h3>Hasil Pencarian: '$keyword'</h3>";
        $sqlCari = "SELECT * FROM mahasiswa WHERE nim LIKE '%$keyword%'";
        $hasilCari = bacaMhs($sqlCari);
        
        if ($hasilCari) {
            renderTabel($hasilCari);
        } else {
            echo "Data tidak ditemukan.";
        }
    }
    ?>

    <hr>
    <h3>Daftar Seluruh Mahasiswa</h3>
    <?php
    $semua = bacaSemuaMhs();
    renderTabel($semua);

    function renderTabel($data) {
        if ($data != "") {
            echo '<table border="1">
                <tr>
                    <th>NIM</th><th>Nama</th><th>Kelamin</th><th>Jurusan</th>
                </tr>';
            foreach ($data as $mhs) {
            echo "<tr>
                    <td>{$mhs['nim']}</td>
                    <td>{$mhs['nama']}</td>
                    <td>{$mhs['kelamin']}</td>
                    <td>{$mhs['jurusan']}</td>
                  </tr>";
            }
            echo '</table>';
            return;
        }
        
    }
    ?>
    </form>

    
</body>
</html>