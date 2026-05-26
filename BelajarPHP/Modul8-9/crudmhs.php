<?php
require_once 'koneksiakad.php';

function bacaMhs($sql){
    $data = array();
    $koneksi = koneksiAkademik();
    $hasil = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($hasil) == 0) {
        mysqli_close($koneksi);
        return null;
    }

    $i=0;
    while($baris = mysqli_fetch_assoc($hasil)){
        $data[$i]['nim']= $baris['nim'];
        $data[$i]['nama'] = $baris['nama'];
        $data[$i]['kelamin'] = $baris['kelamin'];
        $data[$i]['jurusan'] = $baris['jurusan'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function tambahMhs($nim, $nama, $kelamin, $jurusan){
    $koneksi = koneksiAkademik();
    $sql = mysqli_query($koneksi, "SELECT nim FROM mahasiswa WHERE nim='$nim'");

    if(mysqli_num_rows($sql) > 0){
        mysqli_close($koneksi);
        return -1;
    }

    $sql = "INSERT INTO mahasiswa VALUES('$nim', '$nama', '$kelamin', '$jurusan')";

    $hasil = 0;

    if(mysqli_query($koneksi, $sql)){
        $hasil = 1;
    }

    mysqli_close($koneksi);
    return $hasil;
}
function hapusMhs($nim){
    $koneksi = koneksiAkademik();
    $sql = "delete from mahasiswa where nim='$nim'";
    
    if (!mysqli_query($koneksi, $sql)){
        die('Error: ' . mysqli_error($koneksi));
    }
    
    $hasil = mysqli_affected_rows($koneksi);
    mysqli_close($koneksi);
    return $hasil;
}   

function bacaMhsPerJurusan($jurusan) {
    $sql = "SELECT * FROM mahasiswa WHERE jurusan = '$jurusan'";
    
    return bacaMhs($sql);
}
function bacaSemuaMhs() {
    $sql = "SELECT * FROM mahasiswa";
    return bacaMhs($sql);
}
?>