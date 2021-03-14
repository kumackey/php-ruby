<?php

require_once __DIR__ . '/CustomerType.php';
require_once __DIR__ . '/Customer.php';

$type = new CustomerType('child');
$customer = new Customer($type);

echo $customer->fee();