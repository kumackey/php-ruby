<?php

class Reservation
{
    /**
     * @var Fee[]
     */
    private array $fees;

    /**
     * Reservation constructor.
     * @param Fee[] $fees
     */
    public function __construct(array $fees)
    {
        $this->fees = $fees;
    }

    /**
     * @param Fee $fee
     * @return Reservation
     */
    public function addFee(Fee $fee)
    {
        $new_fees = array_merge($this->fees, [$fee]);
        return new self($new_fees);
    }

    /**
     * @return Yen
     */
    public function feeTotal()
    {
        $total = new Yen();

        foreach ($this->fees as $fee) {
            $total = $total->addYen($fee->yen());
        }

        return $total;
    }
}