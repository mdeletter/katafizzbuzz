<?php
/***
 * Rules in increasing order of precedence
 *
 *     divisible by 3 = fizz
 *     divisible by 5 = buzz
 * divisible by 3 & 5 = fizzbuzz
 *         contains 3 = fizz
 *         contains 5 = buzz
 **/
include 'katafizzbuzz.php';

$kfb = new kataFizzBuzz;
$kfb->run();

assert($kfb->lines[3]=='fizz');
assert($kfb->lines[5]=='buzz');
assert($kfb->lines[15]=='buzz');
assert($kfb->lines[30]=='fizz');
assert($kfb->lines[45]=='buzz');
assert($kfb->lines[50]=='buzz');
assert($kfb->lines[60]=='fizzbuzz');
