<?php

class Customers
{
    /**
     * @var Customer[]
     */
    private $customers;

    /**
     * Customers constructor.
     * @param Customer[] $customers
     */
    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    public function getList()
    {
        return $this->customers;
    }
}