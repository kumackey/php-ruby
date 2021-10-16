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

if (empty($filtered_map)) {
    // エンコードするときに空オブジェクトとなる
    $filtered_map = new stdClass();
}

echo json_encode($filtered_map);