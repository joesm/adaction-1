<?php

class FizzBuzz {
    public $stats = [];

    public function __construct() {
        $this->reset_stats();
    }

    /**
     * Translate
     *
     * Turns a single integer into the appropriate string according to the
     * fizzbuzz specification.
     *
     * @param  int  $val
     *
     * @return string
     */
    public function translate(int $val): string
    {
        if ($val === 0) {
            $out = '0';
            $this->stats['integer']++;
        } else if (stripos("$val", '3') !== false) {
            $out = 'lucky';
            $this->stats['lucky']++;
        } else if ($val % 15 == 0) {
            $out = 'fizzbuzz';
            $this->stats['fizzbuzz']++;
        } else if ($val % 5 == 0) {
            $out = 'buzz';
            $this->stats['buzz']++;
        } else if ($val % 3 == 0) {
            $out = 'fizz';
            $this->stats['fizz']++;
        } else {
            $out = "$val";
            $this->stats['integer']++;
        }
        return $out;
    }

    /**
     * Series
     *
     * Creates a series of integers startin with the $min and ending with the $max
     * and translates each of them.  Returns a space delimited string.
     *
     * @param  int  $min
     * @param  int  $max
     *
     * @return string
     */
    public function series(int $min, int $max): string {
        $out = '';
        $this->reset_stats();
        while ($min <= $max) {
            $out .= FizzBuzz::translate($min++) . ' ';
        }
        // return string with trailing space removed
        return substr($out, 0, -1);
    }

    /**
     * Reset Internal Statistics
     */
    private function reset_stats(): void {
        $this->stats = [
            'fizz'     => 0,
            'buzz'     => 0,
            'fizzbuzz' => 0,
            'lucky'    => 0,
            'integer'  => 0
        ];
    }
}
