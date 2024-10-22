<?php
function scrieInFisier($filename,$fraza, $numar)
{
    $fisier = fopen($filename, "a");

    if ($fisier){
        for ($i=0; $i<$numar; $i++){
            fwrite($fisier, $fraza);
        }
        fclose($fisier);
        echo "Fraza a fost scrisa";
    } else {
         echo "Fraza nu a fost scrisa";
    }
}
scrieInFisier ('exemplu.txt', 'Test.', 5);