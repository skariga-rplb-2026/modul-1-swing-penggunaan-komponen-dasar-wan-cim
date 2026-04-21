<?php
    $celcius = $_POST["celsius"];

    function kelvin($celcius) {
        $kelvin = 273.15 + $celcius;
        return $kelvin;
    }
    function fahrenheit($celcius) {
        $fahrenheit = 32 + (1.8 * $celcius);
        return $fahrenheit;
    }

    echo "<h2>Hasil Konversi Suhu Celcius ke Kelvin dan Fahrenheit</h2>";
    echo "Derajat Celcius : $celcius <br>";

    if (isset ($_POST["celsius"])) {
        $hasil = kelvin($_POST["celsius"]);
        echo "Derajat Kelvin : $hasil <br>";
    }
    if (isset ($_POST["celsius"])) {
        $hasil = fahrenheit($_POST["celsius"]);
        echo "Derajat Fahremheit : $hasil";
    }
?>