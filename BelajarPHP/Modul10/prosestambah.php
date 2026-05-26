<?php
include('crudmhs.php');

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$jurusan = $_POST['jurusan'];

$hasil = tambahMhs($nim, $nama, $kelamin, $jurusan);
if($hasil > 0)
    header("Location: bacamhs.php");
else{
    header("Location: gagaltambah.php");
}
?>