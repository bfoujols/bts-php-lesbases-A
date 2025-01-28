<?php

$result = 10;
// WHILE 10 -> 20
while ($result <= 20) {
    echo $result;
    $result++;
}

// DO WHILE 20 -> 30
do {
    echo $result;
    $result++;
} while ($result <= 30);

// FOR
// 3 param init;condition;increment
for ($result = 0; $result <= 30; $result++) {
    echo $result;
}

echo "\n Foreach \n";
// FOREACH
// array(1,2,3) [1,2,3]
$tableau = [0 => "12", 1 => "33", 2 => "35", "bin" => "/etc/bin"];
foreach ($tableau as $keyTab => $valueTab) {
    echo "Key=" . $keyTab . " Value=" . $valueTab . " \n";
}

echo "Ma conf est dans le chemin : " . $tableau["bin"] . " \n";