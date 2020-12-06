<?php
$int3 = 3;

$string3 = "{$int3}";
var_dump($string3);
// string(1) "3"

get_class($string3);
// Warning: get_class() expects parameter 1 to be object, string given in ...

$re_int3 = intval($string3);
var_dump($re_int3);
// int(3)

get_class($re_int3);
// Warning: get_class() expects parameter 1 to be object, int given in ...