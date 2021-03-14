<?php

require_once __DIR__ . '/ChildFee.php';
require_once __DIR__ . '/AdultFee.php';
require_once __DIR__ . '/Reservation.php';

/**
 * @var Fee[]
 */
$fees = [new AdultFee(), new ChildFee()];
$reservation = new Reservation($fees);
echo $reservation->feeTotal()->getInt();