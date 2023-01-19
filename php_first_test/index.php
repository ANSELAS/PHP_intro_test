<?php


//1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)

function exercise1(): int {
    $numbers = [
        15,
        55,
        66,
        91,
        100,
        995,
        17,
        550,
    ];
    $result = 0;
    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            $result += $number;
        }
    }
    return $result;
}
var_dump(exercise1());
