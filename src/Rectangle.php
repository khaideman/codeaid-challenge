<?php

namespace App;

class Rectangle extends GeometricShape implements ShapeInterface, PolygonInterface
{
    /**
     * @var float
     */
    protected $length;

    /**
     * @var float
     */
    protected $width;

    /**
     * Rectangle constructor.
     * @param float $length
     * @param float $width
     */
    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getPerimeter(): float
    {
        return 2 * ($this->length + $this->width);
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return $this->length * $this->width;
    }

    /**
     * @return int
     */
    public function getAngles(): int
    {
        return 4;
    }
}
