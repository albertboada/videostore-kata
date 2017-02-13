<?php

namespace webflix\PriceStrategy;

class ChildrensMoviePriceStrategy implements PriceStrategy
{
    /**
     * @implement
     */
    public function price(int $days): float
    {
        $price = 1.5;

        if ($days > 3) {
            $price += ($days - 3) * 1.5;
        }

        return $price;
    }
}