<?php

class FeeType
{
    const FEE_TYPE_CHILD = 'child';
    const FEE_TYPE_ADULT = 'adult';

    const FEE_TYPES = [
        self:: FEE_TYPE_CHILD,
        self::FEE_TYPE_ADULT,
    ];

    /**
     * @param $type string
     * @return bool
     */
    static public function isValidFeeType(string $type)
    {
        return in_array($type, self::FEE_TYPES, true);
    }
}