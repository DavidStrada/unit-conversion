<?php

namespace Davidstrada\UnitConversion;

class Weight
{
    private $kilograms;

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs() : float
    {
        return $this->kilograms * 2.204623;
    }

    public static function fromKilograms(float $kilograms) : self
    {
        return new static($kilograms);
    }
}
