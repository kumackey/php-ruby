<?php

/**
 * @param int $unitPrice
 * @param int $quantity
 * @return int エラーの場合は0を返す
 */
function calcTotalPrice(int $unitPrice, int $quantity): int
{
    $itemOrder = new ItemOrder($unitPrice, $quantity, new DateTimeImmutable());

    $itemOrderRepository = new ItemOrderRepository();
    if (!$itemOrderRepository->persist($itemOrder)) {
        return 0;
    }

    return $itemOrder->totalPrice();
}

// 仕様1: 単価*個数が返ってくること
assert(calcTotalPrice(200, 4) === 800);

// 仕様2: 個数が5個以上なら単価は20円引きとなること
assert(calcTotalPrice(200, 5) === 900);

// バグ: 合計額がマイナスになる!?
echo calcTotalPrice(15, 10) . PHP_EOL;

// 仕様3: 単価が100円以下のときには割引しないこと
assert(calcTotalPrice(100, 5) === 500);

// 仕様4: 合計額が3000円以上のときには合計額は300円引きとなること
assert(calcTotalPrice(1000, 4) === 3700);

echo 'all green';


class ItemOrder
{
    private int $unitPrice;

    private int $quantity;

    private DateTimeImmutable $orderedAt;

    /**
     * @param int $unitPrice
     * @param int $quantity
     * @param DateTimeImmutable $orderedAt
     */
    public function __construct(int $unitPrice, int $quantity, DateTimeImmutable $orderedAt)
    {
        if (5 <= $quantity && 100 < $unitPrice) {
            $unitPrice = $unitPrice - 20;
        }

        $this->unitPrice = $unitPrice;
        $this->quantity = $quantity;
        $this->orderedAt = $orderedAt;
    }

    public function getUnitPrice(): int
    {
        return $this->unitPrice;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getOrderedAt(): DateTimeImmutable
    {
        return $this->orderedAt;
    }

    public function totalPrice(): int
    {
        $totalPrice = $this->unitPrice * $this->quantity;
        if ($totalPrice >= 3000) {
            $totalPrice = $totalPrice - 300;
        }

        return $totalPrice;
    }
}

class ItemOrderRepository
{
    public function persist(ItemOrder $itemOrder): bool
    {
        $params = [
            'unit_price' => $itemOrder->getUnitPrice(),
            'quantity' => $itemOrder->getQuantity(),
            'ordered_at' => $itemOrder->getOrderedAt()->getTimestamp(),
        ];
        // アイテムオーダーをDBとかに保存する処理が書かれてるとします

        return true;
    }
}