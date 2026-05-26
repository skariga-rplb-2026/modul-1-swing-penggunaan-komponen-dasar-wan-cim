<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0">Form Tambah Mata Kuliah</h3>
                    </div>
                    <div class="card-body">
                        <form action="prosestambahmk.php" method="post">

                            <div class="mb-3">
                                <label class="form-label">Kode Mata Kuliah</label>
                                <input 
                                    type="text" 
                                    name="kode" 
                                    class="form-control"
                                    placeholder="Masukkan Kode"
                                    required
                                >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Mata Kuliah</label>
                                <input 
                                    type="text" 
                                    name="nama" 
                                    class="form-control"
                                    placeholder="Masukkan Mata Kuliah"
                                    required
                                >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Satuan Kredit Semester (SKS)</label>
                                <input 
                                    type="number" 
                                    name="sks" 
                                    class="form-control"
                                    placeholder="Masukkan Jumlah SKS"
                                    required
                                >
                            </div>
                            <button type="submit" class="btn btn-success">
                                Simpan
                            </button>
                            <a href="bacamk.php" class="btn btn-secondary">
                                Batal
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>