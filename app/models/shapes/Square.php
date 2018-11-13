<?php

namespace App\Models\Shapes;

/**
 * @implements IShape
 */
class Square extends AbstractShape implements IShape
{
    public function __construct($params)
    {
        parent::__construct($params);
    }

    public function draw()
    {
        // TODO: draw square

        return true;
    }

    public function getPoints()
    {
        // TODO: get points of square

        return [];
    }
}