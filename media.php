<?php


$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$contatore = 0;
$somma = 0;
//arr.forEach(el =>)
foreach ($array as $number) {
    if ($number  % 2 == 0) {
        $somma = $somma + $number;
        // echo $somma . "\n";
        $contatore++;
        // echo $contatore . "\n";
    }
}

$media = $somma / $contatore;


$result = [];
foreach ($array as $number) {
    if ($number  % 2 == 0) {
        array_push($result, $number);
    }
}
var_dump($result);

$counter = count($result);
echo $counter;