<?php
    include('crudmhs.php');

    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];

        $hasil = hapusMhs($nim);
        if ($hasil > 0) {
            header("Location: bacamhs.php");
            exit;
        }else {
            echo "
                <h3>Gagal menghapus data!</h3>
                <a href='bacamhs.php'>
                    <button>Kembali</button>
                </a>
            ";
        }
    }else {
        echo "
        <h3>NIM tidak ditemukan</h3>
        <a href ='bacamhs.php'>
            <button>Kembali</button>
        </a>
        ";
    }
?>  