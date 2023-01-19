<?php
/*
5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)
*/

$cars = file_get_contents('./cars.json');
$deserialized = json_decode($cars, true);
var_dump($deserialized);