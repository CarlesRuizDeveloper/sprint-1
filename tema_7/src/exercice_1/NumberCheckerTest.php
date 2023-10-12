<?php
require 'vendor/autoload.php';

require 'NumberChecker.php'; 

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase {

    public function testIsEven() {
        $checker = new NumberChecker(2);
        $this->assertTrue($checker->isEven());

        $checker = new NumberChecker(3);
        $this->assertFalse($checker->isEven());
    }

    public function testIsPositive() {
        $checker = new NumberChecker(5);
        $this->assertTrue($checker->isPositive());

        $checker = new NumberChecker(-2);
        $this->assertFalse($checker->isPositive());
    }

}
