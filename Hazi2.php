<?php

//Elso Feladat
$array1 = [5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200'];
foreach ($array1 as $item) {
    if (is_numeric($item)) {
        echo gettype($item) . " Yes" . "<br>";
    } else {
        echo gettype($item) . "No" . "<br>";
    }
}

//Masodik feladat
$orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest", "Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");
foreach($orszagok as $orszag => $fovaros) {
    echo "$orszag fővárosa $fovaros <br>";
}

//Harmadik Feladat
$napokArray = array(
    "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);

foreach ($napokArray as $orszag => $napok) {
    echo "$orszag: ";
    foreach ($napok as $nap) {
        echo "$nap, ";
    }
    echo "<br>";
}

//Negyedik Feladat
$szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');

function atalakitas($tomb, $tipus) {
    array_walk($tomb, function (&$value) use ($tipus) {
        if ($tipus == "kisbetus") {
            $value = strtolower($value);
        } else if ($tipus == "nagybetus") {
            $value = strtoupper($value);
        }
    });
}

atalakitas($szinek, "nagybetus");
alakit($szinek, "kisbetus");
print_r($szinek);
?>