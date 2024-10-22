<?php

$file = fopen( "persons.csv", "r");

echo'<pre>';
$persons =[];
$columns = fgetcsv($file);
while ($person = fgetcsv($file)) {
    foreach ($person as $key => $value) {
        $person[$columns[$key]] = $value;
        unset($person[$key]);
    }
    $persons[] = $person;
    // foreach ($data as key => $value {
    // $person[$columns[$key]}]= $value;
    // $persons[]= $person; // trebuia in afara foreach
    // }
}

// TODO: de facut functie codul de mai sus si de folosit reports.php
echo '<pre>';
print_r($persons);

function readCsvToArray ($filename) {
    $file = fopen($filename, "r");
    $persons= [];
    $columns = fgetcsv($file);
    while ($person = fgetcsv($file)) {
        foreach ($person as $key => $value) {
            $person[$columns[$key]] = $value;
            unset($person[$key]);
        }

    }
    fclose($file);
    return $persons;
}