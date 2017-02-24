<?php

namespace video;

use webflix\FrequentRenterPointsStrategy\FrequentRenterPointsStrategy;
use webflix\PriceStrategy\PriceStrategy;

/**
 * Class Movie
 */
class Movie
{
    /** @var  string */
    private $title;

    /** @var PriceStrategy */
    private $priceStrategy;

    /** @var FrequentRenterPointsStrategy */
    private $frequentRenterPointsStrategy;

    /**
     * Movie constructor.
     * @param string $title
     * @param PriceStrategy $priceStrategy
     * @param FrequentRenterPointsStrategy $frequentRenterPointsStrategy
     */
    public function __construct(
        string $title,
        PriceStrategy $priceStrategy,
        FrequentRenterPointsStrategy $frequentRenterPointsStrategy
    ) {
        $this->title = $title;
        $this->priceStrategy = $priceStrategy;
        $this->frequentRenterPointsStrategy = $frequentRenterPointsStrategy;
    }

    /**
     * Title accessor.
     * @return string
     */
    public function title() : string
    {
        return $this->title;
    }

    /**
     * @return PriceStrategy
     */
    public function priceStrategy(): PriceStrategy
    {
        return $this->priceStrategy;
    }

    /**
     * @return FrequentRenterPointsStrategy
     */
    public function frequentRenterPointsStrategy(): FrequentRenterPointsStrategy
    {
        return $this->frequentRenterPointsStrategy;
    }
}
