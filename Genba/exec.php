<?php

require_once __DIR__ . '/ChildFee.php';
require_once __DIR__ . '/AdultFee.php';
require_once __DIR__ . '/Charge.php';

/**
 * @var Fee[]
 */
$fees = [new AdultFee(), new ChildFee()];

foreach ($fees as $fee) {
    $charge = new Charge($fee);
    echo $charge->yen()->getInt() . PHP_EOL;
}