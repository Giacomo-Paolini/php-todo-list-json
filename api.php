<?php
header('Content-Type: application/json');

$names = [
    [
        "name" => "Mario",
        "last_name" => "Rossi"
    ],
    [
        "name" => "Giovanna",
        "last_name" => "Bianchi"
    ]
];

$arrayNames = json_encode($names);

echo $arrayNames;
?>