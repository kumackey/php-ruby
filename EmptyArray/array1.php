<?php

$array = [
    0 => 'dog',
    1 => 'cat',
    2 => 'bear',
    3 => 'rabbit',
    4 => 'fox',
];

// 3文字以下のみを選択
$filtered_array = array_filter($array, function ($value) {
    return strlen($value) <= 3;
});

// 数字の添字を付け直す
$filtered_array = array_values($filtered_array);

echo json_encode($filtered_array);