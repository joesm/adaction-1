<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require("src/FizzBuzz.php");

final class FizzBuzzTest extends TestCase {
    public function testTranslate(): void {
        $fb = new FizzBuzz();
        $this->assertEquals("fizzbuzz", $fb->translate(-15));
        $this->assertEquals("-14", $fb->translate(-14));
        $this->assertEquals("lucky", $fb->translate(-13));
        $this->assertEquals("fizz", $fb->translate(-12));
        $this->assertEquals("-11", $fb->translate(-11));
        $this->assertEquals("buzz", $fb->translate(-10));
        $this->assertEquals("fizz", $fb->translate(-9));
        $this->assertEquals("-8", $fb->translate(-8));
        $this->assertEquals("-7", $fb->translate(-7));
        $this->assertEquals("fizz", $fb->translate(-6));
        $this->assertEquals("buzz", $fb->translate(-5));
        $this->assertEquals("-4", $fb->translate(-4));
        $this->assertEquals("lucky", $fb->translate(-3));
        $this->assertEquals("-2", $fb->translate(-2));
        $this->assertEquals("-1", $fb->translate(-1));

        // Negative zero is an issue in JavaScript, may as well test for it
        $this->assertEquals("0", $fb->translate(-0));
        $this->assertEquals("0", $fb->translate(0));

        $this->assertEquals("1", $fb->translate(1));
        $this->assertEquals("2", $fb->translate(2));
        $this->assertEquals("lucky", $fb->translate(3));
        $this->assertEquals("4", $fb->translate(4));
        $this->assertEquals("buzz", $fb->translate(5));
        $this->assertEquals("fizz", $fb->translate(6));
        $this->assertEquals("7", $fb->translate(7));
        $this->assertEquals("8", $fb->translate(8));
        $this->assertEquals("fizz", $fb->translate(9));
        $this->assertEquals("buzz", $fb->translate(10));
        $this->assertEquals("11", $fb->translate(11));
        $this->assertEquals("fizz", $fb->translate(12));
        $this->assertEquals("lucky", $fb->translate(13));
        $this->assertEquals("14", $fb->translate(14));
        $this->assertEquals("fizzbuzz", $fb->translate(15));
    }

    public function testSeries(): void {
        $fb = new FizzBuzz();
        $test_str = '-16 fizzbuzz -14 lucky fizz -11 buzz fizz -8 -7 fizz buzz -4 lucky -2 -1 0 1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16';
        $this->assertEquals($test_str, $fb->series(-16, 16));

        $this->assertEquals(6, $fb->stats['fizz']);
        $this->assertEquals(4, $fb->stats['buzz']);
        $this->assertEquals(2, $fb->stats['fizzbuzz']);
        $this->assertEquals(4, $fb->stats['lucky']);
        $this->assertEquals(17, $fb->stats['integer']);
    }
}