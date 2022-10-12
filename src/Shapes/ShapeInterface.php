<?php

declare(strict_types=1);

namespace AntraUzd\Shapes;

interface ShapeInterface
{
    public function area(): float;
    public function perimeter(): float;
}
