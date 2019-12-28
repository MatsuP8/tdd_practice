<?php


namespace Test\MoneyExample;


use App\MoneyExample\Dollar;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $dollar = new Dollar(5);
        $product = $dollar->times(2);

        $this->assertSame(10, $product->amount);

        $product = $dollar->times(3);
        $this->assertSame(15, $product->amount);
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));

        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}