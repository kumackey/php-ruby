<?php

class Customer
{
    private PersonName $person_name;
    private Address $address;
    private ContactMethod $contact_method;
    private CustomerType $type;

    public function __construct(CustomerType $type)
    {
        $this->type = $type;
    }

    private function isChild(): bool
    {
        return $this->type->equal('child');
    }

    private function childFee(): string
    {
        return Fee::BASE_FEE * 0.5;
    }

    private function adultFee(): string
    {
        return Fee::BASE_FEE;
    }

    public function fee(): string
    {
        if ($this->isChild()) {
            return $this->childFee();
        }

        return $this->adultFee();
    }
}