<?php
$partite = [
    [
        'casa' => 'Bulls',
        'risCasa' => '120',
        'ospiti' => 'Spurs',
        'risOspiti' => '109',
    ],
    [
        'casa' => 'Clippers',
        'risCasa' => '119',
        'ospiti' => 'Warriors',
        'risOspiti' => '104',
    ],
    [
        'casa' => 'Jaz',
        'risCasa' => '135',
        'ospiti' => 'Rockets',
        'risOspiti' => '101',
    ],
    [
        'casa' => 'Nuggets',
        'risCasa' => '121',
        'ospiti' => 'Magic',
        'risOspiti' => '111',
    ],
    [
        'casa' => 'Bucks',
        'risCasa' => '107',
        'ospiti' => 'Trail Blazers',
        'risOspiti' => '122',
    ],
    [
        'casa' => 'Pellicans',
        'risCasa' => '120',
        'ospiti' => 'Raptors',
        'risOspiti' => '90',
    ],
];

for ($i = 0; $i < count($partite); $i++) {
    echo ('<div>' . $partite[$i]['casa'] . $partite[$i]['risCasa'] . '|' . $partite[$i]['ospiti'] . $partite[$i]['risOspiti'] . '     ---     ' . $partite[$i]['risOspiti'] . '   -    ' . $partite[$i]['risCasa']);
};
