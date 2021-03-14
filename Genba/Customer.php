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

    /**
     * @return bool
     */
    private function isChild()
    {
        return $this->type->equal('child');
    }

    private function childFee() {
        return Fee::BASE_FEE * 0.5;
    }

    private function adultFee() {
        return Fee::BASE_FEE;
    }


    public function fee() {
        if($this->isChild()) {
            return $this->childFee();
        }

        return $this->adultFee();
    }
}