<?php

namespace webflix\FrequentRenterPointsStrategy;

class NewReleaseFrequentRenterPointsStrategy extends MoreThanXDaysFrequentRenterPointsStrategy
{
    const DEFAULT_POINTS = 1;
    const FIRST_DAYS = 1;
    const MORE_DAYS_POINTS = 2;

    /**
     * @override
     */
    public function __construct()
    {
        parent::__construct(
            static::DEFAULT_POINTS,
            static::FIRST_DAYS,
            static::MORE_DAYS_POINTS
        );
    }
}