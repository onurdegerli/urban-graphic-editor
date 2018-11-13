<?php

namespace App\Models;

class Shapes extends AbstractShapes
{
    public static function factory($type, $params)
    {
        $model = self::MODEL_NAMESPACE_PREFIX . ucwords(strtolower($type));

        if (class_exists($model)) {
            return new $model($params);
        }

        throw new \Exception('Unrecognize shape!');
    }
}