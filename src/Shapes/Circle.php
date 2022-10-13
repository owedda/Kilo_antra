<?php

declare(strict_types=1);

namespace AntraUzd\Shapes;

use AntraUzd\ShapeMathConstants;

class Circle implements ShapeInterface
{
    public function __construct(
        private readonly float $radius
    ) {
    }

    public function area(): float
    {
        return pow($this->radius, 2) * ShapeMathConstants::PI;
    }

    public function perimeter(): float
    {
        return 2 * ShapeMathConstants::PI * $this->radius;
    }
}
