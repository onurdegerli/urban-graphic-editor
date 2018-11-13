<?php

namespace App\Models\Shapes;

/**
 * @implements IShape
 */
class Circle extends AbstractShape implements IShape
{
    public function __construct($params)
    {
        parent::__construct($params);
    }

    public function draw()
    {
        // TODO: draw circle

        return true;
    }

    public function getPoints()
    {
        // TODO: get points of circle

        return [];
    }
}