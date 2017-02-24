<?php

namespace webflix\PriceStrategy;

class ChildrensMoviePriceStrategy extends DefaultPriceStrategy
{
    const PRICE_PER_DAY = 1.5;
    const FIRST_DAYS = 3;
    const PRICE_FIRST_DAYS = 1.5;

    public function __construct()
    {
        parent::__construct(
            static::PRICE_PER_DAY,
            static::FIRST_DAYS,
            static::PRICE_FIRST_DAYS
        );
    }
}