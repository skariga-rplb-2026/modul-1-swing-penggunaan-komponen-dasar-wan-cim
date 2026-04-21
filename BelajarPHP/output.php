<?php
$nama=$_POST["nama"];
$jenis=$_POST["jenis"];
$seri=$_POST["seri"];
$merk=$_POST["merk"];
$negara=$_POST["negara"];
$tgl=$_POST["angka_hari"];
$bulan=$_POST["bulan"];
$tahun =$_POST["tahun"];
$stok =$_POST["stok"];
$harga =$_POST["harga"];

$kode_barang=[
    $jenis,
    str_pad($seri,6,"0",STR_PAD_LEFT),
    substr($merk,0,3),
    substr($negara,0,3)
];

$kode =implode("/",$kode_barang);

$tanggal=date("l,d F Y",strtotime("$tahun - $bulan - $tahun"));
$total = $harga * $stok;
?>

<body>
    <h1>Data Barang</h1>
    <table>
        <tr>
            <td>kode</td>
            <td>:</td>
            <td><?php echo $kode; ?></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><?php echo strtoupper($nama); ?></td>
        </tr>
        <tr>
            <td>Nomor seri</td>
            <td>:</td>
            <td><?php echo $seri; ?></td>
        </tr>
        <tr>
            <td>Merk</td>
            <td>:</td>
            <td><?php echo ucfirst($merk); ?></td>
        </tr>
        <tr>
            <td>Negara Pembuat</td>
            <td>:</td>
            <td><?php echo ucfirst($negara); ?></td>
        </tr>
        <tr>
            <td>tanggal Pembuatan</td>
            <td>:</td>
            <td><?php echo $tanggal; ?></td>
        </tr>
        <tr>
            <td>harga</td>
            <td>:</td>
            <td><?php echo number_format($harga, 0,',', '.'); ?></td>
        </tr>
        <tr>
            <td>Jumlah stok</td>
            <td>:</td>
            <td><?php echo $stok; ?></td>
        </tr>
        <tr>
            <td>total harga</td>
            <td>:</td>
            <td><?php echo $total; ?></td>
        </tr>
    </table>
    
</body>