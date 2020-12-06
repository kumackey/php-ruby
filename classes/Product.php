<?php

class Product
{
    private $price;
    private $cost;

    public function __construct($price, $cost)
    {
        $this->price = $price;
        $this->cost = $cost;
    }

    public function printJudgment()
    {
        if ($this->calcProfit() > 0) {
            echo 'この商品は利益が出ます！どんどん売りましょう！';
        } else {
            echo 'この商品は利益が出ません...売るべきではないかもしれません...';
        }
    }

    private function calcProfit()
    {
        return $this->price - $this->cost;
    }
}

$product = new Product(120, 100);

$product->printJudgment();
// この商品は利益が出ます！どんどん売りましょう！

$product = new Product(90, 100);
$product->printJudgment();
// この商品は利益が出ません...売るべきではないかもしれません...

$product->calcProfit();
// Fatal error: Uncaught Error: Call to private method Product::calcProfit() from context '' in ...
