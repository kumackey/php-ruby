<?php

require_once __DIR__ . '/Fee.php';
require_once __DIR__ . '/Yen.php';

class AdultFee implements Fee
{
    public function __construct()
    {
    }

    /**
     * @return Yen
     */
    public function yen()
    {
        return new Yen(Fee::BASE_FEE);
    }

    /**
     * @return string
     */
    public function label()
    {
        return '大人';
    }
}