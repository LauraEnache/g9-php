<?php

/// LECTIA DE STRING-URI ///

echo "Hello \"world\"! \\ \$ \n     \ttest";        //escape caracter \ for \, n, t, $ and ""

echo '<br> Salut de la \'mare\'';

echo '<hr>';

$string = 'Hello from the future';
echo strlen($string);
echo '<br>';
echo str_word_count($string);
echo '<br>';
echo strrev($string);
echo '<br>';
echo strpos($string, 'f');
echo '<br>';
var_dump(strpos($string, 'them'));
echo '<br>';
$string =  str_replace('future', 'past', $string);
echo $string;

// imi da o bucata dintr-un string . substr()

echo '<br>';
echo substr($string, 0, 5); //offset de la ce caracter sa inceapa, iar length cate caractere
echo '<br>';
echo substr($string, 6, 4);
echo '<br>';
echo substr($string, -7, 7);
echo '<br>';



// Functii pentru trasnformare caracterelor din sirurile de caractere


// ce este jos, este o functie trim
echo strtoupper($string);
echo '<br>';
echo strtolower($string);
echo '<br>';
echo ucfirst($string);
echo '<br>';
echo ucwords($string);
echo '<br>';

$name = 'Matei Dani    &nbsp';
echo $name . trim($name). $name;



//functia explode:
$strings = explode(' ', $string);
echo '<pre>';
print_r($strings);



//functia str_split
$array1 = str_split($string);
$array2 = str_split($string);
print_r($array1);
print_r($array2);
echo '<br>';

//functia implode
echo implode(',', $strings);
echo '<br>';



//functia str_repeat()
echo str_repeat('+', 10);
echo '<br>';

// o alta functie

echo md5('mypassword'); //encrypt function

