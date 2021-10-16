<?php

$map = [
    'apple' => 'red',
    'lemon' => 'yellow',
    'grape' => 'purple',
    'melon' => 'green',
    'peach' => 'pink',
];

// 青色だけを選択
$filtered_map = array_filter($map, function ($value) {
    return $value === 'blue';
});

// 強制的にオブジェクトにする
echo json_encode($filtered_map, JSON_FORCE_OBJECT);