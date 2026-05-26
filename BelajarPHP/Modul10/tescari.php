<?php
    include('crudmhs.php');

    $kondisi ="jurusan = 'MI'";
    $data = cariSemuaMhs($kondisi);
    if ($data != null) {
        foreach($data as $mhs) {
            $nim = $mhs['nim'];
            $nama = $mhs['nama'];
            $kelamin = $mhs['kelamin'];
            $jurusan = $mhs['jurusan'];
            echo "$nim, $nama, $kelamin, $jurusan <br>";
        }
    } else {
        echo "Tidak ada";
    }
?>