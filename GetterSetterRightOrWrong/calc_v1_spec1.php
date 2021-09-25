<?php

function calc_total_price(int $unitPrice, int $quantity): int
{
    $itemOrder = new ItemOrder($unitPrice, $quantity, new DateTimeImmutable());

    $itemOrderRepository = new ItemOrderRepository();
    if (!$itemOrderRepository->persist($itemOrder)) {
        return 0;
    }

    return $itemOrder->getUnitPrice() * $itemOrder->getQuantity();
}

// 仕様1: 単価*個数が返ってくること
assert(calc_total_price(200, 4) === 800);

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