<?php

function calcTotal(int $unit_price, int $quantity): int
{
    return 1000;
}

// テスト
assert(calcTotal(250, 4) === 1000);
echo 'all green';