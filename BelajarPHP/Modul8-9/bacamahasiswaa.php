<?php
include('crudmhs.php');

$jurusanTerpilih = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';
$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <meta charset="UTF-8">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <!-- Judul -->
    <h2 class="text-center mb-4">Data Mahasiswa</h2>

    <!-- Form -->
    <form method="post">

        <!-- Cari -->
        <div class="mb-3">
            <label>Cari NIM</label>
            <input type="text" 
                   name="keyword" 
                   class="form-control"
                   value="<?php echo $keyword; ?>">
        </div>

        <!-- Jurusan -->
        <div class="mb-3">
            <label>Pilih Jurusan</label><br>

            <?php
            $list_jurusan = ['TI','SI','MI','TK','KA'];

            foreach($list_jurusan as $jrs){
            ?>
                <input type="radio" 
                       name="jurusan"
                       value="<?php echo $jrs; ?>"
                       <?php if($jurusanTerpilih == $jrs) echo "checked"; ?>>

                <?php echo $jrs; ?>
            <?php
            }
            ?>
        </div>

        <!-- Tombol -->
        <button type="submit" class="btn btn-primary">
            Cari
        </button>

        <a href="" class="btn btn-secondary">
            Reset
        </a>

    </form>

    <hr>

    <!-- Judul Hasil -->
    <h4>
        <?php
        if($keyword != ""){
            echo "Hasil pencarian: ".$keyword;
        }
        elseif($jurusanTerpilih != ""){
            echo "Jurusan: ".$jurusanTerpilih;
        }
        else{
            echo "Semua Data";
        }
        ?>
    </h4>

    <?php
    // Ambil data
    if($keyword != ""){
        $sql = "SELECT * FROM mahasiswa 
                WHERE nama LIKE '%$keyword%' 
                OR nim LIKE '%$keyword%'";
        $data = bacaMhs($sql);
    }
    elseif($jurusanTerpilih != ""){
        $data = bacaMhsPerJurusan($jurusanTerpilih);
    }
    else{
        $data = bacaSemuaMhs();
    }

    // Tampilkan data
    if($data == null){
        echo "<div class='alert alert-warning'>Data tidak ditemukan</div>";
    }
    else{
    ?>

        <table class="table table-bordered mt-3">

            <tr class="table-dark">
                <th>NIM</th>
                <th>Nama</th>
                <th>L/P</th>
                <th>Jurusan</th>
            </tr>

            <?php
            foreach($data as $mhs){
            ?>
                <tr>
                    <td><?php echo $mhs['nim']; ?></td>
                    <td><?php echo $mhs['nama']; ?></td>
                    <td><?php echo $mhs['kelamin']; ?></td>
                    <td><?php echo $mhs['jurusan']; ?></td>
                </tr>
            <?php
            }
            ?>

        </table>

    <?php
    }
    ?>

</div>

</body>
</html>