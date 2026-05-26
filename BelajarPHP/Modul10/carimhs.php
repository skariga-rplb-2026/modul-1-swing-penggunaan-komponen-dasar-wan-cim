<?php
    include('crudmhs.php');
    $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Pencarian Data Mahasiswa</h2>
            </div>
            <div class="card-body">
                <form action="" method="post" class="mb-4">
                    <div class="row">
                        <div class="col-md-9">
                            <input 
                                type="text" 
                                name="keyword"
                                class="form-control"
                                placeholder="Masukkan NIM..."
                                value="<?php echo $keyword; ?>"
                            >
                        </div>
                        <div class="col-md-3">
                            <input 
                                type="submit" 
                                value="Cari"
                                class="btn btn-primary w-100"
                            >
                        </div>
                    </div>
                </form>

                <h3>Hasil Pencarian</h3>

                <?php
                    if ($keyword != "") {
                        $hasilCari = cariMhs($keyword);
                        if ($hasilCari != null) {
                            echo "
                            <table class='table table-bordered'>
                                <tr>
                                    <th width='150'>NIM</th>
                                    <td width='20'>:</td>
                                    <td>".$hasilCari['nim']."</td>
                                </tr>

                                <tr>
                                    <th>Nama</th>
                                    <td>:</td>
                                    <td>".$hasilCari['nama']."</td>
                                </tr>

                                <tr>
                                    <th>Kelamin</th>
                                    <td>:</td>
                                    <td>".$hasilCari['kelamin']."</td>
                                </tr>

                                <tr>
                                    <th>Jurusan</th>
                                    <td>:</td>
                                    <td>".$hasilCari['jurusan']."</td>
                                </tr>
                            </table>
                            ";
                        } else {
                            echo "
                            <div class='alert alert-danger'>
                                Data mahasiswa tidak ditemukan
                            </div>
                            ";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>