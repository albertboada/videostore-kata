<?php

namespace video;

use webflix\FrequentRenterPointsStrategy\NewReleaseFrequentRenterPointsStrategy;
use webflix\PriceStrategy\NewReleasePriceStrategy;

/**
 * Class NewReleaseMovie
 */
class NewReleaseMovie extends Movie
{
    /**
     * NewReleaseMovie constructor.
     * @param $title
     */
    public function __construct($title)
    {
        parent::__construct(
            $title,
            new NewReleasePriceStrategy,
            new NewReleaseFrequentRenterPointsStrategy
        );
    }
}
