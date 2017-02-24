<?php

namespace webflix\PriceStrategy;

interface PriceStrategy
{
    /**
     * @param int $days
     * @return float
     */
    public function price(int $days): float;
}