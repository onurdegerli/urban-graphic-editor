<?php

namespace App\Models\Shapes;

interface IShape
{
    public function draw();

    public function getPoints();

    public function getBinary();
}