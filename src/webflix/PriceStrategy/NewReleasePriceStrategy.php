<?php

namespace webflix\PriceStrategy;

class NewReleasePriceStrategy implements PriceStrategy
{
    /**
     * @implement
     */
    public function price(int $days): float
    {
        return $days * 3.0;
    }
}