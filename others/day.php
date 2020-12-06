<?php

function printYmd($is_beginning_of_month)
{
    $today = new DateTimeImmutable();

    $datetime = null;
    if ($is_beginning_of_month) {
        // 月初を返す
        $datetime = new DateTimeImmutable($today->format('Y-m-01'));
    } else {
        // $is_beginning_of_month = falseでは現在日を返す
        $datetime = $today;
    }

    echo $datetime->format('Y年m月d日です');
}

printYmd(false);
// 2020年12月07日です

printYmd(true);
// 2020年12月01日です

/**
 * 別の書き方。コード量は少ないが分かりにくい
 */
function printYmd2($is_beginning_of_month)
{
    $today = new DateTimeImmutable();
    $datetime = $is_beginning_of_month ? new DateTimeImmutable($today->format('Y-m-01')) : $today;

    echo $datetime->format('Y年m月d日です');
}
