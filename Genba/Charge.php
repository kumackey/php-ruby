<?php

class Charge
{
    /**
     * @var Fee
     */
    private Fee $fee;

    /**
     * Charge constructor.
     * @param Fee $fee
     */
    public function __construct(Fee $fee)
    {
        $this->fee = $fee;
    }

    /**
     * @return Yen
     */
    public function yen()
    {
        return $this->fee->yen();
    }
}