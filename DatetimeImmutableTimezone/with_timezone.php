<?php

require_once('new_jst_datetime_immutable.php');

// timezone付きの文字列
$datetime_utc = new DateTimeImmutable('2020-12-30T12:00:00+0000');
$datetime_jst = new_jst_datetime_immutable('2020-12-30T12:00:00+0000');

var_dump($datetime_utc);
var_dump($datetime_jst);