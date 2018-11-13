<?php

namespace App\Models\Shapes;

interface IShape
{
    /**
     * Draws a shape.
     * 
     * @return boolean
     */
    public function draw();

    /**
     * Gets points of shape.
     * 
     * @return array
     */
    public function getPoints();

    /**
     * Gets shape as binary.
     * 
     * * @return string
     */
    public function getBinary();
}