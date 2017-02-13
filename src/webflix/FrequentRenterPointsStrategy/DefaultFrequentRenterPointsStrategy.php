<?php

namespace webflix\FrequentRenterPointsStrategy;

class DefaultFrequentRenterPointsStrategy implements FrequentRenterPointsStrategy
{
    /** @var int */
    private $points;

    public function __construct(int $points)
    {
        $this->points = $points;
    }

    /**
     * @implement
     */
    public function frequentRenterPoints(int $days): int
    {
        return $this->points;
    }
}