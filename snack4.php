<?php
$numeri = [];

for ($i = 0; $i < 15;) {
    $numeroRndm = rand(1, 100);
    if (!in_array($numeroRndm, $numeri)) {
        $numeri[] = $numeroRndm;
        $i++;
    }
};

var_dump($numeri);
