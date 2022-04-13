<?php

namespace Codemahs\Mt5\Test;
use Codemahs\Mt5\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $sum = $calculator->add(1, 'a');
        $this->assertSame(3, $sum);
    }

}
