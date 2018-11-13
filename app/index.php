<?php

require_once __DIR__ . '/vendor/autoload.php';

$shapes = [
    ['type' => 'circle', 'params' => ['color' => 'red', 'border' => 1, 'size' => 2]],
    ['type' => 'square', 'params' => ['color' => 'black', 'border' => 2, 'size' => 3]],
];

foreach ($shapes as $shape) {
    $shape = \App\Models\Shapes::factory($shape['type'], $shape['params']);
    $shape->draw();
    print_r($shape->getPoints());
    // echo $shape->getBinary();
}