<?php
    include('crudmk.php');

    if (isset($_GET['kode'])) {
        $kode = $_GET['kode'];

        $hasil = hapusMk($kode);
        if ($hasil > 0) {
            header("Location: bacamk.php");
            exit;
        }else {
            echo "
                <h3>Gagal menghapus data!</h3>
                <a href='bacamk.php'>
                    <button>Kembali</button>
                </a>
            ";
        }
    }else {
        echo "
        <h3>Kode tidak ditemukan</h3>
        <a href ='bacamk.php'>
            <button>Kembali</button>
        </a>
        ";
    }
?>  