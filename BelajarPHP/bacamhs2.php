<?php
    include 'bacamhs.php';

    function getSiswa($koneksi) {
        $query = mysqli_query($koneksi, "select*from mahasiswa");
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        return $data;
    }
    $siswa = getSiswa($koneksi);
?>