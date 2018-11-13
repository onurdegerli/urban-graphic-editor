<?php

namespace App\Models\Shapes;

class AbstractShape
{
    protected $params = [
        'color' => 'black',
        'border' => 1,
        'size' => 1,
    ];

    public function __construct($params)
    {
        $this->params = array_merge($this->params, $params);
    }

    public function getBinary()
    {
        header('Content-Type: image/png');
        echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=');
    }
}