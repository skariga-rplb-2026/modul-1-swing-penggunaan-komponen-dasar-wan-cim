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
    <table width="400" border="1">
        <tr>
            <th>Nama</th>
            <th>Kursus</th>
            <th>Bayar</th>
        </tr>
        <?php
            foreach ($data as $d) {
                echo "<tr>";
                echo "<td>".$data["nama"]."</td>";
                echo "<td>".$data["kursus"]."</td>";
                echo "<td>".$data["bayar"]."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>