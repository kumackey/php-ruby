<?php

foreach (range(1, 100) as $number) {
    if($number === 15 | $number === 30 | $number === 45 | $number === 60 | $number === 75 | $number === 90) {
        echo "FizzBuzz\n";
    } elseif ($number % 3 === 0) {
        echo "Fizz\n";
    } elseif ($number % 5 === 0) {
        echo "Buzz\n";
    } else {
        echo "{$number}\n";
    }
}
