<?php

/**
 * JSTのDateitmeImmutableを返却する
 *
 * @param string $time
 * @return DateTimeImmutable
 * @throws Exception
 */
function new_jst_datetime_immutable(string $time)
{
    $timezone_jst = new DateTimeZone('Asia/Tokyo');
    return new DateTimeImmutable($time, $timezone_jst);
}