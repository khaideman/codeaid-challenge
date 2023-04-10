<?php

// /////////////////////////////////////////////////////////////////////////////
// PLEASE DO NOT RENAME OR REMOVE ANY OF THE CODE BELOW. 
// THE INTERFACE FOR THIS FILE SHOULD NOT BE CHANGED 
// YOU CAN ADD YOUR CODE TO THIS FILE TO EXTEND THE FEATURES TO USE THEM IN YOUR WORK.
// /////////////////////////////////////////////////////////////////////////////

namespace App;

use App\Exceptions\UnsupportedShapeException;
use App\Exceptions\WrongParamCountException;

/**
 * Class ShapeFactory
 * @package App
 */
class ShapeFactory
{
    /**
     * Creates a specific GeometricShape object from the given attributes.
     *
     * Usage examples:
     *     ShapeFactory::createShape("Circle", 4)
     *     ShapeFactory::createShape("Rectangle", [3, 5])
     *
     * @param string $shape
     * @param array $params
     * @return mixed
     * @throws WrongParamCountException|UnsupportedShapeException
     */
    public static function createShape(string $shape, array $params = [])
    {
        // ToDo
    }
}