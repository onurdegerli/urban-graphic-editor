<?php

require_once __DIR__ . '/vendor/autoload.php';

$shapes = [
    ['type' => 'circle', 'params' => []],
    ['type' => 'square', 'params' => []],
];

foreach ($shapes as $shape) {
    $shape = \App\Models\Shapes::factory($shape['type'], $shape['params']);
    echo $shape->draw();
    echo "\n";
    echo $shape->getPoints();
    echo "\n";
    echo $shape->getBinary();
    echo "\n";
    echo "\n";
}