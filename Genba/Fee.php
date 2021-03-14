<?php

interface Fee
{
    public const BASE_FEE = 100;

    /**
     * @return Yen
     */
    public function yen();

    /**
     * @return string
     */
    public function label();
}