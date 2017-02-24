<?php

namespace webflix\Order;

use video\Rental;

class OrderStatementTextFormatter implements OrderStatementFormatter
{
    /**
     * @implement
     */
    public function execute(Order $order)
    {
        return $this->makeHeader($order).$this->makeRentalLines($order).$this->makeSummary($order);
    }

    /**
     * @param Order $order
     * @return string
     */
    private function makeHeader(Order $order): string
    {
        return "Rental Record for {$order->customerName()}\n";
    }

    /**
     * @param Order $order
     * @return string
     */
    private function makeRentalLines(Order $order): string
    {
        $rentalLines = "";

        foreach ($order->rentals() as /** @var Rental **/$rental) {
            $rentalLines .= $this->makeRentalLine($rental);
        }

        return $rentalLines;
    }

    /**
     * @param Rental $rental
     * @return string
     */
    private function makeRentalLine(Rental $rental): string
    {
        return $this->formatRentalLine($rental, $rental->cost());
    }

    /**
     * @param Rental $rental
     * @param float $thisAmount
     * @return string
     */
    private function formatRentalLine(Rental $rental, float $thisAmount): string
    {
        $formattedAmount = number_format($thisAmount, 1);
        return "\t{$rental->title()}\t{$formattedAmount}\n";
    }

    /**
     * @param Order $order
     * @return string
     */
    private function makeSummary(Order $order): string
    {
        return "You owed {$order->amountOwed()}\nYou earned {$order->frequentRenterPoints()} frequent renter points\n";
    }
}