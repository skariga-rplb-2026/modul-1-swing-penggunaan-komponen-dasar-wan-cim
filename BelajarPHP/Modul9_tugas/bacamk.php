<?php
    include('crudmk.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow">
            
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Daftar Mata Kuliah</h3>
            </div>

            <div class="card-body">

                <a href="tambahmk.php" class="btn btn-success mb-3">
                    + Tambah Data Mata Kuliah
                </a>

                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th width="120">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $data = tampilData();

                        if ($data != null) {
                            foreach($data as $d) {

                                $kode = $d['kode'];
                                $mtkuliah = $d['nama'];
                                $sks = $d['sks'];

                                echo "
                                <tr>
                                    <td>$kode</td>
                                    <td>$mtkuliah</td>
                                    <td>$sks</td>
                                    <td>
                                        <a href='konfirmasihapusmk.php?kode=$kode' 
                                           class='btn btn-danger btn-sm'>
                                           Hapus
                                        </a>
                                    </td>
                                </tr>
                                ";
                            }
                        } else {
                            echo "
                            <tr>
                                <td colspan='4' class='text-center text-muted'>
                                    Data belum tersedia
                                </td>
                            </tr>
                            ";
                        }
                        ?>
                    </tbody>

                </table>

            </div>
        </div>

    </div>

</body>
</html>