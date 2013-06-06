<?php

include 'katafizzbuzz.php';

$kfb = new kataFizzBuzz;
$kfb->run();

assert($kfb->lines[3]=='fizz');

echo $kfb->lines[45];
assert($kfb->lines[45]=='buzz');
