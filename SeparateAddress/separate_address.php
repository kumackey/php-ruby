<?php

/**
 * @param string $address
 * @return array
 */
function separate_address(string $address)
{
    if (preg_match('@^(.{2,3}?[都道府県])(.+?郡.+?[町村]|.+?市.+?区|.+?[市区町村])(.+)@u', $address, $matches) !== 1) {
        return [
            'state' => null,
            'city' => null,
            'other' => null
        ];
    }

    return [
        'state' => $matches[1],
        'city' => $matches[2],
        'other' => $matches[3],
    ];
}

var_dump(separate_address('京都府京都市東山区清水1丁目294'));
var_dump(separate_address('東京都府中市宮西町2丁目24番地'));

var_dump(separate_address('不正な住所'));

// 市より先がない
var_dump(separate_address('東京都府中市'));

// 市名に村が入ってるのでうまく分けられていない。今回は非対応
var_dump(separate_address('東京都東村山市本町1丁目2番地3'));

