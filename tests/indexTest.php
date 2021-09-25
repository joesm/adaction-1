<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require("src/FizzBuzz.php");

final class FizzBuzzTest extends TestCase {
    public function testTranslate(): void {
        $this->assertEquals("fizzbuzz", FizzBuzz::translate(-15));
        $this->assertEquals("-14", FizzBuzz::translate(-14));
        $this->assertEquals("lucky", FizzBuzz::translate(-13));
        $this->assertEquals("fizz", FizzBuzz::translate(-12));
        $this->assertEquals("-11", FizzBuzz::translate(-11));
        $this->assertEquals("buzz", FizzBuzz::translate(-10));
        $this->assertEquals("fizz", FizzBuzz::translate(-9));
        $this->assertEquals("-8", FizzBuzz::translate(-8));
        $this->assertEquals("-7", FizzBuzz::translate(-7));
        $this->assertEquals("fizz", FizzBuzz::translate(-6));
        $this->assertEquals("buzz", FizzBuzz::translate(-5));
        $this->assertEquals("-4", FizzBuzz::translate(-4));
        $this->assertEquals("lucky", FizzBuzz::translate(-3));
        $this->assertEquals("-2", FizzBuzz::translate(-2));
        $this->assertEquals("-1", FizzBuzz::translate(-1));

        // Negative zero is an issue in JavaScript, may as well test for it
        $this->assertEquals("0", FizzBuzz::translate(-0));
        $this->assertEquals("0", FizzBuzz::translate(0));

        $this->assertEquals("1", FizzBuzz::translate(1));
        $this->assertEquals("2", FizzBuzz::translate(2));
        $this->assertEquals("lucky", FizzBuzz::translate(3));
        $this->assertEquals("4", FizzBuzz::translate(4));
        $this->assertEquals("buzz", FizzBuzz::translate(5));
        $this->assertEquals("fizz", FizzBuzz::translate(6));
        $this->assertEquals("7", FizzBuzz::translate(7));
        $this->assertEquals("8", FizzBuzz::translate(8));
        $this->assertEquals("fizz", FizzBuzz::translate(9));
        $this->assertEquals("buzz", FizzBuzz::translate(10));
        $this->assertEquals("11", FizzBuzz::translate(11));
        $this->assertEquals("fizz", FizzBuzz::translate(12));
        $this->assertEquals("lucky", FizzBuzz::translate(13));
        $this->assertEquals("14", FizzBuzz::translate(14));
        $this->assertEquals("fizzbuzz", FizzBuzz::translate(15));
    }

    public function testSeries(): void {
        $test_str = '-16 fizzbuzz -14 lucky fizz -11 buzz fizz -8 -7 fizz buzz -4 lucky -2 -1 0 1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16';
        $this->assertEquals($test_str, FizzBuzz::series(-16, 16));
    }
}