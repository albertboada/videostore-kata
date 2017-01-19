<?php

namespace video;

use webflix\Entity\Order;

/**
 * Class RentalStatement
 */
class RentalStatement
{
    /** @var Order */
    private $order;

    /**
     * RentalStatement constructor.
     * @param string $customerName
     */
    public function __construct(string $customerName)
    {
        $this->order = new Order(new Customer($customerName));
    }

    /**
     * @param Rental $rental
     */
    public function addRental(Rental $rental)
    {
        $this->order->addRental($rental);
    }

    /**
     * @return string
     */
    public function makeRentalStatement()
    {
        return $this->makeHeader() . $this->makeRentalLines() . $this->makeSummary();
    }

    /**
     * @return string
     */
    private function makeHeader() : string
    {
        return "Rental Record for " . $this->name() . "\n";
    }

    /**
     * @return string
     */
    private function makeRentalLines(): string
    {
        $rentalLines = "";

        foreach ($this->rentals() as $rental) {
            $rentalLines .= $this->makeRentalLine($rental);
        }

        return $rentalLines;
    }

    /**
     * @param Rental $rental
     * @return string
     */
    private function makeRentalLine($rental) : string
    {
        return $this->formatRentalLine($rental, $rental->determineAmount());
    }

    /**
     * @param Rental $rental
     * @param float $thisAmount
     * @return string
     */
    private function formatRentalLine($rental, $thisAmount) : string
    {
        return "\t" . $rental->title() . "\t" . number_format($thisAmount, 1) . "\n";
    }

    /**
     * @return string
     */
    private function makeSummary() : string
    {
        return "You owed " . $this->amountOwed() . "\n" . "You earned " . $this->frequentRenterPoints() . " frequent renter points\n";
    }

    /**
     * Name accessor.
     * @return string
     */
    public function name(): string
    {
        return $this->order->customer()->name();
    }

    public function rentals(): array
    {
        return $this->order->rentals();
    }

    /**
     * Amount owed accessor.
     * @return float
     */
    public function amountOwed(): float
    {
        return $this->order->amountOwed();
    }

    /**
     * Frequent renter points accessor.
     * @return int
     */
    public function frequentRenterPoints(): int
    {
        return $this->order->frequentRenterPoints();
    }
}
