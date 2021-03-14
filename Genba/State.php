<?php

class State
{
    const PENDING = 'pending';
    const APPROVED = 'approved';
    const EXECUTED = 'executed';
    const FINISHED = 'finished';
    const REMANDED = 'remanded';
    const STOPPED = 'stopped';

    private const STATES = [
        self::PENDING,
        self::APPROVED,
        self::EXECUTED,
        self::FINISHED,
        self::REMANDED,
        self::STOPPED,
    ];

    private string $state_name;

    public function __construct(string $state_name)
    {
        if (!self::isValidStateName($state_name)) {
            throw new \http\Exception\InvalidArgumentException();
        }

        $this->state_name = $state_name;
    }

    /**
     * @return self[]
     */
    public static function allStates()
    {
        $states = [];

        foreach (self::STATES as $state_name) {
            $states[] = new self($state_name);
        }

        return $states;
    }

    private static function isValidStateName(string $state_name)
    {
        return in_array($state_name, self::STATES, true);
    }
}