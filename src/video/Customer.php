<?php

namespace video;

/**
 * Class Customer
 */
class Customer
{
    /** @var string */
    private $name;

    /** @var Rental[] */
    private $rentals = [];

    /**
     * Customer constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Name accessor.
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return Rental[]
     */
    public function rentals(): array
    {
        return $this->rentals;
    }
}
