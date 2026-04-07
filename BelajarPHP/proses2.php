Machine Kasir <hr>
<?php
    $namaBarang = $_POST['namaBarang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jml'];
    $garis = "=====================================";

    $total = $harga * $jumlah;

    //Mengecek apakah total 20000 atau lebih
    if ($total >= 20000) {
        $diskon = $total * 0.1;
        $total_akhir = $total - $diskon;

        echo "Nama Barang : " . $namaBarang . "<br>";
        echo "Harga : " . $harga . "<br>";
        echo "Jumlah : " . $jumlah . "<br>";
        echo $garis."<br>";
        echo "Total : " . $total . "<br>";
        echo ("Selamat Anda Mendapat Diskon 10%! <br>");
        echo $garis."<br>";
        echo "Total Setelah Diskon : " . $total_akhir;
    } else {
        echo "Nama Barang : " . $namaBarang . "<br>";
        echo "Harga : " . $harga . "<br>";
        echo "Jumlah : " . $jumlah . "<br>";
        echo $garis."<br>";
        echo "Total : " . $total . "<br>";
    }