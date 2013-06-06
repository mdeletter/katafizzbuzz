<?php
header('Content-Type: text/plain');

for ($i=1; $i <= 100 ; $i++) {
    if ($i % 3 == 0){
        print 'fizz';
    } else {
        print $i;
    }
    print PHP_EOL;
}
