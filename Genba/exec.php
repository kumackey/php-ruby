<?php

require_once __DIR__ . '/FeeFactory.php';
require_once __DIR__ . '/Reservation.php';

$fee1 = FeeFactory::createFeeByName('child');
$fee2 = FeeFactory::createFeeByName('adult');

/**
 * @var Fee[]
 */
$fees = [$fee1, $fee2];
$reservation = new Reservation($fees);
echo $reservation->feeTotal()->getInt();