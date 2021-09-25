<?php

class FizzBuzz {

    /**
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
}

$num = 1;

echo "<ol>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "<li>" . FizzBuzz::translate($num++) . "</li>";
echo "</ol>";