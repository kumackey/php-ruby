<?php

require_once __DIR__ . '/ChildFee.php';
require_once __DIR__ . '/AdultFee.php';

class FeeFactory
{
    static function createFeeByName(string $type)
    {
        if ($type === 'child') {
            return new ChildFee();
        }

        if ($type === 'adult') {
            return new AdultFee();
        }

        throw new \http\Exception\InvalidArgumentException();
    }
}