<?php

require_once 'calc_v3.php';

/**
 * @param int $unitPrice
 * @param int $quantity
 * @return bool
 */
function is_over(int $unitPrice, int $quantity): bool
{
    $itemOrder = new ItemOrder($unitPrice, $quantity, new DateTimeImmutable());

    return 10000 <= $itemOrder->totalPrice();
}

// 仕様1: 合計額が10000円未満 (1000 - 20) * 10 - 300 = 9500 < 10000
assert(is_over(1000, 10) === false);

// 仕様2: 合計額が10000円 (1050 - 20) * 10 - 300 >= 10000
assert(is_over(1050, 10) === true);

echo 'all green' . PHP_EOL;