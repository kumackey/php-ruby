<?php

function calc_total_price(int $unitPrice, int $quantity): int
{
    $itemOrder = new ItemOrder($unitPrice, $quantity, new DateTimeImmutable());
    if (!$itemOrder->validates()) {
        return 0;
    }

    if (5 <= $itemOrder->getQuantity()) {
        $discountedPrice = $itemOrder->getUnitPrice() - 20;
        $itemOrder->setUnitPrice($discountedPrice);
    }

    $itemOrderRepository = new ItemOrderRepository();
    if (!$itemOrderRepository->persist($itemOrder)) {
        return 0;
    }

    return $itemOrder->getUnitPrice() * $itemOrder->getQuantity();
}

// 仕様1: 単価*個数が返ってくること
assert(calc_total_price(200, 4) === 800);

// 仕様2: 単価がマイナスではエラーとなること
assert(calc_total_price(-500, 4) === 0);

// 仕様3: 個数が5個以上なら単価は20円引きとなること
assert(calc_total_price(200, 5) === 900);

// バグ: 合計額がマイナスになる!?
echo calc_total_price(15, 10) . PHP_EOL;

echo 'all green' . PHP_EOL;


class ItemOrder
{
    private int $unitPrice;

    private int $quantity;

    private DateTimeImmutable $orderedAt;

    public function __construct(int $unitPrice, int $quantity, DateTimeImmutable $orderedAt)
    {
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

    public function validates(): bool
    {
        return 0 < $this->unitPrice && 0 < $this->quantity;
    }

    public function setUnitPrice(int $unitPrice)
    {
        $this->unitPrice = $unitPrice;
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