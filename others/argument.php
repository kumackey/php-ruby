<?php

function calcGokuScouter($original_power, $kaio_ken = 1, $is_suppressed = false, $is_super_saiyan = false)
{
    $power = $original_power * $kaio_ken;

    if ($power > 5000 && $is_suppressed) {
        $power = 5000;
    }

    if ($is_super_saiyan) {
        $power += 100000000;
    }

    return $power;
}

echo calcGokuScouter(85000);
// 85000

echo calcGokuScouter(85000, 2);
// 170000

echo calcGokuScouter(85000, 1, true);
// 5000

echo calcGokuScouter(85000, 20, false, true);
// 101700000