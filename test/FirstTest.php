<?php

require __DIR__ . '/../vendor/autoload.php';

class FirstTest extends \PHPUnit\Framework\TestCase {
    public function testOne() {
        $this->assertEquals( 1, 1 );
    }
}