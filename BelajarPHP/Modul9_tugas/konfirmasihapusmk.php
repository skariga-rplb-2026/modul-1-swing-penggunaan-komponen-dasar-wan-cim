<?php
    include('crudmk.php');
    $kode = $_GET['kode'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card shadow">

                    <div class="card-header bg-danger text-white">
                        <h3 class="mb-0">Konfirmasi Hapus</h3>
                    </div>

                    <div class="card-body text-center">

                        <h5 class="mb-4">
                            Apakah anda yakin ingin menghapus mata kuliah dengan kode:
                            <br>
                            <strong><?php echo $kode; ?></strong> ?
                        </h5>

                        <a href="proseshapusmk.php?kode=<?php echo $kode; ?>" 
                           class="btn btn-danger">
                            Ya, Hapus
                        </a>

                        <a href="bacamk.php" 
                           class="btn btn-secondary">
                            Batal
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>