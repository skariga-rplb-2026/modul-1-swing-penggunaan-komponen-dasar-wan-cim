<?php
Function koneksiAkademik(){
    $servername ="localhost";
    $username ="root";
    $password = "";
    $dbname ="ridwan_akademik";

    $koneksi = mysqli_connect($servername, $username, $password, $dbname);

    if (!$koneksi) {
        die("Koneksigagal: " . mysqli_connect_error());
    }
    return $koneksi;
}
?>