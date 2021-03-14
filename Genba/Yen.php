<?php

class Yen
{
    private int $yen;

    public function __construct(int $yen = 0)
    {
        $this->yen = $yen;
    }

    /**
     * @return int
     */
    public function getInt()
    {
        return $this->yen;
    }

    /**
     * @param Yen $yen
     * @return Yen
     */
    public function addYen(Yen $yen)
    {
        return new self($this->yen + $yen->getInt());
    }
}