<?php

require_once __DIR__ . '/CustomerType.php';

$type = new CustomerType('child');

if ($type->equal('child')) {
    echo 'fee';
}