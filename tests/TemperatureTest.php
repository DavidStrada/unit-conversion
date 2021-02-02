<?php

namespace Davidstrada\UnitConversion\Tests;

use Davidstrada\UnitConversion\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_pounds()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();
        $this->assertEquals(212, $fahrenheit);
    }
}
