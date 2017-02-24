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

    /** @var float */
    private $amountOwed = 0.0;

    /** @var int */
    private $frequentRenterPoints = 0;

    /**
     * Order constructor.
     * @param Customer $customer
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return Customer
     */
    public function customer(): Customer
    {
        return $this->customer;
    }

    /**
     * @return string
     */
    public function customerName(): string
    {
        return $this->customer->name();
    }

    /**
     * @return Rental[]
     */
    public function rentals(): array
    {
        return $this->rentals;
    }

    /**
     * @param Rental $rental
     */
    public function addRental(Rental $rental)
    {
        $this->rentals []= $rental;

        $this->refreshTotals();
    }

    /**
     * @return float
     */
    public function amountOwed(): float
    {
        return $this->amountOwed;
    }

    /**
     * @return int
     */
    public function frequentRenterPoints(): int
    {
        return $this->frequentRenterPoints;
    }

    protected function refreshTotals()
    {
        $this->refreshAmountOwed();
        $this->refreshFrequentRenterPoints();
    }

    protected function refreshAmountOwed()
    {
        $this->amountOwed = static::calculateAmountOwed($this->rentals());
    }

    protected function refreshFrequentRenterPoints()
    {
        $this->frequentRenterPoints = static::calculateFrequentRenterPoints($this->rentals());
    }

    /**
     * @param Rental[] $rentals
     * @return float
     */
    protected static function calculateAmountOwed(array $rentals): float
    {
        $totalAmount = 0;
        foreach ($rentals as $rental) {
            $totalAmount += $rental->cost();
        }
        return $totalAmount;
    }

    /**
     * @param Rental[] $rentals
     * @return int
     */
    protected static function calculateFrequentRenterPoints(array $rentals): int
    {
        $frequentRenterPoints = 0;
        foreach ($rentals as $rental) {
            $frequentRenterPoints += $rental->frequentRenterPoints();
        }
        return $frequentRenterPoints;
    }
}