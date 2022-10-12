<?php

declare(strict_types=1);

namespace AntraUzd\Shapes;

class Geometry
{
    public function area(ShapeInterface $shape): float
    {
        return $shape->area();
    }

    public function perimeter(ShapeInterface $shape): float
    {
        return $shape->perimeter();
    }
}
