<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Tambah Mahasiswa</h2>

    <form method="post" action="prosestambah.php">
        
        NIM: <br>
        <input type="text" name="nim"><br><br>

        Nama: <br>
        <input type="text" name="nama"><br><br>

        Jenis Kelamin: <br>
        <input type="radio" name="kelamin" value="L"> Laki-laki
        <input type="radio" name="kelamin" value="P"> Perempuan
        <br><br>

        Jurusan: <br>
        <input type="radio" name="jurusan" value="MI"> MI
        <input type="radio" name="jurusan" value="TK"> TK
        <input type="radio" name="jurusan" value="KA"> KA
        <input type="radio" name="jurusan" value="TI"> TI
        <input type="radio" name="jurusan" value="SI"> SI
        <br><br>

        <input type="submit" value="Tambah">

    </form>
</body>
</html>