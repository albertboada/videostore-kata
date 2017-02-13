<?php

namespace video;

/**
 * Class Rental
 */
class Rental
{
    /** @var  Movie */
    private $movie;

    /** @var  int */
    private $daysRented;

    /** @var float */
    private $cost = 0.0;

    /** @var int */
    private $frequentRenterPoints = 0;

    /**
     * Rental constructor.
     * @param Movie $movie
     * @param int $daysRented
     */
    public function __construct($movie, $daysRented)
    {
        $this->movie = $movie;
        $this->daysRented = $daysRented;
        $this->refreshCost();
        $this->refreshFrequentRenterPoints();
    }

    /**
     * Movie's title accessor.
     * @return string
     */
    public function title() : string
    {
        return $this->movie->title();
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return $this->cost;
    }

    /**
     * @return int
     */
    public function frequentRenterPoints(): int
    {
        return $this->frequentRenterPoints;
    }

    protected function refreshCost()
    {
        $strategy = $this->movie->priceStrategy();

        $this->cost = $strategy->price($this->daysRented);
    }

    protected function refreshFrequentRenterPoints()
    {
        $strategy = $this->movie->frequentRenterPointsStrategy();

        $this->frequentRenterPoints = $strategy->frequentRenterPoints($this->daysRented);
    }
}
