<?php

namespace webflix\FrequentRenterPointsStrategy;

class ChildrensMovieFrequentRenterPointsStrategy implements FrequentRenterPointsStrategy
{
    /**
     * @implement
     */
    public function frequentRenterPoints(int $days): int
    {
        return 1;
    }
}