<?php

class FizzBuzz {
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
    public static function translate(int $val): string {
        if ($val === 0) {
            $out = "0";
        } else if ($val % 15 == 0) {
            $out = "fizzbuzz";
        } else if ($val % 5 == 0) {
            $out = "buzz";
        } else if ($val % 3 == 0) {
            $out = "fizz";
        } else {
            $out = "$val";
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
    public static function series(int $min, int $max): string {
        $out = '';
        while ($min <= $max) {
            $out .= FizzBuzz::translate($min++) . ' ';
        }
        // return string with trailing space removed
        return substr($out, 0, -1);
    }
}
