<?php

class FeeType
{
    private const FEE_TYPE_CHILD = 'child';
    private const FEE_TYPE_ADULT = 'adult';

    private const FEE_TYPES = [
        self:: FEE_TYPE_CHILD,
        self::FEE_TYPE_ADULT,
    ];

    /**
     * @var string
     */
    private string $type_name;

    /**
     * FeeType constructor.
     */
    public function __construct(string $type_name)
    {
        if (!self::isValidFeeType($type_name)) {
            throw new \http\Exception\InvalidArgumentException();
        }

        $this->type_name = $type_name;
    }

    /**
     * @return bool
     */
    public function isChild()
    {
        return $this->type_name === self::FEE_TYPE_CHILD;
    }

    /**
     * @return bool
     */
    public function isAdult()
    {
        return $this->type_name === self::FEE_TYPE_ADULT;
    }

    /**
     * @param $type string
     * @return bool
     */
    static public function isValidFeeType(string $type)
    {
        return in_array($type, self::FEE_TYPES, true);
    }
}