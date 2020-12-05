<?php
echo 'sample!';
// sample!

$sample_array = [1, 'sample'];
echo $sample_array;
// Array

var_dump($sample_array);
// array(2) {
//   [0]=>
//   int(1)
//   [1]=>
//   string(6) "sample"
// }

foreach ($sample_array as $value) {
    echo $value . PHP_EOL;
}
// 1
// sample
