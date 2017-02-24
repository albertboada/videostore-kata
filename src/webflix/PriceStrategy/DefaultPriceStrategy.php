<?php

namespace webflix\PriceStrategy;

class DefaultPriceStrategy implements PriceStrategy
{
    /** @var float */
    private $pricePerDay;

    /** @var int */
    private $firstDays;

    /** @var float */
    private $priceFirstDays;

    public function __construct(
        float $pricePerDay,
        int $firstDays,
        float $priceFirstDays
    ) {
        $this->priceFirstDays = $priceFirstDays;
        $this->firstDays = $firstDays;
        $this->pricePerDay = $pricePerDay;
    }

    /**
     * @implement
     */
    public function price(int $days): float
    {
        $price = $this->priceFirstDays;

        if ($days > $this->firstDays) {
            $price += ($days - $this->firstDays) * $this->pricePerDay;
        }

        return $price;
    }
}