<?php

namespace webflix\FrequentRenterPointsStrategy;

class MoreThanXDaysFrequentRenterPointsStrategy implements FrequentRenterPointsStrategy
{
    /** @var int */
    private $defaultPoints;

    /** @var int */
    private $firstDays;

    /** @var int */
    private $moreDaysPoints;

    public function __construct(
        int $defaultPoints,
        int $firstDays,
        int $moreDaysPoints
    ) {
        $this->defaultPoints = $defaultPoints;
        $this->firstDays = $firstDays;
        $this->moreDaysPoints = $moreDaysPoints;
    }

    /**
     * @implement
     */
    public function frequentRenterPoints(int $days): int
    {
        return ($days > $this->firstDays) ? $this->moreDaysPoints : $this->defaultPoints;
    }
}