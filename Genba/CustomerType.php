<?php

class CustomerType
{
    /**
     * @var string
     */
    private $type_str;

    public function __construct($type_str)
    {
        $this->type_str = $type_str;
    }

    public function equal($type_str)
    {
        return $this->type_str === $type_str;
    }
}