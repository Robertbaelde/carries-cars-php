<?php

namespace CarriesCarsPhp\PricingEngine;

final class Duration
{
    public function __construct(public readonly int $length)
    {
        if($this->length < 1) {
            throw new \InvalidArgumentException('Sorry, Duration should be at least one minute.');
        }
    }
    public static function ofMinutes(int $length): self
    {
        return new self($length);
    }

}
