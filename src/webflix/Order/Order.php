<?php

namespace webflix\Order;

use video\Customer;
use video\Rental;

class Order
{
    /** @var Customer */
    private $customer;

    /** @var Rental[] */
    private $rentals = [];

    /**
     * Order constructor.
     * @param Customer $customer
     */
    public function __construct(Customer $customer) {
        $this->customer = $customer;
    }

    /**
     * @return Customer
     */
    public function customer(): Customer {
        return $this->customer;
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