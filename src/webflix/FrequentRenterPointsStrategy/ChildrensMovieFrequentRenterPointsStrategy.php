<?php

namespace webflix\FrequentRenterPointsStrategy;

class ChildrensMovieFrequentRenterPointsStrategy extends DefaultFrequentRenterPointsStrategy
{
    const POINTS = 1;

    /**
     * @override
     */
    public function __construct()
    {
        parent::__construct(
            static::POINTS
        );
    }
}