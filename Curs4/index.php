<?php

$cars = ['BMW', 'Volvo', 'Audi'];
$cars2[]='Audi';
$cars2[1]='Opel';
$cars2[]='Dacia';

echo $cars[1];

$names= [
    'nume1' =>'Marian',
    'nume2' =>'Lorena',
    'nume3' => 'Irina',
    'nume4' => 'Andrei',
    'nume5' => 'Ionut',

];

echo '<br>';
echo $names['nume4']; //array asociativ

$names2['nume1']='Marian';
$names2['nume2']='Ionut';

// array multidimensional (un array cu mai multe arrayuri)
 $garage=[
    ['brand' => 'BMW', 'gas_type' => 'diesel', $cars],
    ['brand' => 'Audi', 'gas_type' => 'GPL'],
 ];

 echo'<br>';
 echo $garage[1]['brand'];
 echo'<br>';
 echo $garage[0][0][0]; // second index is for $cars element

 foreach($garage as $key =>$car) {
    echo '<br>'. $key. '.' . $car['brand'];
 }


echo '<hr>';
$animals = ['dog','cat', 'mouse','elephant','bird'];
sort($animals);
print_r($animals);
echo'<br>';
rsort($animals);
print_r($animals);

echo'<br>';
$colors= [
    'color1'=> 'red',
    'color2'=> 'green',
    'color3'=> 'blue',
    'color4'=> 'yellow',
    'color5'=> 'black',
];
asort($colors);
print_r($colors);
echo'<br>';
ksort($colors);
print_r($colors);

echo'<hr>';
$cities = [
    'city2' => 'Bucuresti',
    'city5' => 'Cluj',
    'city1' => 'Timisoara',
    'city7' => 'Iasi',
];
arsort($cities);
print_r($cities);
echo'<br>';
krsort($cities);
print_r($cities);

echo'<br>';
if(in_array('Timisoara', $cities)){
    echo 'Timisoara is found in the array.';
} else {
    echo'Timisoara is not found in the array.';
}
 
echo'<hr>';
$citiesMultiple = array_chunk ($cities, 2, true);
echo'<pre>' ; // pre afiseaza arrayul in jos
print_r($citiesMultiple);

echo'<hr>';
$column = array_column($garage, 'brand');
print_r($column);

echo'<br>';
$array_keys = ['first', 'second'];
$array_values = ['Marian', 'Alex'];
$array_combined = array_combine($array_keys, $array_values);
print_r($array_combined);
