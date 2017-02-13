<?php

namespace webflix\PriceStrategy;

class PerDayPriceStrategy extends DefaultPriceStrategy
{
    public function __construct(float $pricePerDay)
    {
        parent::__construct($pricePerDay, 0, 0);
    }
}