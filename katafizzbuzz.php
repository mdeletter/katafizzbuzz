<?php
header('Content-Type: text/plain');

for ($i=1; $i <= 100 ; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0){
        print 'FizzBuzz';
    } elseif ($i % 3 == 0){
        print 'Fizz';
    } elseif ($i % 5 == 0){
        print 'Buzz';
    } else {
        print $i;
    }
    print PHP_EOL;
}
