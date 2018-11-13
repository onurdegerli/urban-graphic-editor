<?php

namespace App\Models;

abstract class AbstractShapes
{
    /**
     * Class namespace prefix for Shape models.
     */
    const MODEL_NAMESPACE_PREFIX = 'App\Models\Shapes\\';

    /**
     * Factory method which creates Shape instance.
     *
     * @param string $type
     * @param array $params
     * @return object
     */
    abstract static function factory($type, $params);
}