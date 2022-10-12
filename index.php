<?php

declare(strict_types=1);

require "vendor/autoload.php";

use AntraUzd\Shapes\Circle;
use AntraUzd\Shapes\Geometry;
use AntraUzd\Shapes\Rectangle;
use AntraUzd\Shapes\Rhombus;
use AntraUzd\Shapes\Square;

$circle = new Circle(6.5);
//$square = new Square(5);
//$rectangle = new Rectangle(2, 5);
//$rhombus = new Rhombus(2, 5);

$geometry = new Geometry();

$area = $geometry->area($circle);
$perimeter = $geometry->perimeter($circle);

echo "Area: {$area}";
echo "\n";
echo "Perimeter: {$perimeter}";
