<?php

namespace webflix\FrequentRenterPointsStrategy;

class RegularMovieFrequentRenterPointsStrategy implements FrequentRenterPointsStrategy
{
    /**
     * @implement
     */
    public function frequentRenterPoints(int $days): int
    {
        return 1;
    }
}