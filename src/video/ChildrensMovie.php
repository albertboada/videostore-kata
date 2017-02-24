<?php

namespace video;

use webflix\FrequentRenterPointsStrategy\ChildrensMovieFrequentRenterPointsStrategy;
use webflix\PriceStrategy\ChildrensMoviePriceStrategy;

/**
 * Class ChildrensMovie
 */
class ChildrensMovie extends Movie
{
    /**
     * ChildrensMovie constructor.
     * @param $title
     */
    public function __construct($title)
    {
        parent::__construct(
            $title,
            new ChildrensMoviePriceStrategy,
            new ChildrensMovieFrequentRenterPointsStrategy
        );
    }
}
