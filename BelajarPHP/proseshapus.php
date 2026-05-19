<?php
    include('crudmhs.php');

    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];

        if ($hasil > 0) {
            header("Location: bacamhs2.php");
            exit;
        }else {
            die("Gagal menghapus data!");
        }
    }else {
        echo "NIM tidak ditemukan";
    }
?>  