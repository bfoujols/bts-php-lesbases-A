<?php

$result = 10;
// WHILE 10 -> 20
while ($result <= 20) {
    //echo $result;
    $result++;
}

// DO WHILE 20 -> 30
do {
    //echo $result;
    $result++;
} while ($result <= 30);

// FOR
// 3 param init;condition;increment
for ($result = 0; $result <= 30; $result++) {
    //echo $result;
}

//echo "\n Foreach \n";
// FOREACH
// array(1,2,3) [1,2,3]
$tableau = [0 => "12", 1 => "33", 2 => "35", "bin" => "/etc/bin"];
foreach ($tableau as $keyTab => $valueTab) {
    //echo "Key=" . $keyTab . " Value=" . $valueTab . " \n";
}

//echo "Ma conf est dans le chemin : " . $tableau["bin"] . " \n";

$userTab = [
    "nom" => "benoit",
    "age" => 46,
    "adresse" => "14 rue Foch",
    "code postal" => "01456",
    "ville" => "Bourg en bresse",
    "identite" => [
        "CI" => "RF4567898743456787",
        "PC" => "2024RF6787654323456",
        "CV" => "vitalFR45689854334-567843"
    ],
    "genre" => "male"
];

// <nom> a un permis de conduire num : <identite/PC>
//echo $userTab["nom"] . " a un permis de conduire num : " . $userTab["identite"]["PC"];

const LIST_CARTE = [
    "CI" => "Carte d'identité",
    "PC" => "Permis de conduire",
    "CV" => "Carte de santé",
    "CM" => "Carte Monoprix"
];

$listUsers = [
    3456 => [
        "nom" => "benoit",
        "age" => 46,
        "adresse" => "14 rue Foch",
        "code postal" => "01456",
        "ville" => "Bourg en bresse",
        "identite" => [
        ],
        "genre" => "Male"
    ],
    5678 => [
        "nom" => "pepito",
        "age" => 34,
        "adresse" => "14 rue Moche",
        "code postal" => "24465",
        "ville" => "Lille",
        "identite" => [
            "CI" => "RF44567654976787",
            "PC" => "2018RF6787654323456",
            "CV" => "vitalFRFGYTRYT-567843",
            "CM" => "MonopFRFG-YTRYT-567843"
        ],
        "genre" => "Female"
    ],
    7890 => [
        "nom" => "joe",
        "age" => 30,
        "adresse" => "14 rue Belle",
        "code postal" => "01456",
        "ville" => "Paris",
        "identite" => [
            "CI" => "RF4567898743456787",
            "CV" => "vitalFR45689854334-567843"
        ],
        "genre" => "Male"
    ]
];

// L'utilisateur <nom>
// Afficher chaque carte par utilisateur
// Avec une boucle (ou des boucles d'or)

foreach ($listUsers as $userValue) {
    //var_dump($userValue["nom"]);
    //exit();
    echo $userValue["nom"] . "\n";
    //var_dump($userValue["identite"])
    if (count($userValue["identite"]) != 0) {
        foreach ($userValue["identite"] as $identiteKey => $identiteValue) {
            echo "- " . LIST_CARTE[$identiteKey] . " num : " . $identiteValue . "\n";
        }
    } else {
        echo "- Pas de carte !!!! \n";
    }
}

