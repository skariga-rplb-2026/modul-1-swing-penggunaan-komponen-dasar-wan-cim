<?php
    function judul() {
        echo "<h2>Praktikum Pemrograman Web!</h2>";
    }
    function garis() {
        echo "=================================== <br>";
    }
    function data($nis, $nama, $kelas) {
        echo "NIS   : $nis <br>";
        echo "Nama  : $nama <br>";
        echo "Kelas : $kelas <br>";
    }

    judul();
    garis();
    data("26005", "Muhammad Ridwan", 10);
    garis();
    data("26735", "Dede Raka", 10);
    garis();
    data("62537", "Axzefa Wira", 10);
    garis();
    data("19272", "Satria Kevin", 10);
    garis();
    data("74435", "Maulana Alfarizi", 10);
    garis();
?>