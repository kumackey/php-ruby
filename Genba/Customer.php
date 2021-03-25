<?php

class Customer
{
    private string $first_name;
    private string $last_name;
    private string $postal_code;
    private string $city;
    private string $address;
    private string $telephone;
    private string $mail_address;
    private bool $telephone_not_preferred;

    /**
     * @var CustomerType
     */
    private $type;

    public function __construct(CustomerType $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * @return bool
     */
    private function isChild()
    {
        return $this->type->equal('child');
    }

    private function childFee()
    {
        return Fee::BASE_FEE * 0.5;
    }

    private function adultFee()
    {
        return Fee::BASE_FEE;
    }


    public function fee()
    {
        if ($this->isChild()) {
            return $this->childFee();
        }

        return $this->adultFee();
    }
}