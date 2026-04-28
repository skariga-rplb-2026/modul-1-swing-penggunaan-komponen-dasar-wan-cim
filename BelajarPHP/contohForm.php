<form method="post">
    Nama: <input type="text" name="nama"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

<?php
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "Selamat Datang $nama <br>";
    echo "Alamat Email anda adalah &email";
?>
