<?php

namespace video;

use webflix\Order\Order;
use webflix\Order\OrderStatementTextFormatter;

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
        $formatter = new OrderStatementTextFormatter();
        return $formatter->execute($this->order);
    }

    /**
     * Name accessor.
     * @return string
     */
    public function name(): string
    {
        return $this->order->customerName();
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
