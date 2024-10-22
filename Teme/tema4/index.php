<?php

function arataElementeComune (array $vector1, array $vector2) {

    $elementeComune = array_intersect($vector1, $vector2);
    return array_values($elementeComune);
}

$vector1 = [1,2,6,9,10];
$vector2 = [2,6,8,1,9];
$result = arataElementeComune($vector1, $vector2);

print_r($result);
echo'<br>';


function elementeUnice (array $vectorDeVectori){
    $toateElementele=[];
    foreach ($vectorDeVectori as $vector){
      $toateElementele = array_merge($toateElementele, $vector) ; 
    }
    $elementeUnice= array_unique ($toateElementele);
    rsort($elementeUnice);

    return $elementeUnice;
}

$vectorDeVectori= [[2,4,6,8],[4,8,5,6],[7,8,9,2]];
$result = elementeUnice ($vectorDeVectori);
print_r($result);
echo'<br>';

function adaugaElemente (array $vectorDeVectori, array $vectorDeAdaugat){
    foreach ($vectorDeVectori as $key => $vector){
        if(count($vector)<=3){
            $vectorDeVectori[$key] = array_merge ($vector, $vectorDeAdaugat);
        }
    }
    return $vectorDeVectori;
}

$vectorDeVectori=[[1,2],[3,4,5],[6,7,8,9]];
$vectorDeAdaugat =[10,11];
$result= adaugaElemente($vectorDeVectori, $vectorDeAdaugat);
print_r($result);