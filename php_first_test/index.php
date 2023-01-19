<?php
/*
1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)
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

2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)
   $numbers = [
       [1, 3, 5],
       [55, 87, 100],
       [12],
       [],
   ];

3.     Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
      Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai
      ir dalyvių sumokėta suma
      Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)

      Destination "Paris".
      Titles: "Romantic Paris", "Hidden Paris"
      Total: 99500
      ************
      Destination "New York"
      ...

   $holidays = [
       [
           'title' => 'Romantic Paris',
           'destination' => 'Paris',
           'price' => 1500,
           'tourists' => 55,
       ],
       [
           'title' => 'Amazing New York',
           'destination' => 'New York',
           'price' => 2699,
           'tourists' => 21,
       ],
       [
           'title' => 'Spectacular Sydey',
           'destination' => 'Sydey',
           'price' => 4130,
           'tourists' => 9,
       ],
       [
           'title' => 'Hidden Paris',
           'destination' => 'Paris',
           'price' => 1700,
           'tourists' => 10,
       ],
       [
           'title' => 'Emperors of the past',
           'destination' => 'Beijing',
           'price' => null,
           'tourists' => 10,
       ],
   ];

4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1.5 balas)

5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)

6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją juos priimtų ir
   juos sudaugintų tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas
   ne skaičius, reikia, kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
*/