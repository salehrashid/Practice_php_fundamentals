<?php
$orang = [
    [
        "id" => 1,
        "nama lengkap" => "saleh rashid",
        "nama pendek" => "saleh",
    ],
    [
        "id" => 2,
        "nama lengkap" => "rizki amanda",
        "nama pendek" => "rizki",
    ],
    [
        "id" => 3,
        "nama lengkap" => "anjas maulana",
        "nama pendek" => "anjas",
    ]
];

$column = array_column($orang, "nama lengkap");
var_dump($column);
echo "<br>";
echo $orang [0]["nama lengkap"];

