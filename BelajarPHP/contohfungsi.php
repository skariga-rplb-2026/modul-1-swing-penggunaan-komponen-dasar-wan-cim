<?php
    $angkaAcak = rand(1,9999999);
    echo "Angka acak : $angkaAcak <br>";

    $akar = sqrt(100);
    echo "Akar angka 100 : $akar <br>";

    $decimal = 123.6783;
    echo "Nilai Decimal : $decimal <br>";

    $pembulatan = floor($decimal);
    echo "Pembulatan nilai decimal ke bulat : $pembulatan <br>";

    $pembulatanNaik = ceil($decimal);
    echo "Pembulatan nilai naik : $pembulatanNaik <br>";

    $pendekatan = round($decimal, 3);
    echo "Pendekatan nilai : $pendekatan <br>";

    $menjadiPositif = abs(-10);
    echo "-10 akan menjadi : $menjadiPositif <br>";

    $pangkat = pow(3,5);
    echo "3 pangkat 5 : $pangkat <br>";

    $pi = pi();
    echo "pi : $pi";
?>