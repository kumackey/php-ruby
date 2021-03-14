<?php

class Yen
{
    private int $yen;

    public function __construct(int $yen)
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
}