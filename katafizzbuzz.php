<?php
header('Content-Type: text/plain');

class kataFizzBuzz
{
    public $lines  = array();

    public function run()
    {
        for ($i=1; $i <= 100 ; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0){
                $this->lines[$i] = 'fizzbuzz';
            } elseif ($i % 3 == 0){
                $this->lines[$i] = 'fizz';
            } elseif ($i % 5 == 0){
                $this->lines[$i] = 'buzz';
            } else {
                $this->lines[$i] = $i;
            }
        }
    }

    public function printOutput()
    {
        echo implode(PHP_EOL,$this->lines);
    }
}
