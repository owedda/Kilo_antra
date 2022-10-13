<?php

declare(strict_types=1);

namespace AntraUzd\Shapes;

use AntraUzd\ShapeMathConstants;

class Rectangle implements ShapeInterface
{
    public function __construct(
        private readonly float $length,
        private readonly float $width
    ) {
    }

    public function area(): float
    {
        return $this->length * $this->width;
    }

    public function perimeter(): float
    {
        return $this->length * 2 + $this->width * 2;
    }
}
