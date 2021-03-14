<?php

class StateTransitions
{
    /**
     * @param string $from
     * @param string $to
     * @return bool
     */
    public static function canTransit(string $from, string $to)
    {
        return in_array($to, self::allowedState()[$from], true);
    }

    /**
     * @return string[][]
     */
    public static function allowedState()
    {
        return [
            State::PENDING => [
                State::APPROVED, State::REMANDED
            ],
            State::APPROVED => [
                State::EXECUTED, State::FINISHED
            ],
            State::EXECUTED => [
                State::STOPPED, State::FINISHED
            ],
            State::REMANDED => [
                State::PENDING, State::FINISHED
            ],
            State::STOPPED => [
                State::EXECUTED, State::FINISHED
            ],
        ];
    }
}