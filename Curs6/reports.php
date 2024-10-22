<?php

require_once 'export_to_csv.php';
$persons = [
    [
        'first_name' => 'Marian',
        'last_name' => 'Ion',
        'phone' => '03125566',
        'email' => 'marianion@gmail.com',
    ],

    [
        'first_name' => 'Andrei',
        'last_name' => 'Ionita',
        'phone' => '031256666',
        'email' => 'ionita@gmail.com',
    ],

    [
        'first_name' => 'Vasile',
        'last_name' => 'Popescu',
        'phone' => '0312556699',
        'email' => 'popescu@yahoo.com',
    ],
];

exportToCSV($persons, 'persons.csv', 'w+');

include'read_from_csv.php';
$persons =  readCsvToArray("persons.csv");
echo '<pre>';

