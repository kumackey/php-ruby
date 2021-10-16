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

// フィルターされた配列が返ってくると期待
echo json_encode($filtered_array);