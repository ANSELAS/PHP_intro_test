<?php
/*
6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją juos priimtų ir juos sudaugintų
tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad
terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
*/

function exercise6(): void {
    $firstNumber = readline('Enter first number: ');
    $secondNumber = readline('Enter second number: ');

    if (!is_numeric($firstNumber) || !is_numeric($secondNumber)) {
        echo 'ERROR 404: PLEASE ENTER A NUMBER!';
    } else {
        $multiply = $firstNumber * $secondNumber;
        $result = pow($multiply, 2);
        echo $firstNumber . " times " . $secondNumber . " and then raised by 2 is " . $result;
    }
}
exercise6();