<?php

namespace webflix\PriceStrategy;

class RegularMoviePriceStrategy implements PriceStrategy
{
    /**
     * @implement
     */
    public function price(int $days): float
    {
        $price = 2;

        if ($days > 2) {
            $price += ($days - 2) * 1.5;
        }
        return $price;

    }
}