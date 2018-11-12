<?php

namespace App\Models\Shapes;

class Square implements IShape
{
    protected $params = array();

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function draw()
    {
        return 'Drawing square...';
    }

    public function getPoints()
    {
        return 'Points of square...';
    }

    public function getBinary()
    {
        return 'Square as binary...';
    }
}