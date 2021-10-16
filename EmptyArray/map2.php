<?php

$map = [
    'even' => [0, 2, 4, 6, 8,],
    'odd' => [1, 3, 5, 7, 9,],
    'prime' => [2, 3, 5, 7,],
];

echo json_encode($map) . PHP_EOL;

// キーがfibonacciの要素のみを選択。結果は空配列となる。
$filtered_map = array_filter($map, function ($key) {
    return $key === 'fibonacci';
}, ARRAY_FILTER_USE_KEY);

if (empty($filtered_map)) {
    // エンコードするときに空オブジェクトとなる
    $filtered_map = new stdClass();
}

echo json_encode($filtered_map);