<?php

namespace webflix\Entity;

use video\Rental;

class Order
{
    /** @var string */
    private $customerName;

    /** @var Rental[] */
    private $rentals = [];

    /**
     * Order constructor.
     * @param string $customerName
     */
    public function __construct(string $customerName) {
        $this->customerName = $customerName;
    }

    /**
     * @return string
     */
    public function customerName(): string {
        return $this->customerName;
    }

    /**
     * @return Rental[]
     */
    public function rentals(): array {
        return $this->rentals;
    }

    /**
     * @param Rental $rental
     */
    public function addRental(Rental $rental) {
        $this->rentals []= $rental;
    }

    /**
     * @return float
     */
    public function amountOwed(): float {
        $totalAmount = 0;
        foreach ($this->rentals() as /** @var Rental **/$rental) {
            $totalAmount += $rental->determineAmount();
        }
        return $totalAmount;
    }

    /**
     * @return int
     */
    public function frequentRenterPoints(): int {
        $frequentRenterPoints = 0;
        foreach ($this->rentals() as /** @var Rental **/ $rental) {
            $frequentRenterPoints += $rental->determineFrequentRenterPoints();
        }
        return $frequentRenterPoints;
    }
}