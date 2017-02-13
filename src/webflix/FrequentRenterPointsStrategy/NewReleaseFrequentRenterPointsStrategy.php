<?php

namespace webflix\FrequentRenterPointsStrategy;

class NewReleaseFrequentRenterPointsStrategy implements FrequentRenterPointsStrategy
{
    /**
     * @implement
     */
    public function frequentRenterPoints(int $days): int
    {
        return ($days > 1) ? 2 : 1;
    }
}