<?php
    $data = [
        ["nama" => "Siti","kursus" => "HTML","bayar" => "300000"],
        ["nama" => "Ani","kursus" => "PHP","bayar" => "400000"],
        ["nama" => "Amir","kursus" => "MYSQL","bayar" => "350000"],
        ["nama" => "Agus","kursus" => "PHP","bayar" => "400000"],
        ["nama" => "Minah","kursus" => "HTML","bayar" => "300000"],
    ];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Pilih Kursus :
    <form action="" method="get">
        <?php
            if (isset($_GET['kursus'])) {
                $filter = $_GET['kursus'];
            } else {
                $filter = "semua";
            }
        ?>
        
        <select name="kursus" onchange="this.form.submit()">
            <option value="" <?php echo ($filter == "semua" || $filter == "")? "selected" : ""; ?> >All </option>
            <option value="HTML" <?php echo ($filter == "HTML")? "selected" : ""; ?> > HTML </option>
            <option value="PHP" <?php echo ($filter == "PHP")? "selected" : ""; ?> > PHP </option>
            <option value="MYSQL" <?php echo ($filter == "MYSQL")? "selected" : ""; ?> > MYSQL </option>
        </select>
    </form>
    <table width="400" border="1">
        <tr>
            <th>Nama</th>
            <th>Kursus</th>
            <th>Bayar</th>
        </tr>
        <?php
            $dataTampil = [];
            if (isset($_GET['kursus'])) {
                $filter = $_GET['kursus'];
                if ($filter == "") {
                    $dataTampil = $data;
                } else {
                    foreach ($data as $d) {
                        if ($d["kursus"] == $filter) {
                            $dataTampil[] = $d;
                        }
                    }
                }
            } else {
                $dataTampil = $data;
            }

            foreach ($dataTampil as $d) {
                echo "<tr>";
                echo "<td>".$d["nama"]."</td>";
                echo "<td>".$d["kursus"]."</td>";
                echo "<td>".$d["bayar"]."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>