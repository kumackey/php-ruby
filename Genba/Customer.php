<?php

class Customer
{
    /**
     * @var CustomerType
     */
    private $type;

    public function __construct(CustomerType $type)
    {
        $this->type = $type;
    }
}