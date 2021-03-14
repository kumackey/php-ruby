<?php

require_once __DIR__ . '/ChildFee.php';
require_once __DIR__ . '/AdultFee.php';
require_once __DIR__ . '/FeeType.php';

class FeeFactory
{
    /**
     * @param string $type
     * @return Fee
     */
    static function createFeeByName(string $type)
    {
        $type = new FeeType($type);

        if ($type->isChild()) {
            return new ChildFee();
        }

        if ($type->isAdult()) {
            return new AdultFee();
        }

        throw new \http\Exception\InvalidArgumentException();
    }
}