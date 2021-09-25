<?php

require_once 'calc_v1.php';

function is_over(int $unitPrice, int $quantity): bool
{
    $itemOrder = new ItemOrder($unitPrice, $quantity, new DateTimeImmutable());

    // また同じような処理を書いてる・・・
    if (5 <= $itemOrder->getQuantity() && 100 < $itemOrder->getUnitPrice()) {
        $discountedPrice = $itemOrder->getUnitPrice() - 20;
        $itemOrder->setUnitPrice($discountedPrice);
    }

    if (!$itemOrder->validates()) {
        return false;
    }

    $totalPrice = $itemOrder->getUnitPrice() * $itemOrder->getQuantity();
    if (3000 <= $totalPrice) {
        $totalPrice = $totalPrice - 300;
    }

    return 10000 <= $totalPrice;
}

// 仕様1: 合計額が10000円未満 (1000 - 20) * 10 - 300 = 9500 < 10000
assert(is_over(1000, 10) === false);

// 仕様2: 合計額が10000円 (1050 - 20) * 10 - 300 >= 10000
assert(is_over(1050, 10) === true);

echo 'all green' . PHP_EOL;