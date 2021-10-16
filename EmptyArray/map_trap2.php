<?php

$map = [
    'even' => [0, 2, 4, 6, 8,],
    'odd' => [1, 3, 5, 7, 9,],
    'prime' => [2, 3, 5, 7,],
];

echo json_encode($map, JSON_FORCE_OBJECT);