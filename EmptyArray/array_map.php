<?php

$array = [
    0 => 'dog',
    1 => 'cat',
    2 => 'bear',
    3 => 'rabbit',
    4 => 'fox',
];

echo json_encode($array) . PHP_EOL;

$map = [
    'apple' => 'red',
    'lemon' => 'yellow',
    'grape' => 'purple',
    'melon' => 'green',
    'peach' => 'pink',
];

echo json_encode($map);