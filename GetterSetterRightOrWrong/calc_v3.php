<?php

function calc_total_price(int $unitPrice, int $quantity): int
{
    $itemOrder = new ItemOrder($unitPrice, $quantity, new DateTimeImmutable());

    $itemOrderRepository = new ItemOrderRepository();
    if (!$itemOrderRepository->persist($itemOrder)) {
        return 0;
    }

    return $itemOrder->totalPrice();
}

// 仕様1: 単価*個数が返ってくること
assert(calc_total_price(200, 4) === 800);

// 仕様2: 個数が5個以上なら単価は20円引きとなること
assert(calc_total_price(200, 5) === 900);

// バグ: 合計額がマイナスになる!?
echo calc_total_price(15, 10) . PHP_EOL;

// 仕様3: 単価が100円以下のときには割引しないこと
assert(calc_total_price(100, 5) === 500);

// 仕様4: 合計額が3000円以上のときには合計額は300円引きとなること
assert(calc_total_price(1000, 4) === 3700);

echo 'all green' . PHP_EOL;


class ItemOrder
{
    private int $unitPrice;

    private int $quantity;

    private DateTimeImmutable $orderedAt;

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
        if (3000 <= $totalPrice) {
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