<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Peserta</title>
</head>
<body>
    <h2>Registrasi Peserta Kursus</h2>
    <table>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="email" size="30"></td>
            </tr>
            <tr>
                <td>Nama Kursus</td>
                <td>
                    <input type="checkbox" name="kursus[]" value="csharp" >C# (Biaya Rp. 1.000.000,-)<br>
                    <input type="checkbox" name="kursus[]" value="javascript" >JavaScript (Biaya Rp. 500.00,-)<br>
                    <input type="checkbox" name="kursus[]" value="perl" />Perl (Biaya Rp. 800.000,-)<br>
                    <input type="checkbox" name="kursus[]" value="php" />PHP (Biaya Rp. 1.100.000,-)<br>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
    <fieldset style="width : 25%;">
        <legend><h3>Data</h3></legend>
        <?php
            if (isset($_POST['submit'])) {

                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $kursus = isset($_POST['kursus']) ? $_POST['kursus'] : [];

                if (!empty($nama)) {

                    if (!empty($email)) {

                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                            if (!empty($kursus)) {
                                $harga_kursus = [
                                    "csharp" => 1000000,
                                    "javascript" => 500000,
                                    "perl" => 800000,
                                    "php" => 1100000
                                ];

                                $jumlah_kursus = count($kursus);
 
                                $biaya = 0;
                                foreach ($kursus as $k) {
                                    if (isset($harga_kursus[$k])) {
                                        $biaya += $harga_kursus[$k];
                                    }
                                }

                                echo "Terimakasih data anda telah diterima.";
                                echo "Kursus yang anda pilih sebanyak $jumlah_kursus buah yaitu:<br>";
                                echo "<ul>";    

                                foreach ($kursus as $k) {
                                    echo "<li>$k</li>";
                                }

                                echo "</ul>";
                                echo "Biaya kursus sebesar Rp. " . number_format($biaya, 0, ',', '.') . ",-";

                            } else {
                                echo "Pilih minimal 1 kursus!";
                            }

                        } else {
                            echo "Format email tidak valid!<br>";
                            echo "Masukan Formad email dengan benar!";
                        }

                    } else {
                        echo "Email tidak boleh kosong!<br>";
                        echo "Data harus diisi semua!";
                    }

                } else {
                    echo "Nama tidak boleh kosong!<br>";
                    echo "Data harus diisi semua!";
                }
            }
        ?>
    </fieldset>
    
</body>
</html>