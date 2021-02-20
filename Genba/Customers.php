<?php

class Customers
{
    /**
     * @var Customer[]
     */
    private array $customers;

    /**
     * Customers constructor.
     * @param Customer[] $customers
     */
    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    /**
     * @param Customer $customer
     * @return Customers
     */
    public function add(Customer $customer)
    {
        $customers = array_merge($this->customers, $customer);
        return new self($customers);
    }

    public function asList() {
        return $this->customers;
    }
}