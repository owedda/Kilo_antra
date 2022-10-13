<?php

declare(strict_types=1);

namespace AntraUzd\Shapes;

use AntraUzd\ShapeMathConstants;

class Rhombus implements ShapeInterface
{
    public function __construct(
        private readonly float $base,
        private readonly float $height
    ) {
    }

    public function area(): float
    {
        return $this->base * $this->height;
    }

    public function perimeter(): float
    {
        return $this->base * 4;
    }
}
