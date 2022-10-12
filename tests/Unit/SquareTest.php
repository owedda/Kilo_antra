<?php

namespace AntraUzd\Tests\Unit;

use AntraUzd\Shapes\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    private Square $square;

    protected function setUp(): void
    {
        parent::setUp();

        $this->square = new Square(5.5);
    }

    public function testAreaCorrectValues()
    {
        $answer = $this->square->area();
        self::assertEquals(30.25, $answer);
    }

    public function testPerimeterCorrectValues()
    {
        $answer = $this->square->perimeter();
        self::assertEquals(22, $answer);
    }
}
