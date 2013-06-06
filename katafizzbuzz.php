<?php
header('Content-Type: text/plain');

class kataFizzBuzz
{
    public $lines  = array();

    public function run()
    {
        for ($i=1; $i <= 100 ; $i++) {
            $this->lines[$i] = $i;
            if ($i % 3 == 0 && $i % 5 == 0){
                $this->lines[$i] = 'fizzbuzz';
            }
            if ($i % 3 == 0) {
                $this->lines[$i] = 'fizz';
            }
            if ($i % 5 == 0 || strpos($i, '5') > 0) {
                $this->lines[$i] = 'buzz';
            }
        }
    }

    public function printOutput()
    {
        echo implode(PHP_EOL,$this->lines);
    }
}
