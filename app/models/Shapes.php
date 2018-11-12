<?php

namespace App\Models;

class Shapes 
{
    const MODEL_NAMESPACE_PREFIX = 'App\Models\Shapes\\';

    public static function factory($type, $dimension)
    {
        $model = self::MODEL_NAMESPACE_PREFIX . ucwords(strtolower($type));

        if (class_exists($model)) {
            return new $model($dimension);
        }

        throw new \Exception('Unrecognize shape');
    }
}