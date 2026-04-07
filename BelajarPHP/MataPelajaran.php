<?php
    $data = [
        ["nama" => "Rina", "mapel" => "Matematika", "nilai" => "90"],
        ["nama" => "Budi", "mapel" => "Informatika", "nilai" => "75"],
        ["nama" => "Salsa", "mapel" => "Matematika", "nilai" => "85"],
        ["nama" => "Doni", "mapel" => "Bahasa Inggris", "nilai" => "70"],
        ["nama" => "Rudi", "mapel" => "Informatika", "nilai" => "95"],
        ["nama" => "Lina", "mapel" => "Bahasa Inggris", "nilai" => "88"]
    ];

    function getGrade($nilai) {
        if ($nilai >= 90) return "A";
        elseif ($nilai >= 80) return "B";
        elseif ($nilai >= 70) return "C";
        else return "D";
    }

    function getWarna($grade) {
        switch ($grade) {
            case "A": return "green";
            case "B": return "yellow";
            case "C": return "red";
            default: return "grey";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Pelajaran</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 600px; height: 300px;}
        th, td { border: 1px solid #333; padding: 10px; text-align: left; }
        select { padding: 5px; font-size: 16px; }
        .green { background: #00ff00; }
        .yellow { background: #ffff00; }
        .red { background: #ff0000; }
        
    </style>
</head>
<body>
    <b>Filter Mata Pelajaran</b>
    <form action="" method="get">
        <?php
            if (isset($_GET['mapel'])) {
                $filter = $_GET['mapel'];
            } else {
                $filter = "semua";
            }
        ?>
        <select name="mapel" onchange="this.form.submit()">
            <option value="" <?php echo ($filter == "semua" || $filter == "")? "selected" : ""; ?> >All</option>
            <option value="Matematika" <?php echo ($filter == "Matematika")? "selected" : ""; ?> >Matematika</option>
            <option value="Informatika" <?php echo ($filter == "Informatika")? "selected" : ""; ?> >Informatika</option>
            <option value="Bahasa Inggris" <?php echo ($filter == "Bahasa Inggris")? "selected" : ""; ?> >Bahasa Inggris</option>
        </select>
    </form>
    <table>
        <tr>
            <th>Nama</th>
            <th>Mapel</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>
        <?php
            $dataTampil = [];
            if (isset($_GET['mapel'])) {
                $filter = $_GET['mapel'];
                if ($filter == "") {
                    $dataTampil = $data;
                } else {
                    foreach ($data as $d) {
                        if ($d["mapel"] == $filter) {
                            $dataTampil[] = $d;
                        }
                    }
                }
            } else {
                $dataTampil = $data;
            }

            foreach ($dataTampil as $d) {
                $grade = getGrade($d['nilai']);
                $warna = getWarna($grade);

                echo "<tr class='$warna'>";
                echo "<td>".$d["nama"]."</td>";
                echo "<td>".$d["mapel"]."</td>";
                echo "<td>".$d["nilai"]."</td>";
                echo "<td>".$grade."</td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <th colspan="4" align="left">
                <?php
                    $total = 0;
                    $avg = 0;
                    $n = 0;
                    foreach ($data as $d) {
                        $total+=$d['nilai'];
                        $n++;
                    }
                    $avg = $total / $n;
                    echo "Rata-rata Nilai : " .$avg;
                ?>
            </th>
        </tr>
    </table>
</body>
</html>