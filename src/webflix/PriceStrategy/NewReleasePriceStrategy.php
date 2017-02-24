<?php

namespace webflix\PriceStrategy;

class NewReleasePriceStrategy extends PerDayPriceStrategy
{
    const PRICE_PER_DAY = 3.0;

    public function __construct()
    {
        parent::__construct(
            static::PRICE_PER_DAY
        );
    }
}