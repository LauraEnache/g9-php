<?php

function eliminaVocalele ($sir){
    $vocale=['a','e','i','o','u','A','E','I','O','U'];
    $rezultat=str_replace($vocale, '', $sir);
    return $rezultat;
}

echo eliminaVocalele("Aceasta este tema mea.");
echo'<br>';

function frecventaCaractere ($sir) {
    $frecventa = [];

    for ($i=0; $i < strlen ($sir); $i++) {
        $caracter= $sir[$i];

    if (isset($frecventa[$caracter])){
        $frecventa[$caracter]++;
    } else {
        $frecventa[$caracter] = 1;
    }
    }
    return $frecventa;
}
$rezultat = frecventaCaractere("acasa");
echo'<pre>';
print_r($rezultat);