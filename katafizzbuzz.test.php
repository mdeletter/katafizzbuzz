<?php

include 'katafizzbuzz.php';

$kfb = new kataFizzBuzz;
$kfb->run();

assert($kfb->lines[4]=='fizz');

assert($kfb->lines[45]=='buzz');