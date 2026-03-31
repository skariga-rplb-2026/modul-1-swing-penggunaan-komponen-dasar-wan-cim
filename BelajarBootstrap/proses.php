File Proses <hr/>
<?php
    $jurusan = $_POST["jurusan"];

    switch ($jurusan) {
        case "ti":
            echo "Jurusan anda Teknik Informatika <br/>";
        break;
        case "si":
            echo "Jurusan anda Sistem Informasi <br/>";
        break;
        case "mi":
            echo "Jurusan anda Manajemen Informatika <br/>";
        break;
        case "tk":
            echo "Jurusan anda Teknik Komputer <br/>";
        break;
        case "ka":
            echo "Jurusan anda Komputerisasi Akuntansi <br/>";
        break;
        default :
            echo "Jurusan tidak ada";
    }

    $nilai = $_POST["angka"];
    echo "Nilai Anda = " . $nilai . "<br/>";

    if ($nilai > 100) {
        echo "Gacor Kang";
    } elseif ($nilai >  70) {
        echo "Selamat Anda Lulus";
    } elseif ($nilai >= 40) {
        echo "Anda harus ujian lagi";
    } else {
        echo "GOBLOK";
    }
?>