<?php

namespace webflix\PriceStrategy;

class RegularMoviePriceStrategy extends DefaultPriceStrategy
{
    const PRICE_PER_DAY = 1.5;
    const FIRST_DAYS = 2;
    const PRICE_FIRST_DAYS = 2;

    public function __construct()
    {
        parent::__construct(
            static::PRICE_PER_DAY,
            static::FIRST_DAYS,
            static::PRICE_FIRST_DAYS
        );
    }
}