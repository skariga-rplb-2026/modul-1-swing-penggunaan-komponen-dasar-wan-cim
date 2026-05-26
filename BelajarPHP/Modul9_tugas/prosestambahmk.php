<?php
    include('crudmk.php');

    $kode = $_POST['kode'];
    $mtkuliah = $_POST['nama'];
    $sks = $_POST['sks'];

    $hasil = tambahMk($kode, $mtkuliah, $sks);
    if ($hasil > 0) {
        header("Location: bacamk.php");
    } else {
        header("Location: gagaltambahmk.php");
    }
?>