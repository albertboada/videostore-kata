<?php

namespace video;

use webflix\FrequentRenterPointsStrategy\RegularMovieFrequentRenterPointsStrategy;
use webflix\PriceStrategy\RegularMoviePriceStrategy;

/**
 * Class RegularMovie
 */
class RegularMovie extends Movie
{
    /**
     * RegularMovie constructor.
     * @param $title
     */
    public function __construct($title)
    {
        parent::__construct(
            $title,
            new RegularMoviePriceStrategy,
            new RegularMovieFrequentRenterPointsStrategy
        );
    }
}
