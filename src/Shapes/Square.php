<?php

declare(strict_types=1);

namespace AntraUzd\Shapes;

use AntraUzd\ShapeMathConstants;

class Square implements ShapeInterface
{
    public function __construct(
        private readonly float $border
    ) {
    }

    public function area(): float
    {
        return pow($this->border, 2);
    }

    public function perimeter(): float
    {
        return $this->border * 4;
    }
}
