<?php

namespace App;

class Square extends Rectangle implements ShapeInterface
{
    /**
     * Square constructor.
     * @param float $side
     */
    public function __construct(float $side)
    {
        parent::__construct($side, $side);
    }
}
