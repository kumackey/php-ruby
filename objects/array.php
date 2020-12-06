<?php
$days_of_week = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
var_dump($days_of_week);
// array(7) {
//   [0]=>
//   string(6) "Monday"
//   [1]=>
//   string(7) "Tuesday"
//   [2]=>
//   string(9) "Wednesday"
//   [3]=>
//   string(8) "Thursday"
//   [4]=>
//   string(6) "Friday"
//   [5]=>
//   string(8) "Saturday"
//   [6]=>
//   string(6) "Sunday"
// }

echo $days_of_week[0];
// Monday

$fruits = ['red' => 'apple', 'purple' => 'grape', 'yellow' => 'lemon'];
var_dump($fruits);
// array(3) {
//   ["red"]=>
//   string(5) "apple"
//   ["purple"]=>
//   string(5) "grape"
//   ["yellow"]=>
//   string(5) "lemon"
//}

echo $fruits['red'];
// apple