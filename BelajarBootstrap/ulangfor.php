<?php
    $awal = $_POST["awal"];
    $akhir = $_POST["akhir"];
    $continue = $_POST["lanjut"];
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i == $continue) {
            continue;
        }
        echo "<br/>For ke $i.";
    }
?>