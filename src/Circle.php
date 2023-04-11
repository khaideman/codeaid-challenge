<?php

namespace App;

class Circle extends GeometricShape implements ShapeInterface
{
    /**
     * @var float
     */
    protected $radius;

    /**
     * Circle constructor.
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getPerimeter(): float
    {
        return 2 * self::PI * $this->radius;
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return self::PI * pow($this->radius, 2);
    }
}
