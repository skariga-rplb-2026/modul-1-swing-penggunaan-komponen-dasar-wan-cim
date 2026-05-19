<?php
include('crudmhs.php');
$nim = $_GET['nim'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Hapus</title>
</head>
<body>

    <h2>Apakah anda akan menghapus mahasiswa dengan nim: <?php echo $nim; ?>?</h2>

    <a href="proseshapus.php?nim=<?php echo $nim; ?>">
        <button>OK</button>
    </a>

    <a href="tampildata.php">
        <button>Batal</button>
    </a>

</body>
</html>