<?php
$sequence_numbers = [1, 2, 3, 4, 5];
$sequence_numbers[] = 6;
var_dump($sequence_numbers);
// array(6) {
//   [0]=>
//   int(1)
//   [1]=>
//   int(2)
//   [2]=>
//   int(3)
//   [3]=>
//   int(4)
//   [4]=>
//   int(5)
//   [5]=>
//   int(6)
// }

$fruits = ['red' => 'apple', 'purple' => 'grape', 'yellow' => 'lemon'];
$fruits['orange'] = 'pumpkin';
var_dump($fruits);
// array(4) {
//   ["red"]=>
//   string(5) "apple"
//   ["purple"]=>
//   string(5) "grape"
//   ["yellow"]=>
//   string(5) "lemon"
//   ["orange"]=>
//   string(7) "pumpkin"
// }

foreach ($sequence_numbers as $number) {
    $multiple_of_3 = $number * 3;
    echo $multiple_of_3 . PHP_EOL;
}
// 3
// 6
// 9
// 12
// 15
// 18

$multiples = array_map(
    function ($number) {
        return $number * 3;
    },
    $sequence_numbers
);
var_dump($multiples);
// array(6) {
//   [0]=>
//   int(3)
//   [1]=>
//   int(6)
//   [2]=>
//   int(9)
//   [3]=>
//   int(12)
//   [4]=>
//   int(15)
//   [5]=>
//   int(18)
// }
