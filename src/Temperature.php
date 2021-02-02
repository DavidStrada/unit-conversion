<?php

namespace Davidstrada\UnitConversion;

class Temperature
{
    private float $celsius;

    public function __construct($celsius)
    {
        $this->celsius = $celsius;
    }

    public function toFahrenheit() : float
    {
        return ($this->celsius * 1.8) + 32;
    }

    public static function fromCelsius(float $celsius) : self
    {
        return new static($celsius);
    }
}
