<?php

//2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)

function exercise2(): int {

    $numbers = [
        [1, 3, 5],
        [55, 87, 100],
        [12],
        [],
    ];
   $result = 1;

   foreach ($numbers as $number) {
       foreach ($number as $value) {
           $result *= $value;
       }
   }
    return $result;
}
var_dump(exercise2());