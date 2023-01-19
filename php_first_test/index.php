<?php
/*
3.    Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
      Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai
      ir dalyvių sumokėta suma. Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)

      Destination "Paris".
      Titles: "Romantic Paris", "Hidden Paris"
      Total: 99500
      ************
      Destination "New York"
     ...
*/

function exercise3(): void {
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
            'title' => 'Spectacular Sydney',
            'destination' => 'Sydney',
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
    $holidaySummary = [];

    foreach ($holidays as $holiday) {
        if ($holiday['price'] === null) {
            continue;
        }
        $destination = $holiday['destination'];
        if (!isset($holidaySummary[$destination])) {
            $holidaySummary[$destination] = [
                'destination' => $destination,
                'titles' => [],
                'total' => 0,
            ];
        }
        $holidaySummary[$destination]['titles'][] = $holiday['title'];
        $holidaySummary[$destination]['total'] += $holiday['price'] * $holiday['tourists'];
    }

    foreach ($holidaySummary as $summary) {
        echo "Destination: " . $summary['destination'] . PHP_EOL .
            "Titles: " . implode(', ', $summary['titles']). PHP_EOL .
            "Total: " . $summary['total'] . PHP_EOL .
            '************' . PHP_EOL;
    }
}
exercise3();