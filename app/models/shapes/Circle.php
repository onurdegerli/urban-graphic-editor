<?php

namespace App\Models\Shapes;

class Circle implements IShape
{
    protected $params = array();

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function draw()
    {
        return 'Drawing circle...';
    }

    public function getPoints()
    {
        return 'Points of circle...';
    }

    public function getBinary()
    {
        return 'Circle as binary...';
    }
}