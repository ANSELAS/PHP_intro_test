<?php
/*
4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1.5 balas)
*/

function exercise4(): void {
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

    $newArray = [];
    foreach ($holidaySummary as $newSummary) {
        $newSummary = [
            'Destination' => $newSummary['destination'],
            'Title' => $newSummary['titles'],
            'Price' => $newSummary['total']
        ];
        $newArray[] = $newSummary;
    }
    $file = './holiday_list.json';
    $serialized = json_encode($newArray, JSON_PRETTY_PRINT);
    file_put_contents($file, $serialized);
};
exercise4();