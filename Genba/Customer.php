<?php

class Customer
{
    const BASEFEE = 100;
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
        return self::BASEFEE * 0.5;
    }

    private function adultFee() {
        return self::BASEFEE;
    }


    public function fee() {
        if($this->isChild()) {
            return $this->childFee();
        }

        return $this->adultFee();
    }
}