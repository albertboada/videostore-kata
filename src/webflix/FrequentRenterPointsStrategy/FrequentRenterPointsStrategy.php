<?php

namespace webflix\FrequentRenterPointsStrategy;

interface FrequentRenterPointsStrategy
{
    /**
     * @param int $days
     * @return int
     */
    public function frequentRenterPoints(int $days): int;
}