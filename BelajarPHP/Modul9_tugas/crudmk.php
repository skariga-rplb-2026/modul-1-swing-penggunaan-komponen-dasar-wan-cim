<?php
    require_once 'koneksimk.php';

    function bacamk($sql) {
        $data = array();
        $koneksi = koneksiMk();
        $hasil = mysqli_query($koneksi,$sql);

        if (mysqli_num_rows($hasil) == 0) {
            mysqli_close($koneksi);
            return null;
        }

        $i = 0;
        while($baris = mysqli_fetch_assoc($hasil)){
            $data[$i]['kode']= $baris['kode'];
            $data[$i]['nama'] = $baris['nama'];
            $data[$i]['sks'] = $baris['sks'];
            $i++;
        }
        mysqli_close($koneksi);
        return $data;
    }

    function tambahMk($kode, $nama, $sks) {
        $koneksi = koneksiMk();
        $sql = mysqli_query($koneksi,"SELECT kode FROM matakuliah WHERE kode='$kode'");

        if (mysqli_num_rows($sql) > 0) {
            mysqli_close($koneksi);
            return -1;
        }

        $sql = "INSERT INTO matakuliah VALUES ('$kode', '$nama', '$sks')";
        
        $hasil = 0;

        if (mysqli_query($koneksi,$sql)) {
            $hasil = 1;
        }

        mysqli_close($koneksi);
        return $hasil;
    }

    function hapusMk($kode) {
        $koneksi = koneksiMk();
        $sql = "DELETE FROM matakuliah WHERE kode = '$kode'";

        if (!mysqli_query($koneksi,$sql)) {
            die('Error: '. mysqli_error($koneksi));
        }

        $hasil = mysqli_affected_rows($koneksi);
        mysqli_close($koneksi);
        return $hasil;
    }

    function tampilData() {
        $sql = "SELECT*FROM matakuliah";
        return bacamk($sql);
    }
?>