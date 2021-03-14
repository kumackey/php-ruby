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
        if (!FeeType::isValidFeeType($type)) {
            throw new \http\Exception\InvalidArgumentException();
        }

        if ($type === 'child') {
            return new ChildFee();
        }

        if ($type === 'adult') {
            return new AdultFee();
        }

        throw new \http\Exception\InvalidArgumentException();
    }
}