<?php

require_once __DIR__ . '/Fee.php';
require_once __DIR__ . '/Yen.php';

class ChildFee implements Fee
{
    /**
     * @return Yen
     */
    public function yen()
    {
        return new Yen(Fee::BASE_FEE * 0.5);
    }

    /**
     * @return string
     */
    public function label()
    {
        return '子供';
    }
}