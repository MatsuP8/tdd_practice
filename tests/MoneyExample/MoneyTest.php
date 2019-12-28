<?php


namespace Test\MoneyExample;


use App\MoneyExample\Dollar;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $dollar = new Dollar(5);

        $this->assertEquals(new Dollar(10), $dollar->times(2));

        $this->assertEquals(new Dollar(15), $dollar->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));

        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}